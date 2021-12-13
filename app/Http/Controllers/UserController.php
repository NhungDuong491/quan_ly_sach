<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    //
    public function getDanhSach()
    {
        $user = User::all();
        $viewdata = [
            'user' => $user,
        ];
        return view('admin.user.list', $viewdata);
    }

    public function getThem()
    {
        return view('admin.user.create');
    }

    public function postThem(Request $request)
    {
        $user = new User();

        $data = $request->except('_token');
        $messages = [
            'name.required' => 'Hãy nhập tên!',
            'name.min' => 'Độ dài tên lớn hơn 5!',
            'email.required' => 'Hãy nhập email!',
        ];

        $validator = Validator::make($data, [
            'name' => 'required|min:3|max:100',
            
        ], $messages);
        if ($validator->fails()) {
            $errors = $validator->errors();
            return redirect()->back()->with('errors', $errors);
        } else {

            $user->name = $request->name;
            $user->email = $request->email;
            $user->phonenumber = $request->phonenumber;
            $user->role = $request->role;
            $user->password = bcrypt($request->password);
            $user->status = $request->status;
            $user->save();
            return redirect(route('admin.user.getDanhSach'));
        }
    }

    public function getSua($id)
    {
        $user = User::find($id);
        $viewdata = [
            'user' => $user,
        ];
        return view('admin.user.update', $viewdata);
    }

    public function postSua(Request $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phonenumber = $request->phonenumber;

        $user->role = $request->role;
        $user->password = bcrypt($request->password);
        $user->save();
        return redirect(route('admin.user.getDanhSach'));
    }


    public function getXoa($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect(route('admin.user.getDanhSach'));
    }
}
