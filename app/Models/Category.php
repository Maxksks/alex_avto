<?php

namespace App\Models;

use App\Models\Category as ModelsCategory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function childrenCat() 
    {
        return $this->hasMany(ModelsCategory::class); 
    }
    public function parentCat()
    {
        return $this->belongsTo(ModelsCategory::class);
    }
}
