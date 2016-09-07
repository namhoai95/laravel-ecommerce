<?php

namespace App\Http\Controllers\Admin;

use App\Manufacturer;

use Carbon\Carbon;
use Request;
use App\Http\Requests\Admin\AdminAddManufacturerRequest;
use App\Http\Requests\Admin\AdminEditManufacturerRequest;
use App\Http\Controllers\Controller;

class AdminManufacturerController extends Controller
{
    public function getList()
    {
        $manufacturers = Manufacturer::all();
        return view('admin.manufacturer.list', ['manufacturers' => $manufacturers]);
    }

    public function getCreate()
    {
        return view('admin.manufacturer.create');
    }

    public function postCreate(AdminAddManufacturerRequest $request)
    {
        $manufacturer = new Manufacturer();

        $manufacturer->ten_thuong_hieu = $request->name;
        $manufacturer->ten_alias = changeTitle($request->name);
        $manufacturer->thu_tu = $request->position;
        $manufacturer->an_hien = $request->hide;

        $manufacturer->save();
        return redirect()->route('admin.manufacturer.list')->with(['flashLevel' => 'success', 'flashMessage' => 'Thêm thương hiệu thành công']);
    }

    public function delete($id)
    {
        if(Request::ajax())
        {
            $manufacturer = Manufacturer::find($id);
            $manufacturer->delete();
            return response()->json('success');
        }
    }

    public function getEdit($id)
    {
        $manufacturer = Manufacturer::find($id);
        return view('admin.manufacturer.edit', ['manufacturer' => $manufacturer]);
    }

    public function postEdit(AdminEditManufacturerRequest $request, $id)
    {
        $manufacturer = Manufacturer::find($id);

        $manufacturer->ten_thuong_hieu = $request->name;
        $manufacturer->ten_alias = changeTitle($request->name);
        $manufacturer->thu_tu = $request->position;

        $manufacturer->save();
        return redirect()->route('admin.manufacturer.list')->with(['flashLevel' => 'success', 'flashMessage' => 'Cập nhật thương hiệu thành công']);
    }

    public function postEditHide()
    {
        $id = Request::get('id');
        $hide = Request::get('hide');
        if(Request::ajax())
        {
            $manufacturer = Manufacturer::find($id);
            $manufacturer->an_hien = $hide;
            $manufacturer->save();
        }
        $update = Carbon::createFromTimestamp(strtotime($manufacturer->updated_at))->diffForHumans();
        return response()->json($update);
    }
}
