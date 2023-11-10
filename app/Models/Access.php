<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Access extends Model
{
    use HasFactory;

    protected $fillable =([
       'id_user',
       'id_role',
       'user_code'
    ]);

    public function user(){

        return $this->belongsTo(User::class,'id_user','id');
    }

    public function role(){

        return $this->belongsTo(Role::class,'id_role','id');
    }
}
