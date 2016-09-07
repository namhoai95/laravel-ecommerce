<?php

namespace App\Http\Controllers;

use App\Category;
use App\Manufacturer;
use App\Product;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function show($namealias)
    {
        $category = Category::select('id','ten_loai','ten_alias')->get();
        $product = Product::join('loai_san_pham','loai_san_pham.id', '=', 'san_pham.id_loai')
                                ->where('loai_san_pham.ten_alias',$namealias)
                                ->select('san_pham.id','san_pham.ten_san_pham','san_pham.ten_alias','san_pham.gia','san_pham.mo_ta',
                                         'san_pham.url_hinh','san_pham.ton_kho','san_pham.id_loai','san_pham.id_thuong_hieu')
                                ->paginate(12);

        $manufacturer = Manufacturer::select('id','ten_thuong_hieu','ten_alias')->get();
        return view('category', ['product' => $product, 'category' => $category, 'manufacturer' => $manufacturer]);
    }
}
