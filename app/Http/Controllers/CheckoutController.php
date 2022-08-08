<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use App\Book;
use App\Customer;
use App\Category;
use App\User;
use App\Order;
use App\Order_Detail;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use App;
use Session;

class CheckoutController extends Controller
{
    // public function login_checkout(){
    //     return view('checkout.login_checkout');
    // }
    public function postCheckout(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'gender' => 'required',
            'address' => 'required',
            'email' => 'required',
            'phone' => 'required'
        ], [
            'name.required' => 'Bạn chưa nhập Usernane',
            'gender.required' => 'Bạn chưa chọn giới tính',
            'address.required' => 'Bạn chưa nhập địa chỉ',
            'email.required' => 'Bạn chưa nhập Email',
            'phonenumber.required' => 'Bạn chưa nhập So dien thoai'
        ]);
        $customer = new Customer;
        $customer->name = $request->name;
        $customer->gender = $request->gender;
        $customer->address = $request->address;
        $customer->email = $request->email;
        $customer->phone = $request->phone;
        $customer->save();
        $cart = Session::get('Cart');
        $order = new Order;
        $order->cus_id = $customer->id;
        $order->user_id = 1;
        $order->total = $cart->totalPrice;
        $order->date = \Carbon\Carbon::now();
        $order->save();
        foreach ($cart->products as $key => $value) {
            $orderdetail = new Order_Detail;
            $orderdetail->order_id = $order->id;
            $orderdetail->book_id = $key;
            $orderdetail->price = $value['price'] / $value['quanty'];
            $orderdetail->quanty = $value['quanty'];
            $orderdetail->save();

            $book = Book::find($key);
            $book->quanty -= $value['quanty'];
            $book->save();
        }
        $request->session()->forget('Cart');
        return redirect(route('index'));
    }
    public function getCheckout()
    {
        return view('layouts.checkout');
    }
}
