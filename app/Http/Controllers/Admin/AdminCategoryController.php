<?php

namespace App\Http\Controllers\Admin;

use App\Category;

use Carbon\Carbon;
use Request;
use App\Http\Requests\Admin\AdminAddCategoryRequest;
use App\Http\Requests\Admin\AdminEditCategoryRequest;
use App\Http\Controllers\Controller;

class AdminCategoryController extends Controller
{
    public function getList()
    {
        $categorys = Category::all();
        return view('admin.category.list', ['categorys' => $categorys]);
    }

    public function getCreate()
    {
        return view('admin.category.create');
    }

    public function postCreate(AdminAddCategoryRequest $request)
    {
        $category = new Category();

        $category->ten_loai = $request->name;
        $category->ten_alias = changeTitle($request->name);
        $category->thu_tu = $request->position;
        $category->an_hien = $request->hide;

        $category->save();
        return redirect()->route('admin.category.list')->with(['flashLevel' => 'success', 'flashMessage' => 'Thêm chủng loại thành công']);
    }

    public function delete($id)
    {
        if(Request::ajax())
        {
            $category = Category::find($id);
            $category->delete();
            return response()->json('success');
        }
    }

    public function getEdit($id)
    {
        $category = Category::find($id);
        return view('admin.category.edit', ['category' => $category]);
    }

    public function postEdit(AdminEditCategoryRequest $request, $id)
    {
        $category = Category::find($id);

        $category->ten_loai = $request->name;
        $category->ten_alias = changeTitle($request->name);
        $category->thu_tu = $request->position;

        $category->save();

        return redirect()->route('admin.category.list')->with(['flashLevel' => 'success', 'flashMessage' => 'Cập nhật chủng loại thành công']);
    }

    public function postEditHide()
    {
        $id = Request::get('id');
        $hide = Request::get('hide');
        if(Request::ajax())
        {
            $category = Category::find($id);
            $category->an_hien = $hide;
            $category->save();
        }
        $update = Carbon::createFromTimestamp(strtotime($category->updated_at))->diffForHumans();
        return response()->json($update);
    }
}
