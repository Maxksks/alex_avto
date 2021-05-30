<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function images()
    {
        return $this->hasMany(Image::class);
    }

    public function priceHistory()
    {
        return $this->belongsTo(PriceHistory::class);
    }

    public function carts()
    {
        return $this->belongsToMany(Cart::class);;
    }

    public function wishLists()
    {
        return $this->belongsToMany(WishList::class);;
    }

    public function attributeSets()
    {
        return $this->belongsToMany(Attribute_set::class);;
    }
}
