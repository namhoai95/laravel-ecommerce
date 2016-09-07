<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Manufacturer;
use App\Product;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\Admin\AdminAddProductRequest;
use App\Http\Requests\Admin\AdminEditProductRequest;
use App\Http\Controllers\Controller;
use File;

class AdminProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::join('loai_san_pham', 'san_pham.id_loai', '=', 'loai_san_pham.id')
                                    ->join('thuong_hieu','san_pham.id_thuong_hieu', '=', 'thuong_hieu.id')
                                    ->select('san_pham.*','loai_san_pham.ten_loai','thuong_hieu.ten_thuong_hieu')
                                    ->orderBy('id','asc')
                                    ->get();
        return view('admin.products.list',['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all();
        $manufacturer = Manufacturer::all();
        return view('admin.products.create', ['category' => $category, 'manufacturer' => $manufacturer]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdminAddProductRequest $request)
    {
        $product = new Product();

        $product->ten_san_pham = $request->name;
        $product->ten_alias = changeTitle($request->name);
        $product->gia = $request->price;
        $product->mo_ta = $request->description;
        $imageName = $request->file('image')->getClientOriginalName();
        $product->url_hinh = $imageName;
        $request->file('image')->move('images/products/', $imageName);
        $product->ngay_nhap = $request->date;
        $product->ton_kho = $request->number;
        $product->an_hien = $request->hide;
        $product->id_loai = $request->category;
        $product->id_thuong_hieu = $request->producer;
        $product->save();

        return redirect()->route('admin.products.list')->with(['flashLevel' => 'success', 'flashMessage' => 'Thêm sản phẩm thành công']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        $category = Category::all();
        $manufacturer = Manufacturer::all();
        return view('admin.products.edit', ['product' => $product, 'category' => $category, 'manufacturer' => $manufacturer]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AdminEditProductRequest $request, $id)
    {
        $product = Product::find($id);

        $product->ten_san_pham = $request->name;
        $product->ten_alias = changeTitle($request->name);
        $product->gia = $request->price;
        $product->mo_ta = $request->description;
        $product->ngay_nhap = $request->date;
        $product->ton_kho = $request->number;
        $product->id_loai = $request->category;
        $product->id_thuong_hieu = $request->producer;
        $product->save();

        return redirect()->route('admin.products.list')->with(['flashLevel' => 'success', 'flashMessage' => 'Cập nhật sản phẩm thành công']);;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,Request $request)
    {
        if($request->ajax())
        {
            $product = Product::find($id);
            $img = 'images/products/' . $product->url_hinh;
            if(File::exists($img))
            {
                File::delete($img);
            }
            $product->delete();
            return response()->json('success');
        }
    }

    public function postEditHide(Request $request)
    {
        $id = $request->get('id');
        $hide = $request->get('hide');
        if($request->ajax())
        {
            $product = Product::find($id);
            $product->an_hien = $hide;
            $product->save();
        }
        return response()->json('success');
    }
}
