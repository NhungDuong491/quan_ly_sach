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
                <td class="cart-pic first-row"><img src="{{asset('upload/book/'.$item['productInfo']->image)}}" alt="" width="150px" height="150px"></td>
                <td class="cart-title first-row">
                    <h5>{{ $item['productInfo']->name }}</h5>
                </td>
                <td class="p-price first-row">{{ $item['productInfo']->price }}</td>
                <td class="qua-col first-row">
                    <div class="quanty">
                        <div class="pro-qty">
                            <input type="text" id="quanty-item-{{ $item['productInfo']->id }}"
                                                    value="{{ $item['quanty'] }}">
                        </div>
                    </div>
                </td>
                <td class="total-price first-row">{{ $item['price'] }},000 đ</td>
                <td class="close-td first-row"><i class="ti-save"
                    onclick="SaveLishItemCart({{ $item['productInfo']->id }});"></i></td>

                <td class="close-td first-row"><i class="ti-close" onclick="DeleteLishItemCart({{ $item['productInfo']->id }});"></i></td>
            </tr>
            @endforeach
            @endif
        </tbody>
    </table>
</div>
<div class="row">
    <div class="col-lg-4 offset-lg-8">
        <div class="proceed-checkout">
            <ul>
                <li class="subtotal">Tổng số lượng <span>{{ Session::get('Cart')->totalQuanty }}</span></li>
                <li class="cart-total">Tổng giá tiền<span>{{ Session::get('Cart')->totalPrice }},000 đ</span></li>
            </ul>
            <a href="{{route('admin.getCheckout')}}" class="proceed-btn">Tiến hành thanh toán</a>
        </div>
    </div>
</div>