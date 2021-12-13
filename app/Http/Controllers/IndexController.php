<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use App\Category;
use App\Book;
use App\User;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    //
    public function getIndex() {
        $danhsach = Category::all();
        $book = Book::all();
        $viewdata = [
            'danhsach' => $danhsach,
            'book' => $book,
        ];
        return view('pages.trangchu', $viewdata);
    }

    public function getCategory($id) {
        $danhsach = Category::all();
        $category = Category::find($id);
        $book = Book::all();
        $viewdata = [
            'danhsach' => $danhsach,
            'category' => $category,
            'book' => $book
        ];
        return view('pages.category', $viewdata);
    }

    public function search(Request $req)
    {
        $danhsach = Category::all();
       $product=Book::where('name','like','%'.$req->search.'%')->get();
       $viewdata=[
            'danhsach' =>$danhsach
       ];
        return view('pages.search',$viewdata,['product'=>$product]);

    }
}
