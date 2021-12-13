<?php

namespace App\Http\Controllers;

use App\Order_detail;
use Illuminate\Support\Facades\Validator;
use App\Book;
use App\Category;
use App\Cart;
use App\User;
use App\Customer;
use Illuminate\Contracts\Session\Session as SessionSession;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Session;
use Illuminate\Support\Facades\Auth;


class CartController extends Controller
{
    public function Index()
    {
        $products = DB::table('book')->get();
        return view('index', compact('book'));
    }
    public function AddCart(Request $request, $id)
    {
        $product = DB::table('book')->where('id', $id)->first();
        $Cart = Session::get('Cart');

        // $products = DB::table('book')->'quanty';
        if ($product != null) {
            $oldcart = Session('Cart') ? Session('Cart') : null;
            if ((!$oldcart || $oldcart->totalQuanty < $product->quanty )&& $product->quanty >0){
                $newcart = new Cart($oldcart);
                $newcart->AddCart($product, $id);
                $request->Session()->put('Cart', $newcart);
                return view('layouts.cart-item');
            }
            else{
                return false;
            }
            
            
        }
    }
    public function DeleteItemCart(Request $request, $id)
    {
        $oldcart = Session('Cart') ? Session('Cart') : null;
        $newcart = new Cart($oldcart);
        $newcart->DeleteItemCart($id);
        if (Count($newcart->products) > 0) {
            $request->Session()->put('Cart', $newcart);
        } else {
            $request->Session()->forget('Cart');
        }
        return view('layouts.cart-item');
    }
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
        $customer->email = $request->address;
        $customer->phone = $request->address;
        $customer->save();
    }
    public function getCheckout()
    {
        return view('layouts.checkout');
    }
    public function ViewListCart()
    {
        return view('layouts.list-cart');
    }
    public function DeleteItemListCart(Request $request, $id)
    {
        $oldcart = Session('Cart') ? Session('Cart') : null;
        $newcart = new Cart($oldcart);
        $newcart->DeleteItemCart($id);
        if (Count($newcart->products) > 0) {
            $request->Session()->put('Cart', $newcart);
        } else {
            $request->Session()->forget('Cart');
        }
        return view('layouts.list-cart-end');
    }
    public function SaveItemListCart(Request $request, $id, $quanty)
    {
        $oldcart = Session('Cart') ? Session('Cart') : null;
        $newcart = new Cart($oldcart);
        $newcart->UpdateCart($id, $quanty);
        $request->Session()->put('Cart', $newcart);

        return view('layouts.list-cart-end');
    }
}
