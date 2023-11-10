<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function accesses(): hasMany{
        return $this->hasMany(access::class);
    }
    
    use HasFactory;
}
