<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = ([
       'id_user',
       'description',
       'rate'
    ]);

    public function user():HasOne{

        return $this->hasOne(User::class,'id_user','id');
    }
}
