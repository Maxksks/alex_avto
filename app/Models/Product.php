<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function category()
    {
        return $this->belongsTo(Category::class, 'Categories_id');
    }

    public function images()
    {
        return $this->hasMany(Image::class);
    }

    public function priceHistory()
    {
        return $this->hasOne(PriceHistory::class);
    }

    public function carts()
    {
        return $this->belongsToMany(Cart::class);
    }

    public function wishLists()
    {
        return $this->belongsToMany(WishList::class);
    }

    public function attributeSets()
    {
        return $this->hasMany(Attribute_set::class);
    }
}
