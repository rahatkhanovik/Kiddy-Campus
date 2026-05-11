<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public static $products;

    public static function storeProduct($request)
    {
        self::$products = new Product();
        self::$products->name = $request->name;
        self::$products->description = $request->description;
        self::$products->image = $request->image;
        self::$products->status = 1;
        self::$products->save();
    }

    public static function updateProduct($request, $id)
    {
        self::$products = Product::findOrfail($id);
        self::$products->name = $request->name;
        self::$products->description = $request->description;
        self::$products->image = $request->image;
        self::$products->status = 1;
        self::$products->save();
    }
    public static function destroyProduct($id)
    {
        self::$products = Product::findOrfail($id);
        self::$products->delete();
    }
}
