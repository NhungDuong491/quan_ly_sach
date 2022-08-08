@extends('admin.layouts.layout')

@section('head')
    <title>Trang Admin</title>
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Trang chủ</h1>
    </div>
</div>
<div class="col-lg-3 col-md-6">
    <div class="panel panel-yellow">
        <div class="panel-heading">
            <div class="row">
                <div class="col-xs-3">
                    <i class="fa fa-pied-piper-pp fa-5x"></i>
                </div>
                <div class="col-xs-9 text-right">
                    <div class="huge" style="font-size: 25px">Quản lý thể loại</div>
                    <div></div>
                </div>
            </div>
        </div>
        <a href="{{ route('admin.book.getDanhSach') }}">
            <div class="panel-footer">
                <span class="pull-left">Truy cập</span>
                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                <div class="clearfix"></div>
            </div>
        </a>
    </div>
</div>
<div class="col-lg-3 col-md-6">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <div class="row">
                <div class="col-xs-3">
                    <i class="fa fa-product-hunt fa-5x"></i>
                </div>
                <div class="col-xs-9 text-right">
                    <div class="huge" style="font-size: 25px">Quản lý sách</div>
                    <div></div>
                </div>
            </div>
        </div>
        <a href="{{ route('admin.book.getDanhSach') }}">
            <div class="panel-footer">
                <span class="pull-left">Truy cập</span>
                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                <div class="clearfix"></div>
            </div>
        </a>
    </div>
</div>
<div class="col-lg-3 col-md-6">
    <div class="panel panel-green">
        <div class="panel-heading">
            <div class="row">
                <div class="col-xs-3">
                    <i class="fa fa-paste fa-5x"></i>
                </div>
                <div class="col-xs-9 text-right">
                    <div class="huge" style="font-size: 25px">Quản lý hoá đơn</div>
                    <div></div>
                </div>
            </div>
        </div>
        <a href="{{ route('admin.book.getDanhSach') }}">
            <div class="panel-footer">
                <span class="pull-left">Truy cập</span>
                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                <div class="clearfix"></div>
            </div>
        </a>
    </div>
</div>
<div class="col-lg-3 col-md-6">
    <div class="panel panel-red">
        <div class="panel-heading">
            <div class="row">
                <div class="col-xs-3">
                    <i class="fa fa-share-square-o fa-5x"></i>
                </div>
                <div class="col-xs-9 text-right">
                    <div class="huge" style="font-size: 25px">Quản lý nhập thuốc</div>
                    <div></div>
                </div>
            </div>
        </div>
        <a href="{{ route('admin.book.getDanhSach') }}">
            <div class="panel-footer">
                <span class="pull-left">Truy cập</span>
                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                <div class="clearfix"></div>
            </div>
        </a>
    </div>
</div>
<div class="col-lg-3 col-md-6">
    <div class="panel panel-red">
        <div class="panel-heading">
            <div class="row">
                <div class="col-xs-3">
                    <i class="fa fa-group fa-5x"></i>
                </div>
                <div class="col-xs-9 text-right">
                    <div class="huge" style="font-size: 25px">Quản lý khách hàng</div>
                    <div></div>
                </div>
            </div>
        </div>
        <a href="{{ route('admin.book.getDanhSach) }}">
            <div class="panel-footer">
                <span class="pull-left">Truy cập</span>
                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                <div class="clearfix"></div>
            </div>
        </a>
    </div>
</div>
@if(Auth::user()->role == 1)
<div class="col-lg-3 col-md-6">
    <div class="panel panel-green">
        <div class="panel-heading">
            <div class="row">
                <div class="col-xs-3">
                    <i class="fa fa-group fa-5x"></i>
                </div>
                <div class="col-xs-9 text-right">
                    <div class="huge" style="font-size: 25px">Quản lý nhân viên</div>
                    <div></div>
                </div>
            </div>
        </div>
        <a href="{{ route('admin.book.getDanhSach') }}">
            <div class="panel-footer">
                <span class="pull-left">Truy cập</span>
                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                <div class="clearfix"></div>
            </div>
        </a>
    </div>
</div>
@endif

@endsection