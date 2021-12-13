<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use App\Book;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use App;
class BookController extends Controller
{
    function getDanhSach(){
        $danhsach = Book::all();
        $viewdata = [
            'book' => $danhsach,
        ];
        return view('admin.book.list', $viewdata);
    }

    function getThem(){
        $danhsach = Category::all();
        $viewdata = [
            'category' => $danhsach,
        ];
        return view('admin.book.create', $viewdata);
    }

    function postThem(Request $request){
        $book = new Book();
        $data = $request->except('_token');
        $messages = [
    		'name.required' => 'Hãy nhập tên!',
            'category_id.required' => 'Hãy nhập tên thể loại!',
            'author.required' => 'Hãy nhập tên tác giả!',
            'description.required' => 'Hãy mô tả sách!',
            'price.required' => 'Hãy nhập giá sách!',
            'quanty.required' => 'Hãy nhập số lượng sách!',
            'image.required' => 'Hãy thêm ảnh!',
        ];

        $validator = Validator::make($data,[
            'name' => 'required|min:3|max:100',

        ], $messages);

        if($validator->fails()) {
    		$errors = $validator->errors();
    		return redirect()->back()->with('errors', $errors);
    	} else {
            $book->name = $request->name;
            $book->category_id = $request->category;
            $book->author = $request->author;
            $book->description = $request->description;
            $book->price = $request->price;
            $book->quanty = $request->quanty;
            $book->slug = changeTitle($request->name);

            if ($request->hasFile('image')) {
                if (File::exists(public_path('upload/book/' . $book->image))) {
                    File::delete(public_path('upload/book/' . $book->image));
                }
                $file = $request->file('image');
                $duoi = $file->getClientOriginalExtension();
                if ($duoi != 'jpg' && $duoi != 'png' && $duoi != 'jpeg') {
                    return redirect()->back()->with('loi', 'File ảnh tải lên không đúng định dạng!');
                }
                $name = $file->getClientOriginalName();
                $image = Str::random(5) . "_" . Str::random(5) . "_" . $name;
                while (file_exists("upload/book/" . $image)) {
                    $hinh = Str::random(5) . "_" . Str::random(5) . "_" . $name;
                }
                $file->move("upload/book", $image);
                $book->image = $image;
            }


        $book->save();
        return redirect(route('admin.book.getDanhSach'));
        }
    }

    function getSua($id){
        $book = Book::find($id);
        $category = Category::all();
        $viewdata = [
            'book' => $book,
            'category' => $category
        ];
        return view('admin.book.update',  $viewdata);
    }

    function postSua(Request $request, $id){
        $book = Book::find($id);

        $data = $request->except('_token');
        $messages = [
    		'name.required' => 'Hãy nhập tên!',
            'category_id.required' => 'Hãy nhập tên thể loại!',
            'author.required' => 'Hãy nhập tên tác giả!',
            'description.required' => 'Hãy mô tả sách!',
            'price.required' => 'Hãy nhập giá sách!',
            'quanty.required' => 'Hãy nhập số lượng sách!',
            'image.required' => 'Hãy thêm ảnh!',
        ];

        $validator = Validator::make($data,[
            'name' => 'required|min:3|max:100',

        ], $messages);

        if($validator->fails()) {
    		$errors = $validator->errors();
    		return redirect()->back()->with('errors', $errors);
    	} else {
            $book->name = $request->name;
            $book->category_id = $request->category;
            $book->author = $request->author;
            $book->description = $request->description;
            $book->price = $request->price;
            $book->quanty = $request->quanty;
            $book->slug = changeTitle($request->name);

            if ($request->hasFile('image')) {
                if (File::exists(public_path('upload/book/' . $book->image))) {
                    File::delete(public_path('upload/book/' . $book->image));
                }
                $file = $request->file('image');
                $duoi = $file->getClientOriginalExtension();
                if ($duoi != 'jpg' && $duoi != 'png' && $duoi != 'jpeg') {
                    return redirect()->back()->with('loi', 'File ảnh tải lên không đúng định dạng!');
                }
                $name = $file->getClientOriginalName();
                $image = Str::random(5) . "_" . Str::random(5) . "_" . $name;
                while (file_exists("upload/book/" . $image)) {
                    $hinh = Str::random(5) . "_" . Str::random(5) . "_" . $name;
                }
                $file->move("upload/book", $image);
                $book->image = $image;
            }


        $book->save();
        return redirect(route('admin.book.getDanhSach'));
        }
    }

    public function getXoa($id) {
        $book = Book::find($id);
        if (File::exists(public_path('upload/book/' . $book->image))) {
            File::delete(public_path('upload/book/' . $book->image));
        }
        $book->delete();

        return redirect(route('admin.book.getDanhSach'));
    }

}
