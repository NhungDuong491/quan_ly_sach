@extends('admin.layouts.index')
@section('content')
<div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Quản lý sách</h1>
        </div>
    </div>
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                    aria-hidden="true">&times;</span></button>
            @foreach ($errors->all() as $err)
                {{ $err }}<br>
            @endforeach
        </div>
    @endif
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
    <form action="{{route('admin.book.postSua', ['id'=>$book->id])}}" method="post" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <div class="form-group">
            <label for="exampleInputEmail1">Tên sách</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="name" placeholder="Nhập tên" value="{{$book->name}}">
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
            <input type="text" class="form-control" id="exampleInputEmail1" name="author" placeholder="Nhập tên tác giả" value="{{$book->author}}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Mô Tả</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="description" placeholder="Nhập mô tả" value="{{$book->description}}">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Giá</label>
          <input type="number" class="form-control" id="exampleInputPassword1" name="price" placeholder="Nhập giá sách" value="{{$book->price}}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Số lượng</label>
            <input type="number" class="form-control" id="exampleInputEmail1" name="quanty" placeholder="Nhập số lượng" value="{{$book->quanty}}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Hình ảnh</label>
            <input type="file" class="form-control" id="exampleInputEmail1" name="image" placeholder="Thêm ảnh" value="{{$book->image}}">
        </div>

        <button type="submit" class="btn btn-primary">Lưu</button>
        <button type="reset" class="btn btn-success">Làm mới</button>
      </form>
    </div>

    @endsection
