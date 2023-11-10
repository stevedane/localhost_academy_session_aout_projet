<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Payment extends Model
{
    public  function location():BelongsTo{
        return $this->belongsTo(location::class,'idlocation','idpayment');
    }
    use HasFactory;
}
