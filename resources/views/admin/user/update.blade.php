@extends('admin.layouts.index')
@section('content')
<div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Quản lý nhân viên</h1>
        </div>
</div>
<div>
    @if (count($errors)>0)
@foreach ($errors->all() as $item)
    <div class="alert alert-danger" role="alert">
        {{$item}}
    </div>
@endforeach
@endif
<div class="row">
        <div class="col-lg-12">
            <p>
                <a class="btn btn-primary" href="{{route('admin.user.getDanhSach') }}">Quay lại danh sách</a>
            <p>
        </div>
    </div>
<form action="{{route('admin.user.postSua', ['id' => $user->id])}}" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    <div class="form-group">
        <label for="exampleInputEmail1">Tên</label>
        <input type="text" class="form-control" id="exampleInputEmail1" name="name" placeholder="Nhập tên" value="{{$user->name}}">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Email</label>
      <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Nhập email" value="{{$user->email}}">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">SĐT</label>
        <input type="number" class="form-control" id="exampleInputEmail1" name="phonenumber" placeholder="Nhập số điện thoại" value="{{$user->phonenumber}}">
    </div>
    <label for="exampleInputEmail1">Chức vụ</label>
    <select class="form-control" name="role">
        <option value="1">Admin</option>
        <option value="2">Nhân viên</option>
    </select><br>

    <label for="exampleInputEmail1">Tình trạng</label>

    <select class="form-control" name="role">

        <option value="1">Đã kích hoạt</option>
        <option value="0">Chưa kích hoạt</option>
    </select>
    <br>
    <button type="submit" class="btn btn-primary">Lưu</button>
    <button type="reset" class="btn btn-success">Làm mới</button>
  </form>
</div>

@endsection
