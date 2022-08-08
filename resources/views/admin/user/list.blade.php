@extends('admin.layouts.index')
@section('css')
@endsection
@section('content')
<div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Quản lý nhân viên</h1>
        </div>
    </div>
   
    <div class="row">
        <div class="col-lg-12">
            <p>
                <a class="btn btn-primary" href="{{route('admin.user.postThem')}}"> <i class="fa fa-plus"></i>
                    Thêm mới</a>
            <p>
        </div>
    </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      Danh sách nhân viên
    </div>
    <div class="panel-body">
      <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover dataTable no-footer" id="myTable">
          <thead>
            <tr>
            <th>STT</th>
            <th>Tên người dùng</th>
            <th>Email</th>
            <th>Số điện thoại</th>
            <th>Quyền</th>
            <th>Tình trạng</th>
            <th>Chức năng</th>
            </tr>
          </thead>
          <tbody>
          @if (isset($user))
            <?php $i = 1; ?>
            @foreach ($user as $item)
            <tr>
            <td>{{ $i++ }}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->email}}</td>
            <td>{{$item->phonenumber}}</td>
            @if ($item->role == 1)
              <td>Admin</td>
            @else
              <td>Nhân viên</td>
            @endif
            
            @if ($item->status == 1)
              <td>Đã kích hoạt</td>
            @else
              <td>Chưa kích hoạt</td>
            @endif
            
              <td class="center" style="text-align: center;">
                <a class="btn btn-success btn-xs btn-edit" href="{{ route('admin.user.getSua', ['id' => $item->id]) }}"><i class="fa fa-edit"></i> Sửa</a>
                <a class="btn btn-danger btn-xs" href="{{ route('admin.user.getXoa', ['id' => $item->id]) }}" onclick="return ConfirmDelete()"><i class="fa fa-trash"></i> Xoá</a>
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