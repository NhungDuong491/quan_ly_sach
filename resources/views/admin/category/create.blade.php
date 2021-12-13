@extends('admin.layouts.index')
@section('content')
<div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Quản lý thể loại</h1>
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
                <a class="btn btn-primary" href="{{route('admin.category.getDanhSach') }}">Quay lại danh sách</a>
            <p>
        </div>
    </div>
<form action="{{route('admin.category.postThem')}}" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    <div class="form-group">
        <label for="exampleInputEmail1">Tên thể loại</label>
        <input type="text" class="form-control" id="exampleInputEmail1" name="name" placeholder="Nhập tên thể loại">
    </div>
    <button type="submit" class="btn btn-primary">Lưu</button>
        <button type="reset" class="btn btn-success">Làm mới</button>
  </form>
</div>

@endsection
