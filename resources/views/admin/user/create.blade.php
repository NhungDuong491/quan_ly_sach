@extends('admin.layouts.index')
@section('content')
<div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Quản lý nhân viên</h1>
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
                <a class="btn btn-primary" href="{{route('admin.user.getDanhSach') }}">Quay lại danh sách</a>
            <p>
        </div>
    </div>
<form action="{{route('admin.user.postThem')}}" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    <div class="form-group">
        <label for="exampleInputEmail1">Tên</label>
        <input type="text" class="form-control" id="exampleInputEmail1" name="name" placeholder="Nhập tên">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Email</label>
      <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Nhập email">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">SĐT</label>
      <input type="number" class="form-control" id="exampleInputEmail1" name="phonenumber" placeholder="Nhập số điện thoại">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Nhập mật khẩu">
    </div>
    <label for="exampleInputEmail1">Quyền</label>

    <select class="form-control" name="role">

        <option value="1">Admin</option>
        <option value="3">Người dùng</option>
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
