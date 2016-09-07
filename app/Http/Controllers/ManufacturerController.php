<?php

namespace App\Http\Controllers;

use App\Category;
use App\Manufacturer;
use App\Product;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ManufacturerController extends Controller
{
    public function show($namealias)
    {
        $category = Category::all();
        $product = Product::join('thuong_hieu','thuong_hieu.id', '=', 'san_pham.id_thuong_hieu')
                                ->where('thuong_hieu.ten_alias',$namealias)
                                ->select('san_pham.*')
                                ->paginate(12);
        $manufacturer = Manufacturer::all();
        return view('manufacturer', ['product' => $product, 'category' => $category, 'manufacturer' => $manufacturer]);
    }
}
