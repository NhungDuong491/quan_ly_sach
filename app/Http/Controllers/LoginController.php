<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use dd;
use Illuminate\Support\Facades\Validator;



class LoginController extends Controller
{
    //
    public function getLogin() {
        return view('admin.layouts.login');
    }

    public function postLogin(Request $request){
        $this->validate($request, [
            'email'=>'required',
            'password'=>'required'
        ], [
            'email.required'=>'Bạn chưa nhập email',
            'password.required'=>'Bạn chưa nhập Password'
        ]);
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            if(Auth::user()->role == 3) {
                if(Auth::user()->status){
                return redirect(route('index'));
                }
                else return redirect()->route('admin.getotp');
            } else {
                return view('admin.layouts.index');
            }
        } else {
            return redirect()->back()->with('thongbao','Nhập sai tài khoản hoặc mật khẩu');
        }
    }

    public function getLogout() {
        Auth::logout();
        return redirect(route('index'));
    }
    public function register(Request $request )
    {
        $this->validate($request, [
            'name' => 'required',
            'email'=>'required',
            'password'=>'required',
            'phonenumber' => 'required'
        ], [
            'name.required'=>'Bạn chưa nhập Usernane',
            'email.required'=>'Bạn chưa nhập Email',
            'password.required'=>'Bạn chưa nhập Password',
            'phonenumber.required'=>'Bạn chưa nhập So dien thoai'
        ]);
        $user= new User;
        $user->name= $request->name;
        $user->email= $request->email;
        $user->password= bcrypt($request->password);
        $user->phonenumber= $request->phonenumber;
        $user->role= 3;
        $user->verify_code=random_int(100000,999999);
        $user->save();

        
        $APIKey="F960C42BE7473E22ED6F070155E79C";
        $SecretKey="8E2088E960CE19FA8DB712F400C56A";
        $YourPhone = $user->phonenumber;
	    $Code = $user->verify_code;
	    $Speed = -1;
	    $Voice = "hatieumai";
        $url = "http://voiceapi.esms.vn/MainService.svc/json/VoiceOTP?Phone=$YourPhone&ApiKey=$APIKey&SecretKey=$SecretKey&Code=$Code&Speed=$Speed&Voice=$Voice";
        $data = Http::get($url);
        Auth::login($user);
        return view('admin.layouts.otp');
        $curl = curl_init($data); 
        curl_setopt($curl, CURLOPT_FAILONERROR, true); 
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true); 
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); 
        $result = curl_exec($curl); 
            
        $obj = json_decode($data,true);
        if($obj['CodeResult'] == 100)
        {
            print "<br>";
            print "CodeResult:".$obj['CodeResult'];
            print "<br>";
            print "SMSID:".$obj['SMSID'];
            print "<br>";
        }
        else
        {
            print "ErrorMessage:".$obj['ErrorMessage'];
        }

    }
    public function getregister()
    {
       return view('admin.layouts.signup');
        
    }
    public function getotp()
    {
        return view('admin.layouts.otp');
    }
    public function postotp(Request $request)
    {
        $this ->validate($request,[
            'verify_code'=>'required'
        ],
        [
            'verify_code.required'=>'Bạn chưa nhập mã OTP',
        ]);
        if(Auth::user()->verify_code == $request->verify_code) {
            $user=Auth::user();
            $user->status=1;
            $user->save();
            
                return redirect(route('index'));
            } else {
                return redirect()->back()->with('thongbao','Nhập sai mã otp');

            }
    }
    public function resend()
    {
        $user=Auth::user();
        $user->verify_code=random_int(100000,999999);
        $user->save();
        
        $APIKey="F960C42BE7473E22ED6F070155E79C";
        $SecretKey="8E2088E960CE19FA8DB712F400C56A";
        $YourPhone = $user->phonenumber;
	    $Code = $user->verify_code;
	    $Speed = -1;
	    $Voice = "hatieumai";
        $url = "http://voiceapi.esms.vn/MainService.svc/json/VoiceOTP?Phone=$YourPhone&ApiKey=$APIKey&SecretKey=$SecretKey&Code=$Code&Speed=$Speed&Voice=$Voice";
        $data = Http::get($url);
        Auth::login($user);
        return view('admin.layouts.otp');
        $curl = curl_init($data); 
        curl_setopt($curl, CURLOPT_FAILONERROR, true); 
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true); 
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); 
        $result = curl_exec($curl); 
            
        $obj = json_decode($data,true);
        if($obj['CodeResult'] == 100)
        {
            print "<br>";
            print "CodeResult:".$obj['CodeResult'];
            print "<br>";
            print "SMSID:".$obj['SMSID'];
            print "<br>";
        }
        else
        {
            print "ErrorMessage:".$obj['ErrorMessage'];
        }
        return true;
    }
    // public function getotp()
    // {
    //     return view('admin.layouts.otp');
    // }
    // public function postotp(Request $request)
    // {
    //     $user= User::all();
    //     $this->validate($request, [
    //         'varify_code'=>'required',
    //     ], [
    //         'varify_code.required'=>'Bạn chưa nhập mã OTP',
    //     ]);
    //     dd(Auth::user());
    //     if(Auth::user()->verify_code == $request->verify_code) {
    //         return redirect(route('index'));
    //     } else 
    //     {
    //         return view('admin.layouts.otp');
    //     }
        
    // }
}
