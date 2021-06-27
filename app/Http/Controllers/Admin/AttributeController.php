<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Attribute_set;
use App\Models\Attribute_set_value;
use App\Models\Product;
use Illuminate\Http\Request;

class AttributeController extends Controller
{
    public function index(Product $prod)
    {
        return view('attributes', [
            'product' => $prod
        ]);
    }
    
    public function add(Request $request, Product $prod)
    {
        $attribute = new Attribute_set();
        $attribute->attribute_name = $request->name;
        $attribute->Products_id = $prod->id;
        $attribute->value = $request->value;

        $attribute->save();
        
        return redirect()->back();
    }
}
