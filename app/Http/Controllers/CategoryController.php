<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use App\Category;
use App\User;
use Illuminate\Http\Request;
use App;

class CategoryController extends Controller
{
    //
    public function getDanhSach() {
        $category = Category::all();
        $viewdata = [
            'category' => $category,
        ];
        return view('admin.category.list', $viewdata);
    }

    public function getThem() {
        return view('admin.category.create');
    }

    public function postThem(Request $request) {
        $category = new Category();

        $data = $request->except('_token');
        $messages = [
            'name.required' => 'Hãy nhập tên!',


        ];

        $validator = Validator::make($data,[
            'name' => 'required|min:3|max:100',

        ], $messages);
        if($validator->fails()) {
    		$errors = $validator->errors();
    		return redirect()->back()->with('errors', $errors);
    	} else {

            $category->name = $request->name;
            $category->slug = changeTitle($request->name);

            $category->save();
            return redirect(route('admin.category.getDanhSach'));

        }
    }

    public function getSua($id) {
        $category = Category::find($id);
        $viewdata =[
            'category' => $category,
        ];
        return view('admin.category.update', $viewdata);
    }

    public function postSua(Request $request, $id) {
        $category = Category::find($id);
        $category->name = $request->name;

        $category->save();
        return redirect(route('admin.category.getDanhSach'));
    }


    public function getXoa($id) {
        $category = Category::find($id);
        $category->delete();
        return redirect(route('admin.category.getDanhSach'));
    }
}
