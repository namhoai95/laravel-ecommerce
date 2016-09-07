<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;
use App\User;
use App\Http\Requests\EditPasswordRequest;
use Hash;
use Request;
use Mail;
use App\Http\Requests\UserPasswordResetRequest;
use App\Http\Requests\UserEmailResetPasswordRequest;

class PasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Create a new password controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('guest');
//    }

    public function getEditPassword($id)
    {
        $user = User::find($id);
        return view('auth.edit',['user' => $user]);
    }

    public function postEditPassword($id,EditPasswordRequest $request)
    {
        $user = User::find($id);
        if(!Hash::check($request->password,$user->password))
        {
            return redirect()->back()->with(['flashLevel' => 'danger', 'flashMessage' => 'Mật khẩu cũ không trùng khớp']);
        }
        else
        {
            $user->password = bcrypt($request->newpassword);
            $user->save();
        }
        return redirect()->back()->with(['flashLevel' => 'success', 'flashMessage' => 'Chúc mừng bạn đã đổi mật khẩu thành công']);
    }

    public function getEmailResetPassword()
    {
        return view('auth.password');
    }

    public function postEmailResetPassword(UserEmailResetPasswordRequest $request)
    {
        $email = $request->input('email');
        $data = ['token' => $request->input('_token'), 'email' => $email];
        Mail::send('blanks.blanks-password-reset',$data,function($message) {
            $message->from('nhatro456789s@gmail.com','Scepter Shop');
            $message->to(Request::input('email'),'LLMK')->subject('Lấy lại mật khẩu');
        });

        return redirect()->route('user.getLogin')->with(['flashLevel' => 'success', 'flashMessage' => 'Vui lòng kiểm tra email để lấy lại mật khẩu']);
    }

    public function postResetPassword(UserPasswordResetRequest $request)
    {
        $email = $request->input('email');
        $password = bcrypt($request->input('password'));
        User::where('email', $email)->update(['password' => $password]);

        return redirect()->route('user.getLogin')->with(['flashLevel' => 'success', 'flashMessage' => 'Chúc mừng bạn đã lấy lại mật khẩu thành công']);
    }
}
