<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\Admin\AdminAddUserRequest;
use App\Http\Controllers\Controller;
use Auth;

class AdminUserController extends Controller
{
    public function getList()
    {
        $user = User::select('id','name','email','phone','level','created_at','updated_at')->get();
        return view('admin.user.list',['user' => $user]);
    }

    public function getCreate()
    {
        return view('admin.user.create');
    }

    public function postCreate(AdminAddUserRequest $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->phone = $request->phone;
        $user->level = $request->level;
        $user->remember_token = $request->_token;

        $user->save();
        return redirect()->route('admin.user.list')->with(['flashLevel' => 'success', 'flashMessage' => 'Thêm người dùng thành công']);
    }

    public function delete($id)
    {
        $userCurrentLogin = Auth::user()->id;
        $user = User::find($id);
        if(($id == 1) || ($userCurrentLogin != 2 && $user->level == 1))
        {
            return redirect()->route('admin.user.list')->with(['flashLevel' => 'danger', 'flashMessage' => 'Không thể xóa người dùng']);
        }
        else
        {
            $user->delete();
            return redirect()->route('admin.user.list')->with(['flashLevel' => 'success', 'flashMessage' => 'Xóa người dùng thành công']);
        }
    }

    public function getEdit($id)
    {
        $user = User::find($id);
        if(Auth::user()->id != 1 && ($id == 1 || ($user->level == 1 && Auth::user()->id != $id)))
        {
            return redirect()->route('admin.user.list')->with(['flashLevel' => 'danger', 'flashMessage' => 'Bạn không thể cập nhật người dùng']);
        }
        return view('admin.user.edit',['user' => $user, 'id' => $id]);
    }

    public function postEdit($id,Request $request)
    {
        $user = User::find($id);
        if($request->name)
        {
            $this->validate($request,[
                'repassword' => 'same:password'
            ],
            [
                'repassword.same' => 'Mật khẩu nhập lại không đúng'
            ]);
            $pass = $request->password;
            $user->password = bcrypt($pass);
        }
        $user->remember_token = $request->_token;
        $user->phone = $request->phone;
        $user->save();
        return redirect()->route('admin.user.list')->with(['flashLevel' => 'success', 'flashMessage' => 'Cập nhật người dùng thành công']);
    }
}
