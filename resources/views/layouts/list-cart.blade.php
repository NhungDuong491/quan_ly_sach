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
                        <span>Giỏ hàng</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section Begin -->

    <!-- Shopping Cart Section Begin -->
    <section class="shopping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12" id="list-cart">
                    <div class="cart-table">
                        <table>
                            <thead>
                                <tr>
                                <th>Hình ảnh sản phẩm</th>
                                <th class="p-name">Tên sản phẩm</th>
                                <th>Thành tiền</th>
                                <th>Số lượng</th>
                                <th>Tổng giá</th>
                                <th></th>
                                <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (Session::has("Cart") != null)
                                @foreach (Session::get('Cart')-> products as $item)
                                <tr>
                                    <td class="cart-pic first-row"><img
                                            src="{{asset('upload/book/'.$item['productInfo']->image)}}" alt=""width="150px" height="150px"></td>
                                    <td class="cart-title first-row">
                                        <h5>{{ $item['productInfo']->name }}</h5>
                                    </td>
                                    <td class="p-price first-row">{{ $item['productInfo']->price }},000₫</td>
                                    <td class="qua-col first-row">
                                        <div class="quanty">
                                            <div class="pro-qty">
                                                <input type="text" id="quanty-item-{{ $item['productInfo']->id }}"
                                                    value="{{ $item['quanty'] }}">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="total-price first-row">{{ $item['price'] }},000₫</td>
                                    <td class="close-td first-row"><i class="ti-save"
                                            onclick="SaveLishItemCart({{ $item['productInfo']->id }});"></i></td>

                                    <td class="close-td first-row"><i class="ti-close"
                                            onclick="DeleteLishItemCart({{ $item['productInfo']->id }});"></i></td>
                                </tr>
                                @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 offset-lg-8">
                            <div class="proceed-checkout">
                                @if (Session::has("Cart") != null)

                                <ul>
                                    <li class="subtotal">Tổng số lượng <span>{{ Session::get('Cart')->totalQuanty
                                            }}</span></li>
                                    <li class="cart-total">Tổng giá tiền<span>{{ Session::get('Cart')->totalPrice
                                            }},000₫</span></li>
                                </ul>
                                <a href="{{route('admin.getCheckout')}}" class="proceed-btn">Tiến hành thanh toán</a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shopping Cart Section End -->

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
    <script>

        function DeleteLishItemCart(id) {
            console.log(id)
            $.ajax({
                url: 'DeleteItemListCart/' + id,
                type: 'GET',
            }).done(function (response) {
                RenderLishCart(response);
                // alertify.success('Đã xóa sản phẩm thành công');
            })
        }
        function SaveLishItemCart(id) {
            $.ajax({
                url: 'SaveItemListCart/' + id + '/' + $("#quanty-item-" + id).val(),
                type: 'GET',
            }).done(function (response) {
                RenderLishCart(response);
                alertify.success('Đã cập nhật sản phẩm thành công');
            })
        }
        function RenderLishCart(response) {
            $("#list-cart").empty();
            $("#list-cart").html(response);
            var proQty = $('.pro-qty');
	proQty.prepend('<span class="dec qtybtn">-</span>');
	proQty.append('<span class="inc qtybtn">+</span>');
	proQty.on('click', '.qtybtn', function () {
		var $button = $(this);
		var oldValue = $button.parent().find('input').val();
		if ($button.hasClass('inc')) {
			var newVal = parseFloat(oldValue) + 1;
		} else {
			// Don't allow decrementing below zero
			if (oldValue > 0) {
				var newVal = parseFloat(oldValue) - 1;
			} else {
				newVal = 0;
			}
		}
		$button.parent().find('input').val(newVal);
	});

        }
    </script>
</body>

</html>
