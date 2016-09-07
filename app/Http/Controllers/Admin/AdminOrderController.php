<?php

namespace App\Http\Controllers\Admin;

use App\Order;
use App\Status;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminOrderController extends Controller
{
    public function getList()
    {
        $orders = Order::join('tinh_trang', 'tinh_trang.id', '=', 'don_dat_hang.id_tinh_trang')
                        ->join('users','users.id', '=', 'don_dat_hang.id_tai_khoan')
                        ->select('don_dat_hang.id','don_dat_hang.ngay_lap','don_dat_hang.tong_thanh_tien','don_dat_hang.dia_diem_giao',
                            'don_dat_hang.dien_thoai','don_dat_hang.email','tinh_trang.tinh_trang','users.name')
                        ->orderBy('id','asc')
                        ->get();

        return view('admin.order.list',['orders' => $orders]);
    }

    public function getEdit($id)
    {
        $order = Order::find($id);
        $status = Status::select('id','tinh_trang')->get();
        return view('admin.order.edit',['status' => $status,'order' => $order]);
    }

    public function postEdit(Request $request,$id)
    {
        $order = Order::find($id);
        $order->tinh_trang = $request->status;
        $order->tong_thanh_tien = $request->total;
        $order->dia_diem_giao = $request->address;

        $order->save();
        return redirect()->route('admin.order.list')->with(['flashLevel' => 'success', 'flashMessage' => 'Cập nhật đơn thành công']);
    }
}
