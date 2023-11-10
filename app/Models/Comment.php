<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = ([
       'id_user',
       'description',
       'rate'
    ]);

    public function user(){

        return $this->hasOne(User::class,'id_user','id');
    }
}
