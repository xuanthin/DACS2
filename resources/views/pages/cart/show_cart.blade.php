@extends('pages.details')
@section('details')

<div class="page-title-container">
            <div class="page-title">
                <div class="container">
                    <h1 class="entry-title">Giỏ hàng</h1>
                </div>
            </div>
        </div>
       @if(session()->has('message'))
       <div class="alert alert-success">
           {{ session()->get('message') }}
</div>
@elseif(session()->has('error'))
<div class="alert alert-danger">
    {{ session()->get('error') }}
</div>
@endif
        <section id="content">
            <div class="container">
                <div class="woocommerce">
                   
                <form action="{{URL::to('/update-cart')}}" method="POST">
                    @csrf
                        <table class="shop_table cart box-sm">
                            <thead>
                                <tr>
                                    <th class="product-remove">&nbsp;</th>
                                    <th class="product-thumbnail">&nbsp;</th>
                                    <th class="product-name">Sản phẩm</th>
                                    <th class="product-price">Giá</th>
                                    <th class="product-quantity">Số lượng</th>
                                    <th class="product-subtotal">Tổng cộng</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $total = 0;
                                @endphp
                                @foreach(Session::get('cart') as $key => $cart)
                                        @php
                                            $subtotal = $cart['product_price']* $cart['product_quantity'] ;
                                            $total+=$subtotal;
                                        @endphp

                                <tr class="cart_item">
                                    <td class="product-remove">
                                        <a href="{{URL::to('/del-product/'.$cart['session_id'])}}"><i class="fa fa-times"></i></a>
                                    </td>
                                    <td class="product-thumbnail">
                                        <a href="" class="attachment-shop_thumbnail wp-post-image"> <img src="{{asset('public/uploads/product/'.$cart['product_image'])}}" width="50" alt="{{$cart['product_name']}}"></a>
                                    </td>
                                    <td class="product-name">
                                        <a href="">{{$cart['product_name']}}</a>
                                    </td>
                                    <td class="product-price">
                                        <span class="amount">{{$subtotal,0,',','.'}}VNĐ</span>
                                    </td>
                                    <td class="product-quantity">
                                        
                                                {{ csrf_field() }}
                                        <input type="number" min="1" class="input-text qty text" title="Qty" value="{{$cart['product_quantity']}}" name="cart_qty[{{$cart['session_id']}}]">
                                       
                                       
                                        
                                    </td>
                                    <td class="product-subtotal">
                                        <span class="amount">
                                        {{$subtotal,0,',','.'}}VNĐ
                                        </span>
                                    </td>
                                </tr>
                                @endforeach
                                <tr>
                                    <td class="actions" colspan="6">
                                    <input type="submit" value="Cập nhật giỏ hàng" name="update_qty" class="btn btn-default btn-sm">
                                        <!-- <div class="coupon">
                                            <input placeholder="Nhập mã giảm giá" value="" id="coupon_code" class="input-text" name="coupon_code">
                                            <button name="apply_coupon" class="btn btn-medium style2">Áp dụng</button>
                                        </div> -->
                                       
                                         <a href="{{URL::to('/login-checkout')}}" class="btn btn-medium style1">Tiến hành thanh toán</a>
                                        
                                    </td>
                                </tr>
                            </tbody>
                            
                        </table>
                    </form>
                    <div class="cart-collaterals row">
                        <div class="cart_totals col-sm-offset-7 col-md-offset-8 clearfix box">
                            <div class="col-xs-12">
                                <h4>Tổng giỏ hàng</h4>
                                <table>
                                    <tbody>
                                        <tr class="cart-subtotal">
                                            <th>Tổng sản phẩm</th>
                                            <td><span class="amount"></span>{{$total,0,',','.'}}VNĐ</td>
                                        </tr>
                                        <tr class="shipping">
                                            <th>Phí ship</th>
                                            <td>
                                                Free Ship
                                                <input type="hidden" class="shipping_method" value="free_shipping" id="shipping_method_0" data-index="0" name="shipping_method[0]">
                                            </td>
                                        </tr>
                                        
                                        <tr class="order-total">
                                            <th>Thành tiền</th>
                                            <td><span class="amount">{{$total,0,',','.'}}VNĐ</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
@endsection