<?php

namespace App\Http\Controllers;

use App\Order_detail;
use App\Customer;
use Illuminate\Support\Facades\Validator;
use App\Book;
use App\Category;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class CustomerController extends Controller
{
    //
    public function getDanhSach() {
        $customer = Customer::all();
        $viewdata = [
            'customer' => $customer,
        ];
        return view('admin.customer.list', $viewdata);
    }

    public function getThem() {
        return view('admin.customer.create');
    }

    public function postThem(Request $request) {
        $customer = new Customer();

        $data = $request->except('_token');
        $messages = [
    		'name.required' => 'Hãy nhập tên!',
            'name.min' => 'Độ dài tên lớn hơn 5!',
            'address.required' => 'Hãy nhập địa chỉ!',
            'email.required' => 'Hãy nhập email!',
            'phone.required' => 'Hãy nhập số điện thoại!',
        ];

        $validator = Validator::make($data,[
            'name' => 'required|min:3|max:100',
            'email' => 'required',
        ], $messages);
        if($validator->fails()) {
    		$errors = $validator->errors();
    		return redirect()->back()->with('errors', $errors);
    	} else {

            $customer->name = $request->name;
            $customer->gender = $request->gender;
            $customer->address = $request->address;
            $customer->email = $request->email;
            $customer->phone = $request->phone;
            // $customer->password = bcrypt($request->password);
            $customer->save();
            return redirect(route('admin.customer.getDanhSach'));

        }
    }

    public function getSua($id) {
        $customer = Customer::find($id);
        $viewdata =[
            'customer' => $customer,
        ];
        return view('admin.customer.update', $viewdata);
    }

    public function postSua(Request $request, $id) {
        $customer = Customer::find($id);
        $customer->name = $request->name;
        $customer->gender = $request->gender;
        $customer->address = $request->address;
        $customer->email = $request->email;
        $customer->phone = $request->phone;
        // $customer->password = bcrypt($request->password);
        $customer->save();
        return redirect(route('admin.customer.getDanhSach'));
    }


    public function getXoa($id) {
        $customer = Customer::find($id);
        $customer->delete();
        return redirect(route('admin.customer.getDanhSach'));
    }
}
