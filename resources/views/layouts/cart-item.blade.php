@if (Session::has("Cart") != null)
<div class="select-items">
    <table>
        <tbody>
            @foreach (Session::get('Cart')-> products as $item)
            <tr>
                <td class="si-pic"><img src="{{asset('upload/book/'.$item['productInfo']->image)}}" alt=""></td>
                <td class="si-text">
                    <div class="product-selected">
                        <p>{{ $item['productInfo']->price }},000 ₫ x {{ $item['quanty'] }}</p>
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
<div class="select-total">
    <span>Tổng giá tiền:</span>
    <h5>{{ Session::get('Cart')->totalPrice }}</h5>
    <input hidden id="total-quanty-cart" type="number" value="{{ Session::get('Cart')->totalQuanty }}">
</div>
</div>

@endif
<div class="select-button">
    <a href="{{route('viewcart')}}" class="primary-btn view-card">Xem giỏ hàng</a>
    <a href="{{route('admin.getCheckout')}}" class="primary-btn checkout-btn">Thanh toán</a>
</div>
