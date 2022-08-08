<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function getLogin() {
        return view('admin.layouts.dangky');
    }

    public function postLogin(Request $request){
        $this->validate($request, [
            'email'=>'required',
            'password'=>'required'
        ], [
            'email.required'=>'Bạn chưa nhập Usernane',
            'password.required'=>'Bạn chưa nhập Password'
        ]);
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            if(Auth::user()->role == 3) {
                return redirect(route('index'));
            } else {
                return view('admin.layouts.index');
            }
        } else {
            return back();
        }
    }

    public function getLogout() {
        Auth::logout();
        return redirect(route('index'));
    }
}
