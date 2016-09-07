<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Auth;
use Mail;

use Request;
use App\Http\Requests\Admin\AdminLoginRequest;
use App\Http\Requests\UserLoginRequest;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

//    protected $redirectPath = '/';
//    protected $loginPath = '/user/login';
    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('guest', ['except' => 'getLogout']);
//    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
            'phone' => 'required',
            'g-recaptcha-response' => 'required'
        ],
            [
                'name.required' => 'Tên không được để trống',
                'email.required' => 'Email không được để trống',
                'email.email' => 'Email không đúng định dạng',
                'email.unique' => 'Email đã tồn tại mời nhập email khác',
                'password.required' => 'Mật khẩu không được để trống',
                'password.confirmed' => 'Mật khẩu nhập lại không đúng',
                'password.min' => 'Mật khẩu phải ít nhất 6 ký tự',
                'phone.required' => 'Số điện thoại không được để trống',
                'g-recaptcha-response.required' => 'Vui lòng tick vào ô nếu bạn không phải robot'
            ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        $confirm_code = genCode(30);

        $getData = ['confirm_code' => $confirm_code];

        Mail::send('blanks.verify',$getData,function($message) {
            $message->from('noreply@scepter.com','Scepter Shop');
            $message->to(Request::input('email'), Request::input('name'))->subject('Kích hoạt tài khoản');
        });

        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'confirm_code' => $confirm_code,
            'active' => 0,
            'password' => bcrypt($data['password']),
            'level' => 2
        ]);

    }

//    public function postUserLogin(UserLoginRequest $request)
//    {
//        $loginUser = array(
//            'email' => $request->email,
//            'password' => $request->password,
//            'active' => 1,
//            'level' => 2
//        );
//
//        $loginAdmin = array(
//            'email' => $request->email,
//            'password' => $request->password,
//            'active' => 1,
//            'level' => 1
//        );
//
//        if(Auth::attempt($loginUser))
//        {
//            return redirect()->route('home');
//        }
//        else if(Auth::attempt($loginAdmin))
//        {
//            return redirect()->route('admin.index');
//        }
//        else
//        {
//            echo "<script>
//                alert('Vui lòng kiểm tra email để kích hoạt hoặc mật khẩu');
//                 window.location = '" . url('user/login') . "';
//                </script>";
//        }
//
//    }

    public function verify($confirm_code)
    {
        $user = User::where('confirm_code','=',$confirm_code)->first();
        $user->active = 1;
        $user->confirm_code = null;
        $user->save();
        echo "<script>
                    alert('Bạn đã kích hoạt thành công');
                    window.location = '" . url('/') . "';
                 </script>";
    }


    public function getAdminLogin()
    {
        return view('admin.login');
    }

    public function postAdminLogin(AdminLoginRequest $request)
    {
        $login = array(
            'email' => $request->email,
            'password' => $request->password,
            'level' => 1,
            'active' => 1
        );
        if(Auth::attempt($login))
        {
            return redirect()->route('admin.index');
        }
        else
        {
            return redirect()->back();
        }
    }

    public function postEditInfo($id)
    {
        $user = User::find($id);
        $user->name = Request::input('name');
        $user->email = Request::input('email');
        $user->save();
        return redirect()->back()->with(['flashLevel' => 'success', 'flashMessage' => 'Chúc mừng bạn đã đổi thông tin thành công']);
    }

    public function checkEmail()
    {
        $email = Request::get('email');
        $user = User::where('email','=',$email)->count();
        return response()->json($user);
    }
}
