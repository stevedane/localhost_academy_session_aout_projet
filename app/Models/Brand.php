<?php

namespace App\Models;

use App\Http\Controllers\CategoryController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Brand extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
    ];

    public function category(): HasOne
   {
        return $this->hasOne(Category::class ,"category_id" ,"id");
   }
}