<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Trang Admin</title>
    <link href="{{ asset('front-end/admin/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('front-end/admin/css/metisMenu.min.css') }}" rel="stylesheet">
    <link href="{{ asset('front-end/admin/css/dataTables/dataTables.bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('front-end/admin/css/dataTables/dataTables.responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('front-end/admin/css/startmin.css') }}" rel="stylesheet">
    <link href="{{ asset('front-end/admin/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset('front-end/admin/css/style.css') }}">
    @yield('css')
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="col-lg-12">
                <div class="navbar-header">
                    <a class="navbar-brand" href="{{ route('admin.index') }}">Trang quản trị</a>
                </div>

                <ul class="nav navbar-right navbar-top-links">
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-user fa-fw"></i><b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href=""><i class="fa fa-user fa-fw"></i> Thông tin tài khoản</a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="{{route('admin.logout')}}"><i class="fa fa-sign-out fa-fw"></i> Đăng xuất</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>

            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">

                        <li>

                        </li>

                        <li class="sidebar-search">
                            <!-- search section-->
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Tìm kiếm...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                            <!--end search section-->
                        </li>
                        <li>
                            <a class="nav-link" href="{{route('index')}}"><i class="fa fa-dashboard fa-fw"></i>Trang chủ</a>

                        </li>

                        <li>
                            <a href="{{route('admin.user.getDanhSach')}}"><i class="fa fa-group fa-fw"></i> Quản lý nhân viên <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level collapse">
                                <li><a href="{{route('admin.user.getDanhSach')}}">Danh sách nhân viên</a></li>
                                <li><a href="{{route('admin.user.postThem')}}">Thêm nhân viên</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{route('admin.category.getDanhSach')}}"><i class="fa fa-group fa-fw"></i> Quản lý thể loại <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level collapse">
                                <li><a href="{{route('admin.category.getDanhSach')}}">Danh sách thể loại</a></li>
                                <li><a href="{{route('admin.category.postThem')}}">Thêm thể loại</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{route('admin.book.getDanhSach')}}"><i class="fa fa-group fa-fw"></i> Quản lý sách <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level collapse">
                                <li><a href="{{route('admin.book.getDanhSach')}}">Danh sách sách</a></li>
                                <li><a href="{{route('admin.book.postThem')}}">Thêm sách</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{route('admin.customer.getDanhSach')}}"><i class="fa fa-group fa-fw"></i> Quản lý khách hàng <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level collapse">
                                <li><a href="{{route('admin.customer.getDanhSach')}}">Danh sách khách hàng</a></li>
                                <li><a href="{{route('admin.customer.postThem')}}">Thêm khách hàng</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{route('admin.order_detail.getDanhSach')}}"><i class="fa fa-group fa-fw"></i> Quản lý hoá đơn <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level collapse">
                                <li><a href="{{route('admin.order_detail.getDanhSach')}}">Danh sách hóa đơn</a></li>
                             
                            </ul>
                        </li>
                        <!-- <li>
                            <a href="{{route('admin.category.getDanhSach')}}"><i class="fa fa-pied-piper-pp fa-fw"></i> Quản lý thể loại </a>
                        </li>
                        <li>
                            <a href="{{route('admin.book.getDanhSach')}}"><i class="fa fa-product-hunt fa-fw"></i> Quản lý sách </a>
                        </li>
                        <li>
                            <a href="{{route('admin.customer.getDanhSach')}}"><i class="fa fa-group fa-fw"></i> Quản lý khách hàng</a>
                        </li>
                        <li>
                            <a href="{{route('admin.order_detail.getDanhSach')}}"><i class="fa fa-paste fa-fw"></i> Quản lý hoá đơn</a>
                        </li> -->
                    </ul>
                </div>
            </div>
        </nav>

        <div id="page-wrapper">
            <div class="container-fluid">
                @yield('content')
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>






    <script src="https://code.jquery.com/jquery-latest.js"></script>
    <script src="{{ asset('front-end/admin/js/jquery.min.js') }}"></script>
    <script src="{{ asset('front-end/admin/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('front-end/admin/js/metisMenu.min.js') }}"></script>

    <script src="{{ asset('front-end/admin/js/dataTables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('front-end/admin/js/dataTables/dataTables.bootstrap.min.js') }}"></script>

    <script src="{{ asset('front-end/admin/js/startmin.js') }}"></script>

    <script src="//cdn.ckeditor.com/4.16.0/full/ckeditor.js"></script>

    <script>
        $(document).ready(function() {
            $('#myTable').DataTable({
                responsive: true
            });
        });
    </script>
    @yield('script')
</body>

</html>