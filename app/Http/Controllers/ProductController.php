<?php

namespace App\Http\Controllers;

use App\Category;
use App\Comment;
use App\Manufacturer;
use App\Order;
use App\OrderDetail;
use App\Product;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Cart;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Str;
use Request;
use Mail;
use Auth;
use Response;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function getDataIndex()
    {
        $category = Category::all();
        $product = Product::take(12)->orderBy('id','desc')->get();
        $manufacturer = Manufacturer::all();
        return view('index', ['category' => $category, 'product' => $product, 'manufacturer' => $manufacturer]);
    }

    public function getProduct()
    {
        $category = Category::all();
        $product = Product::select('id','ten_san_pham','ten_alias','gia','mo_ta','url_hinh','ton_kho','id_thuong_hieu','id_loai')->orderBy('id','asc')->paginate(12);
        $manufacturer = Manufacturer::all();
        if(Request::ajax())
        {
            return view('product-item', array('product' => $product))->__toString();
        }
        return view('products', ['category' => $category,'product' => $product, 'manufacturer' => $manufacturer]);
    }

    public function buyItem($id)
    {
        $productBuy = Product::find($id);
        Cart::add(array('id' => $id, 'name' => $productBuy->ten_san_pham, 'qty' => 1, 'price' => $productBuy->gia, 'options' => array('img' => $productBuy->url_hinh)));
        return redirect()->route('cart');
    }

    public function cart()
    {
        $content = Cart::content();
        $total = Cart::total();
        return view('cart', ['content' => $content, 'total' => $total]);
    }

    public function deleteProduct()
    {
        if(Request::ajax())
        {
            $id = Request::get('id');
            Cart::remove($id);
            $total = Cart::total();
            return response()->json(['oke' => 'oke', 'total' => number_format($total,0) . ' VNĐ']);
        }
    }

    public function updateProduct()
    {
        if(Request::ajax())
        {
            $rowid = Request::get('rowid');
            $qty = Request::get('qty');
            Cart::update($rowid,$qty);
            $total = Cart::total();
            $cart = Cart::get($rowid);
            $price = $cart->subtotal;
            echo json_encode(array('subtotal' => number_format($price,0),'total' => number_format($total,0) . ' VNĐ'));
        }
    }

    public function getPay()
    {
        $content = Cart::content();
        $total = Cart::total();
        return view('pay', ['content' => $content, 'total' => $total]);
    }

    public function postPay()
    {
        $content = Cart::content();
        $total = Cart::total();

        if(Auth::check())
        {
            $userId = Auth::user()->id;
        }
        else
        {
            $userId = 3;
        }

        if(Cart::count() <= 0)
        {
            return redirect()->back();
        }

        $order = new Order();
        $order->ngay_lap = date('Y-m-d h:i:s');
        $order->tong_thanh_tien = $total;
        $order->dia_diem_giao = Request::input('message');
        $order->dien_thoai = Request::input('phone');
        $order->id_tai_khoan = $userId;
        $order->email = Request::input('email');
        $order->ten_nguoi_mua = Request::input('name');

        $order->id_tinh_trang = 1;
        $order->save();


        foreach($content as $item)
        {
            $orderdetail = new OrderDetail();
            $orderdetail->so_luong = $item->qty;
            $orderdetail->gia_ban = $item->price;
            $orderdetail->id_don_dat_hang = $order->id;
            $orderdetail->id_san_pham = $item->id;
            $product = Product::find($item->id);
            if($item['qty'] > $product->ton_kho)
            {
                return redirect()->back()->with(['flashLevel' => 'danger', 'flashMessage' => 'Số lượng mua vượt quá số lượng hiện tại']);
            }
            else if($product->ton_kho == 0)
            {
                return redirect()->back()->with(['flashLevel' => 'danger', 'flashMessage' => 'Sản phẩm đã hết hàng xin vui lòng chọn sản phẩm khác']);
            }
            else
            {
                $product->so_lan_mua = $product->so_lan_mua + 1;
                $product->ton_kho = $product->ton_kho - $item->qty;
                $product->save();
            }
            $orderdetail->save();
        }

        $data = ['name' => Request::input('name'), 'msg' => Request::input('message'), 'content' => $content, 'total' => $total];
        Mail::send('blanks.blanks-pay',$data, function($message) {
            $message->from('noreply@scepter.com','Scepter Shop');
            $message->to(Request::input('email'),Request::input('name'))->subject('Phiếu mua hàng');
        });


        $cartCount = Cart::count();
        $content = Cart::content();
        $data = ['name' => Request::input('name'), 'msg' => Request::input('message'), 'count' => $cartCount, 'content' => $content, 'total' => $total, 'phone' => Request::input('phone')];
        Mail::send('blanks.blanks-admin',$data,function($message) {
            $message->from('noreply@scepter.com', 'Scepter Shop');
            $message->to('namhoai95@gmail.com', 'Nam Hoài')->subject('Phiếu mua hàng của' . ' ' . Request::input('name'));
        });

        foreach($content as $item)
        {
            Cart::remove($item['rowid']);
        }

        return view('order-success',['name' => Request::input('name'), 'total' => $total]);

    }


    public function search()
    {
        $keywords = Request::input('search');
        $product = Product::where('ten_san_pham','like','%'. $keywords . '%')
            ->select('id','ten_san_pham','ten_alias','gia','mo_ta','url_hinh','ton_kho','id_loai','id_thuong_hieu')
            ->paginate(12);
        $manufactuer = Manufacturer::select('id','ten_thuong_hieu','ten_alias')->get();
        $category = Category::select('id','ten_alias','ten_loai')->get();
        return view('product-search', ['product' => $product, 'manufacturer' => $manufactuer, 'category' => $category,'keyword' => $keywords]);
    }

    public function searchAjax()
    {
        $keywords = Request::get('keywords');
        $product = Product::where('ten_san_pham', 'like', '%' . $keywords . '%')
            ->select('id', 'ten_san_pham','ten_alias')
            ->take(10)->orderBy('id','desc')->get();
        $searchProducts = new Collection();
        foreach($product as $item)
        {
            if(Str::contains(Str::lower($item->ten_san_pham), Str::lower($keywords)))
            {
                $searchProducts->add($item->ten_san_pham);
            }
        }

        return json_encode(array('searchProducts' => $searchProducts));
    }

    public function searchAdvanced()
    {
        $hot = Request::input('hot');
        $price = Request::input('price');
        $categoryID = Request::input('category');
        $manufacturerID = Request::input('manufacturer');

        $manufactuer = Manufacturer::select('id','ten_thuong_hieu','ten_alias')->get();
        $category = Category::select('id','ten_alias','ten_loai')->get();
        if($hot == 1 && $price == 1)
        {
            $product = Product::where('so_lan_xem','>',5)
                                ->where('gia','<',1000000)
                                ->where('id_loai',$categoryID)
                                ->where('id_thuong_hieu',$manufacturerID)
                                ->select('id','ten_san_pham','ten_alias','gia','mo_ta','url_hinh','ton_kho','id_loai','id_thuong_hieu')
                                ->paginate(12);
            return view('product-searchadvanced', ['product' => $product, 'manufacturer' => $manufactuer, 'category' => $category]);
        }
        else if($hot == 1 && $price == 2)
        {
            $product = Product::where('so_lan_xem','>',5)
                ->where('gia','<',5000000)
                ->where('id_loai',$categoryID)
                ->where('id_thuong_hieu',$manufacturerID)
                ->select('id','ten_san_pham','ten_alias','gia','mo_ta','url_hinh','ton_kho','id_loai','id_thuong_hieu')
                ->paginate(12);
            return view('product-searchadvanced', ['product' => $product, 'manufacturer' => $manufactuer, 'category' => $category]);
        }
        else if($hot == 1 && $price == 3)
        {
            $product = Product::where('so_lan_xem','>',5)
                ->where('gia','<',7000000)
                ->where('id_loai',$categoryID)
                ->where('id_thuong_hieu',$manufacturerID)
                ->select('id','ten_san_pham','ten_alias','gia','mo_ta','url_hinh','ton_kho','id_loai','id_thuong_hieu')
                ->paginate(12);
            return view('product-searchadvanced', ['product' => $product, 'manufacturer' => $manufactuer, 'category' => $category]);
        }
        else if($hot == 2 && $price == 1)
        {
            $product = Product::where('so_lan_mua','>',5)
                ->where('gia','<',1000000)
                ->where('id_loai',$categoryID)
                ->where('id_thuong_hieu',$manufacturerID)
                ->select('id','ten_san_pham','ten_alias','gia','mo_ta','url_hinh','ton_kho','id_loai','id_thuong_hieu')
                ->paginate(12);
            return view('product-searchadvanced', ['product' => $product, 'manufacturer' => $manufactuer, 'category' => $category]);
        }
        else if($hot == 2 && $price == 2)
        {
            $product = Product::where('so_lan_mua','>',5)
                ->where('gia','<',5000000)
                ->where('id_loai',$categoryID)
                ->where('id_thuong_hieu',$manufacturerID)
                ->select('id','ten_san_pham','ten_alias','gia','mo_ta','url_hinh','ton_kho','id_loai','id_thuong_hieu')
                ->paginate(12);
            return view('product-searchadvanced', ['product' => $product, 'manufacturer' => $manufactuer, 'category' => $category]);
        }
        else
        {
            $product = Product::where('so_lan_mua','>',5)
                ->where('gia','<',7000000)
                ->where('id_loai',$categoryID)
                ->where('id_thuong_hieu',$manufacturerID)
                ->select('id','ten_san_pham','ten_alias','gia','mo_ta','url_hinh','ton_kho','id_loai','id_thuong_hieu')
                ->paginate(12);
            return view('product-searchadvanced', ['product' => $product, 'manufacturer' => $manufactuer, 'category' => $category]);
        }
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($name)
    {
        $name_parts = explode("-", $name);
        $id = end($name_parts);
        $product = Product::where('id' ,$id)
            ->select('id','ten_san_pham','ten_alias','gia','mo_ta','url_hinh','ton_kho','id_loai','id_thuong_hieu','so_lan_xem')->get()->first();
        $product->so_lan_xem = $product->so_lan_xem + 1;
        $product->save();
        $category = Category::select('id','ten_loai','ten_alias')->take(5)->get();
        $manufacturer = Manufacturer::all();
        $comments = Comment::where('id_san_pham',$id)->select('ten_nguoi_dung','noi_dung','created_at')->paginate(5);
        $productsCount = Comment::where('id_san_pham',$id)->count();
        if(Request::ajax())
        {
            $product->so_lan_xem = $product->so_lan_xem - 1;
            $product->save();
            return view('comments-product', array('comments' => $comments))->__toString();
        }
        return view('detail', ['product' => $product, 'category' => $category, 'manufacturer' => $manufacturer, 'comments' => $comments, 'productsCount' => $productsCount]);
    }




    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
