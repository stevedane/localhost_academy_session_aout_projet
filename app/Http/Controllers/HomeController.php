<?php

namespace App\Http\Controllers;

use App\Mail\Test;
use App\Mail\TestMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(Auth::user()){
            return redirect()->route('dashboard');
        }

        return redirect()->route('login');
    }

    public function dashboard(){
        return view('home');
    }

    public function profile(){
        return view('profile');
    }

    public function storeProfile(Request $request, User $user){

        $request->validate([
            'name' =>'nullable',
            'picture' =>'nullable|image',
            'email' =>['nullable',Rule::unique('users')->ignore($user->id)],
        ]);

        $name = $request->input('name');
        $email = $request->input('email');

        $user->name = $name ?? $user->name;
        $user->email = $email ?? $user->email;

        if($request->hasFile('picture')){
            $picture = $request->file('picture');

            $pictureFileName = 'picture_' . $user->id . '.' . $picture->getClientOriginalExtension();
            
            $path = "profiles/" . $pictureFileName;
                
            Storage::disk('public')->put($path, file_get_contents($picture));

            $user->picture = $pictureFileName;
        }
        Mail::to('s.fasseu@gmail.com')->send(new Test());

        $user->save();
        
        return redirect()->route('profile');
    }

    public function mail(){

        Mail::to('luzmia277@gmail.com')->send(new TestMail());

        return true;
    }
}
