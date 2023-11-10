<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Location extends Model
{
    use HasFactory;
    protected $fillable=([

        
    ]);
    public function customer()
        {
            return  $this->BelongsTo(customer::class,'id_custommer','id');
        }

        public function payment()
        {
            return  $this->hasOne(payment::class,'id_payment','id');
        }
}
