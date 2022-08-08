@extends('admin.layouts.index')
@section('css')
@endsection
@section('content')
<div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Quản lý hóa đơn</h1>
        </div>

  <div class="panel panel-default">
    <div class="panel-heading">
      Danh sách đơn hàng
    </div>
    <div class="panel-body">
      <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover dataTable no-footer" id="myTable">
          <thead>
            <tr>
            <th>ID Đơn hàng</th>
            <th>Tên sách</th>
            <th>Tên thể loại</th>
            <th>Tên khách hàng</th>
            <th>Địa chỉ</th>
            <th>Số điện thoại</th>
            <th>Giá</th>
            <th>Số lượng</th>
            <th>Tổng tiền</th>
            <th>Tùy chọn</th>
            </tr>
          </thead>
          <tbody>
          
          @foreach ($danhsach as $item)
              <tr>
              <td>{{$item->order_id}}</td>
              <td>{{$item->book->name}}</td>
              <td>{{$item->book->category->name}}</td>
              <td>{{$item->order->customer->name}}</td>
              <td>{{$item->order->customer->address}}</td>
              <td>{{$item->order->customer->phone}}</td>
              <td>{{$item->price}}</td>
              <td>{{$item->quanty}}</td>
              <td>{{$item->order->total}}</td>
              <td class="center" style="text-align: center;">
                <a class="btn btn-danger btn-xs" href="{{route('admin.order_detail.getXoa', ['id'=>$item->id])}}" onclick="return ConfirmDelete()"><i class="fa fa-trash"></i> Xoá</a>
              </td>
            </tr>
            @endforeach

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