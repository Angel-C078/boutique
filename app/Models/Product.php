<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    use HasFactory;
            //fillable 
         protected $fillable = [
             'name',
             'description',
             'photo',
             'price',
             'discount',
             'stock_quantity',
             'new',
             'category_id'
         ];
         protected $casts = [
             'new' => 'boolean',
         ];

         //liaison avec category
    public function category():BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
 

