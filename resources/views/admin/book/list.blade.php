@extends('admin.layouts.index')
@section('css')
@endsection
@section('content')
<div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Quản lý sách</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <p>
                <a class="btn btn-primary" href="{{route('admin.book.postThem')}}"> <i class="fa fa-plus"></i>
                    Thêm sách</a>
            <p>
        </div>
    </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      Danh sách sách
    </div>
    <div class="panel-body">
      <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover dataTable no-footer" id="myTable">
          <thead>
            <tr>
            <th>STT</th>
            <th style=" width: 100px; text-align: center;">Tên sách</th>
            <th style=" text-align: center;">Thể loại</th>
            <th style=" text-align: center;">Tác giả</th>
            <th style=" width: 450px; text-align: center;" >Mô tả</th>
            <th style=" text-align: center;">Giá</th>
            <th style=" text-align: center;">Số lượng</th>
            <th style=" text-align: center">Hình ảnh</th>
            <th style=" width: 100px; text-align: center">Chức năng</th>
            </tr>
          </thead>
          <tbody>
          @if (isset($book))
            <?php $i = 1; ?>
            @foreach ($book as $item)
            <tr>
            <td>{{ $i++ }}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->category->name}}</td>
            <td>{{$item->author}}</td>
            <td style="text-align: justify;">{{$item->description}}</td>
            <td>{{$item->price}}</td>
            <td >{{$item->quanty}}</td>
            <td><img src="{{asset('upload/book/'.$item->image)}}" width="120px" height="120px"></td>
            <td class="center" style="text-align: center;">
                <a class="btn btn-success btn-xs btn-edit" href="{{ route('admin.book.getSua', ['id' => $item->id]) }}"><i class="fa fa-edit"></i> Sửa</a>
                <a class="btn btn-danger btn-xs" href="{{ route('admin.book.getXoa', ['id' => $item->id]) }}" onclick="return ConfirmDelete()"><i class="fa fa-trash"></i> Xoá</a>
             </td>
            
            </tr>
            @endforeach
            @endif
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection

@section('script')

<script>
  $(document).ready(function() {
    $('#myTable').DataTable();
  });
</script>
@endsection