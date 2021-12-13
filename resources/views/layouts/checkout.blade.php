<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Fashi Template">
    <meta name="keywords" content="Fashi, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Cart</title>

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
</head>
<style>
    .container {
  max-width: 960px;
}

.lh-condensed { line-height: 1.25; }
    </style>
<body>
     <!-- Page Preloder -->
     <div id="preloder">
        <div class="loader"></div>
    </div>


    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text product-more">
                        <a href="{{route('index')}}"><i class="fa fa-home"></i> Trang chủ</a>
                        <span>Thông tin khách hàng</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section Begin -->
<div class="container">

    <div class="row">
        <div class="col-md-4 order-md-2 mb-4">
        <div class="select-items">
            <table>
            <tbody>
            @foreach (Session::get('Cart')->products as $item)
            <tr>
                <td class="si-pic"><img src="{{asset('upload/book/'.$item['productInfo']->image)}}" alt=""></td>
                <td class="si-text">
                    <div class="product-selected">
                        <p>{{ $item['productInfo']->price }},000₫ x {{ $item['quanty'] }}</p>
                        <h6>{{ $item['productInfo']->name }}</h6>
                    </div>
                </td>
                <td class="si-close">
                    <i class="ti-close" data-id="{{ $item['productInfo']->id }}"></i>
                </td>
            </tr>
            @endforeach
            </tbody>
            </table>
            </div>
        </div>
        <div class="col-md-8 order-md-1">
        <BR>
            <h4 class="mb-3">Thông tin khách hàng</h4>
            <form class="needs-validation" novalidate="" action="{{route('admin.postCheckout')}}" method="POST">
            @csrf
                <div class="long">@if(Session::has('thongbao')){{Session::get('thongbao')}} @endif
                </div>                    
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="firstName">Họ và tên</label>
                        <input type="text" class="form-control" id="firstName" placeholder="Nhập họ tên của bạn" value="" name="name" required="">
                        <div class="invalid-feedback"> Valid is required. </div>
                    </div>
                    
                </div>
                <div class="mb-3">
                    <label for="username">Giới tính</label>
                    <div class="input-group">
                        <select class="form-control" name="gender" placeholder="Chọn giới tính của bạn">
                            <option value="1">Nam</option>
                            <option value="2">Nữ</option>
                        </select>
                        <div class="invalid-feedback" style="width: 100%;"> Your gender is required. </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="address">Địa chỉ</label>
                    <input type="text" class="form-control" id="address" placeholder="Nhập địa chỉ" name="address" required="">
                    <div class="invalid-feedback"> Please enter your shipping address. </div>
                </div>
                <div class="mb-3">
                    <label for="email">Email <span class="text-muted"></span></label>
                    <input type="email" class="form-control" id="email" placeholder="Nhập email" name="email">
                    <div class="invalid-feedback"> Please enter a valid email address for shipping updates. </div>
                </div>
                
                <div class="mb-3">
                    <label for="address2">Số điện thoại <span class="text-muted"></span></label>
                    <input type="number" class="form-control" id="address2" placeholder="Nhập số điện thoại" name="phone">
                </div>

                <hr class="mb-4">
                <button class="btn btn-primary btn-lg btn-block"  type="submit">HOÀN TẤT THANH TOÁN</button>
            </form>
        </div>
    </div>
    <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1"></p>
        <ul class="list-inline">
            <li class="list-inline-item"><a href="#"></a></li>
            <li class="list-inline-item"><a href="#"></a></li>
            <li class="list-inline-item"><a href="#"></a></li>
        </ul>
    </footer>
</div>
<!-- Footer Section Begin -->
<footer class="footer-section">
        <div class="copyright-reserved">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright-text">
                            Copyright &copy;
                            <script>document.write(new Date().getFullYear());</script> All rights reserved | Book and my friend
                             is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a
                                href="https://www.facebook.com/profile.php?id=100010185435114" target="_blank">Nguyen Thu Trang</a>
                        </div>
                        <div class="payment-pic">
                            <img src="{{asset('page/img/payment-method.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->
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
    <!-- Js Plugins -->
    <script src="{{asset('page/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('page/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('page/js/jquery-ui.min.js')}}"></script>
    <script src="{{asset('page/js/jquery.countdown.min.js')}}"></script>
    <script src="{{asset('page/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('page/js/jquery.zoom.min.js')}}"></script>
    <script src="{{asset('page/js/jquery.dd.min.js')}}"></script>
    <script src="{{asset('page/js/jquery.slicknav.js')}}"></script>
    <script src="{{asset('page/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('page/js/main.js')}}"></script>
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
<script>
    function () {
  'use strict'

  window.addEventListener('load', function () {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation')

    // Loop over them and prevent submission
    Array.prototype.filter.call(forms, function (form) {
      form.addEventListener('submit', function (event) {
        if (form.checkValidity() === false) {
          event.preventDefault()
          event.stopPropagation()
        }
        form.classList.add('was-validated')
      }, false)
    })
  }, false)
}
$(".select-items").on("click", ".si-close i", function () {
    console.log($(this).data("id"));
    $.ajax({
      url: 'DeleteItemCart/' + $(this).data("id"),
      type: 'GET',
    }).done(function (response) {
      RenderCart(response);
      alertify.success('Đã xóa sản phẩm thành công');
    })
  });
  function AddCart(id) {
    $.ajax({
      url: 'AddCart/' + id,
      type: 'GET',
    }).done(function (response) {
      RenderCart(response);
      alertify.success('Đã thêm mới sản phẩm');
    })
  };
    </script>
</body>
</html>