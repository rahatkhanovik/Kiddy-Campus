<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    public static $brands;

    public static function storeBrand($request)
    {
        self::$brands = new Brand();
        self::$brands->name = $request->name;
        self::$brands->description = $request->description;
        self::$brands->image = $request->image;
        self::$brands->status = 1;
        self::$brands->save();
    }

    public static function updateBrand($request, $id)
    {
        self::$brands = Brand::findOrfail($id);
        self::$brands->name = $request->name;
        self::$brands->description = $request->description;
        self::$brands->image = $request->image;
        self::$brands->status = 1;
        self::$brands->save();
    }
    public static function destroyBrand($id)
    {
        self::$brands = Brand::findOrfail($id);
        self::$brands->delete();
    }

}
