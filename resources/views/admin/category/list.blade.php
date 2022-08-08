@extends('admin.layouts.index')
@section('css')
@endsection
@section('content')
<div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Quản lý thể loại</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <p>
                <a class="btn btn-primary" href="{{route('admin.category.postThem')}}"> <i class="fa fa-plus"></i>
                    Thêm mới</a>
            <p>
        </div>
    </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      Danh sách thể loại
    </div>
    <div class="panel-body">
      <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover dataTable no-footer" id="myTable">
          <thead>
            <tr>
              <th style=" style=width: 80px; text-align: center;">STT</th>
              <th style=" text-align: center;">Tên thể loại</th>
              <th style=" width: 150px; text-align: center;">Chức năng</th>
            </tr>
          </thead>
          <tbody>
          
          @if (isset($category))
            <?php $i = 1; ?>
            @foreach ($category as $item)
            <tr>
              <td style=" width: 30px; text-align: center;">{{ $i++ }}</td>
              <td>{{$item->name}}</td>
              <td class="center" style="text-align: center;">
                <a class="btn btn-success btn-xs btn-edit" href="{{ route('admin.category.getSua', ['id' => $item->id]) }}"><i class="fa fa-edit"></i> Sửa</a>
                <a class="btn btn-danger btn-xs" href="{{ route('admin.category.getXoa', ['id' => $item->id]) }}" onclick="return ConfirmDelete()"><i class="fa fa-trash"></i> Xoá</a>
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