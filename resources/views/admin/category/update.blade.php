@extends('admin.layouts.index')
@section('content')
<div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Quản lý thể loại</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <p>
                <a class="btn btn-primary" href="{{route('admin.category.getDanhSach') }}" class="fas fa-arrow-left">Quay lại danh sách</a>
            <p>
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
    @if (session('thongbao'))
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                    aria-hidden="true">&times;</span></button>
            {{ session('thongbao') }}
        </div>
    @endif
<div>
    @if (count($errors)>0)
@foreach ($errors->all() as $item)
    <div class="alert alert-danger" role="alert">
        {{$item}}
    </div>
@endforeach
@endif
<form action="{{route('admin.category.postSua', ['id' => $category->id])}}" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    <div class="form-group">
        <label for="exampleInputEmail1">Tên</label>
        <input type="text" class="form-control" id="exampleInputEmail1" name="name" placeholder="Nhập tên" value="{{$category->name}}">
    </div>

    <button type="submit" class="btn btn-primary">Lưu</button>
    <button type="reset" class="btn btn-success">Làm mới</button>

  </form>
</div>

@endsection
