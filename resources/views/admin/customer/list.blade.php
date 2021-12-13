@extends('admin.layouts.index')
@section('css')
@endsection
@section('content')
<div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Quản lý khách hàng</h1>
        </div>
</div>

    <div class="row">
        <div class="col-lg-12">
            <p>
                <a class="btn btn-primary" href="{{route('admin.customer.postThem')}}"> <i class="fa fa-plus"></i>
                    Thêm mới</a>
            <p>
        </div>
</div>
  <div class="panel panel-default">
    <div class="panel-heading">
      Danh sách khách hàng
    </div>
    <div class="panel-body">
      <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover dataTable no-footer" id="myTable">
          <thead>
            <tr>
              <th style=" style=width: 30px; text-align: center;">STT</th>
              <th>Tên khách hàng</th>
              <th>Giới tính</th>
              <th>Địa Chỉ</th>
              <th>Email</th>
              <th>Số điện thoại</th>
              <th style=" width: 100px; text-align: center;">Chức năng</th>
            </tr>
          </thead>
          <tbody>
          
          @if (isset($customer))
            <?php $i = 1; ?>
            @foreach ($customer as $item)
            <tr>
              <td style=" width: 30px; text-align: center;">{{ $i++ }}</td>
              <td>{{$item->name}}</td>
              @if ($item->gender == 1)
                <td>Nam</td>
              @else
                <td>Nữ</td>
              @endif
              <td>{{$item->address}}</td>
              <td>{{$item->email}}</td>
              <td>{{$item->phone}}</td>
              <td class="center" style="text-align: center;">
                <a class="btn btn-success btn-xs btn-edit" href="{{ route('admin.customer.getSua', ['id' => $item->id]) }}"><i class="fa fa-edit"></i> Sửa</a>
                <a class="btn btn-danger btn-xs" href="{{ route('admin.customer.getXoa', ['id' => $item->id]) }}" onclick="return ConfirmDelete()"><i class="fa fa-trash"></i> Xoá</a>
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