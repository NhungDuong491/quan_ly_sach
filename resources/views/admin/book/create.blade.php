@extends('admin.layouts.index')
@section('content')
<link href="{{asset('page/layout/styles/layout.css')}}" rel="stylesheet" type="text/css" media="all">
<div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Quản lý sách</h1>
        </div>
    </div>
<div>
    @if (count($errors)>0)
    <div class="alert alert-danger" role="alert">
        @foreach ($errors->all() as $item)
            {{$item}}
            <br>
        @endforeach
    </div>
    @endif
    <div class="row">
        <div class="col-lg-12">
            <p>
                <a class="btn btn-primary" href="{{route('admin.book.getDanhSach') }}">Quay lại danh sách</a>
            <p>
        </div>
    </div>
    <form action="{{route('admin.book.postThem')}}" method="post" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <div class="form-group">
            <label for="exampleInputEmail1">Tên sách</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="name" placeholder="Nhập tên">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Thể loại</label>
          <select name="category" id="">
              @foreach($category as $item)
                <option value="{{$item->id}}">{{$item->name}}</option>
              @endforeach
          </select>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Tác giả</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="author" placeholder="Nhập tên tác giả">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Mô Tả</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="description" placeholder="Nhập mô tả">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Giá</label>
          <input type="number" class="form-control" id="exampleInputPassword1" name="price" placeholder="Nhập giá sách">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Số lượng</label>
            <input type="number" class="form-control" id="exampleInputEmail1" name="quanty" placeholder="Nhập số lượng">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Hình ảnh</label>
            <input type="file" class="form-control" id="exampleInputEmail1" name="image" placeholder="Thêm ảnh">
        </div>
        <button type="submit" class="btn btn-primary">Lưu</button>
        <button type="reset" class="btn btn-success">Làm mới</button>
      </form>
    </div>

    @endsection
