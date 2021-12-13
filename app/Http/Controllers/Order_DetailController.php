<?php

namespace App\Http\Controllers;

use App\Order_Detail;
use Illuminate\Support\Facades\Validator;
use App\Book;
use App\Category;
use App\Order;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class Order_DetailController extends Controller
{
    function getDanhSach(){
        $danhsach = Order_Detail::all();
        $viewdata = [
            'danhsach' => $danhsach,
        ];
        return view('admin.order.list', $viewdata);
    }

    public function getXoa($id) {
        $order_detail = Order_Detail::find($id);
        $order_detail->delete();

        return redirect(route('admin.order_detail.getDanhSach'));
    }

}
