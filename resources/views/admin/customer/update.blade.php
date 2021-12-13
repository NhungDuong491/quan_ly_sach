@extends('admin.layouts.index')
@section('content')
<div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Quản lý khách hàng</h1>
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
                <a class="btn btn-primary" href="{{route('admin.customer.getDanhSach') }}">Quay lại danh sách</a>
            <p>
        </div>
</div>
<form action="{{route('admin.customer.postSua', ['id' => $customer->id])}}" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    <div class="form-group">
        <label for="exampleInputEmail1">Tên</label>
        <input type="text" class="form-control" id="exampleInputEmail1" name="name" placeholder="Nhập tên khách hàng" value="{{$customer->name}}">
    </div>
    <select class="form-control" name="gender">
        <option value="1">Nam</option>
        <option value="2">Nữ</option>
    </select>
    <div class="form-group">
        <label for="exampleInputEmail1">Địa chỉ</label>
        <input type="text" class="form-control" id="exampleInputEmail1" name="address" placeholder="Nhập địa chỉ" value="{{$customer->address}}">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Email</label>
        <input type="text" class="form-control" id="exampleInputEmail1" name="email" placeholder="Nhập email" value="{{$customer->email}}">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Phone</label>
        <input type="text" class="form-control" id="exampleInputEmail1" name="phone" placeholder="Nhập số điện thoại" value="{{$customer->phone}}">
    </div>

    <button type="submit" class="btn btn-primary">Lưu</button>
    <button type="reset" class="btn btn-success">Làm mới</button>
  </form>
</div>

@endsection
