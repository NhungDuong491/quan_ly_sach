<!DOCTYPE html>
<html lang="zxx">

<head>

    <meta charset="UTF-8">
    <meta name="description" content="Fashi Template">
    <meta name="keywords" content="Fashi, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sách và những người bạn</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{asset('page/css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('page/css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('page/css/themify-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('page/css/elegant-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('page/css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('page/css/nice-select.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('page/css/jquery-ui.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('page/css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('page/css/style.css')}}" type="text/css">
    <link href="{{asset('admin/css/styles.css')}}" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <style>
        #change-item table tbody tr td img {
            width: 70px;
        }

        #navbar {
            top: 0;
            position: fixed;
            background-color: wheat;
            z-index: 1;
            width: 100%;
            transition: top 1s;
        }
    </style>
    @yield('css')
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header-section" id="navbar">
        <div class="container">
            <div class="inner-header">
                <div class="row">
                    <div class="col-lg-2 col-md-2">
                        <div class="logo">
                            <a href="{{route('index')}}">
                                <img src="{{asset('page/img/1.png')}} " width="40%" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7">
                        <div class="advanced-search">
                            <button type="button"  class="category-btn" style="text-size: 10px">Tất cả</button>
                            <form action="{{route('index.search')}}" class="input-group" method="get">
                                <input type="search" name="search" placeholder="Bạn cần tìm gì?">
                                <button type="submit" class="btn btn-primary"><i class="ti-search"></i></button>
                            </form>
                        </div>
                    </div>

                    <div class="col-lg-3 text-right col-md-3">
                    
                        <nav class="nav-menu mobile-menu" style="display: inline-block">
                            <ul>
                                {{-- @if (Auth::check()) --}}

                                <ul class="navbar-nav ml-auto ml-md-0">
                                    <li class="nav-item dropdown" style="background: wheat">
                                        <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: black"><i class="fas fa-user fa-fw"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                                            @if (Auth::check())
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="{{route('admin.logout')}}">Đăng xuất</a>
                                            @else
                                            <a class="dropdown-item" href="{{route('admin.login')}}">Đăng nhập</a>
                                            <a class="dropdown-item" href="{{route('admin.register')}}">Đăng ký</a>
                                            @endif
                                        </div>
                                    </li>
                                </ul>
                            </ul>
                        </nav>

                        <ul class="nav-right" style="display: inline-block">

                            <li class="cart-icon"><a href="#">
                                    <i class="icon_bag_alt"></i>
                                    @if (Session::has("Cart") != null)
                                    <span id="total-quanty-show">{{ Session::get("Cart")->totalQuanty }}</span>
                                    @else
                                    <span id="total-quanty-show">0</span>
                                    @endif
                                </a>
                                <div class="cart-hover">
                                    <div id="change-item">
                                        @if (Session::has("Cart") != null)
                                        <div class="select-items">
                                            <table>
                                                <tbody>
                                                    @foreach (Session::get('Cart')-> products as $item)
                                                    <tr>
                                                        <td class="si-pic"><img
                                                                src="{{asset('upload/book/'.$item['productInfo']->image)}}"
                                                                alt=""></td>
                                                        <td class="si-text">
                                                            <div class="product-selected">
                                                                <p>{{ $item['productInfo']->price }},000 ₫ x {{
                                                                    $item['quanty'] }}</p>
                                                                <h6>{{ $item['productInfo']->name }}</h6>
                                                            </div>
                                                        </td>
                                                        <td class="si-close">
                                                            <i class="ti-close"
                                                                data-id="{{ $item['productInfo']->id }}"></i>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="select-total">
                                            <span>Tổng giá tiền:</span>
                                            <h5>{{ Session::get('Cart')->totalPrice }},000 ₫</h5>
                                        </div>
                                    </div>
                                    @endif
                                    <div class="select-button">
                                        <a href="{{route('viewcart')}}" class="primary-btn view-card">Xem giỏ hàng</a>
                                        <a href="{{route('admin.getCheckout')}}" class="primary-btn checkout-btn">Thanh toán</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="nav-item">
        <div class="container">
            <div class="nav-depart">
                <div class="depart-btn">
                    <i class="ti-menu"></i>
                    <a href="{{route('index')}}"><span>Trang chủ</span></a>
                </div>
            </div>

            <div class="nav-depart">
                <div class="depart-btn">

                    <span>Thể loại</span>
                    <ul class="depart-hover">
                        @foreach ($danhsach as $item)
                        <li><a
                                href="{{route('index.getCategory',['id'=>$item->id, 'slug'=>$item->slug])}}">{{$item->name}}</a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <div id="mobile-menu-wrap"></div>
        </div>
    </div>
</header>


    <!-- Header End -->
    <div class="aaaaaaaaaaa" style="padding-top: 220px;">
        <div id="abbbbbbbbb">
            @yield('content')
        </div>


        <!-- Footer Section Begin -->
         <footer class="footer-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="footer-left">
                            <div class="footer-logo">
                                <a href="#"><img src="{{asset('page/img/1.png')}}" width="50%" alt=""></a>
                            </div>
                            <ul>
                                <li>Địa chỉ: UTT university</li>
                                <li>Phone: 0382982699</li>
                                <li>Email: utt@utt.edu.vn</li>
                            </ul>
                            <div class="footer-social">
                                <a href="https://www.facebook.com/baolongred2k/" target="blank"><i class="fa fa-facebook"></i></a>
                                <a href="https://www.instagram.com/longbot2kk/" target="blank"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 offset-lg-1">
                        <div class="footer-widget">
                            <h5>Thông tin</h5>
                            <ul>
                                <li><a href="#">Giới thiệu</a></li>
                                <li><a href="{{route('admin.getCheckout')}}">Thanh Toán</a></li>
                                <li><a href="#">Liên lạc</a></li>
                                <li><a href="#">Trang chủ</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="footer-widget">
                            <h5>Tài khoản</h5>
                            <ul>
                                <li><a href="#">Tài khoản của bạn</a></li>
                                <li><a href="#">Cập nhật tài khoản</a></li>
                                <li><a href="{{route('viewcart')}}">Giỏ hàng</a></li>
                                <li><a href="#">Mua sắm</a></li>
                            </ul>

                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="newslatter-item">
                            <h5><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3725.1955508333676!2d105.79664331440662!3d20.984796994654708!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135acc6bdc7f95f%3A0x58ffc66343a45247!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBDw7RuZyBuZ2jhu4cgR2lhbyB0aMO0bmcgVuG6rW4gdOG6o2k!5e0!3m2!1svi!2s!4v1609904975572!5m2!1svi!2s" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></h5>
                            <p>Đăng ký nhận bản tin</p>
                            <form action="#" class="subscribe-form">
                                <input type="text" placeholder="Nhập email của bạn">
                                <button type="button">Đăng ký</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright-reserved">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="copyright-text">
                                Copyright &copy;
                                <script>document.write(new Date().getFullYear());</script> All rights reserved | Book and my friend
                                 is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a
                                    href="https://www.facebook.com/nttrang5122000/" target="_blank">Nguyen Thu Trang</a>
                            </div>
                            <div class="payment-pic">
                                <img src="{{asset('page/img/payment-method.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

   <!-- Js Plugins -->
   <!-- <script src="{{asset('page/js/jquery-3.3.1.min.js')}}"crossorigin="anonymous"></script> -->
   <!-- <script
  src="https://code.jquery.com/jquery-3.6.0.js"></script> -->
   <script src="{{asset('page/js/bootstrap.min.js')}}"></script>
   <script src="{{asset('page/js/jquery-ui.min.js')}}"></script>
   <script src="{{asset('page/js/jquery.countdown.min.js')}}"></script>
   <script src="{{asset('page/js/jquery.nice-select.min.js')}}"></script>
   <script src="{{asset('page/js/jquery.zoom.min.js')}}"></script>
   <script src="{{asset('page/js/jquery.dd.min.js')}}"></script>
   <script src="{{asset('page/js/jquery.slicknav.js')}}"></script>
   <script src="{{asset('page/js/owl.carousel.min.js')}}"></script>
   <script src="{{asset('page/js/main.js')}}"></script>
   <script src="https://code.jquery.com/jquery-3.6.0.js" crossorigin="anonymous"></script>
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
       <script src="{{asset('admin/js/scripts.js')}}"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
       <script src="{{asset('admin/assets/demo/chart-area-demo.js')}}"></script>
       <script src="{{asset('admin/assets/demo/chart-bar-demo.js')}}"></script>
       <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
       <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
       <script src="{{asset('admin/assets/demo/datatables-demo.js')}}"></script>


   <!-- JavaScript -->
   <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

   <!-- CSS -->
   <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css" />
   <!-- Default theme -->
   <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css" />
   <!-- Semantic UI theme -->
   <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css" />
   <!-- Bootstrap theme -->
   <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css" />
</body>
<script>
   var prevScrollpos = window.pageYOffset;
   window.onscroll = function () {
       var currentScrollPos = window.pageYOffset;
       if (prevScrollpos > currentScrollPos) {
           document.getElementById("navbar").style.top = "0";
       } else {
           document.getElementById("navbar").style.top = "-300px";
       }
       prevScrollpos = currentScrollPos;
   }
</script>

</html>
