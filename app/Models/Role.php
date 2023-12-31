<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Role extends Model
{

    public function accesses(): HasMany{
        return $this->hasMany(access::class);
    }
    
    use HasFactory;
}
