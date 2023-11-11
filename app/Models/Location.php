<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Location extends Model
{
    use HasFactory;
    
    public function customer():BelongsTo
        {
            return  $this->belongsTo(Customer::class,'id_custommer','id');
        }

        public function payment():HasOne
        {
            return  $this->hasOne(Payment::class,'id_payment','id');
        }
        public function car():HasMany
        {
            return  $this->hasMany(Car::class,'id_car','id');
        }
}
