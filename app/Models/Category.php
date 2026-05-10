<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public static $category;

    public static function storeCategory($request)
    {
        self::$category = new Category();
        self::$category->name = $request->name;
        self::$category->description = $request->description;
        self::$category->image = $request->image;
        self::$category->status = 1;
        self::$category->save();
    }

    public static function updateCategory($request, $id)
    {
        self::$category = Category::findOrfail($id);
        self::$category->name = $request->name;
        self::$category->description = $request->description;
        self::$category->image = $request->image;
        self::$category->status = 1;
        self::$category->save();
    }

    public static function destroyCategory($id)
    {
        self::$category = Category::findOrfail($id);
        self::$category->delete();
    }

}
