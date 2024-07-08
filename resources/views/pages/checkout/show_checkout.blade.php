@extends('pages.details')
@section('details')
<div class="page-title-container">
            <div class="page-title">
                <div class="container">
                    <h1 class="entry-title">Thanh Toán</h1>
                </div>
            </div>
        </div>
        <section id="content">
            <div class="container">
                <div class="woocommerce">
                    <form class="checkout block" method="POST">
                        @csrf
                        <!-- action="{{URL::to('/save-checkout-customer')}}" method="POST" -->
                    <!-- {{ csrf_field() }} -->
                        <div class="row">
                            <div class="col-sm-6">
                                
                                <div class="woocommerce-shipping-fields box">
                                   
                                    <h4>Điền Thông Tin Gửi Hàng</h4>
                                    <div class="shipping-address">
                                        <form >
                                            
                                        <input type="hidden" name="lang" value="vi">
                    <div class="form_nho">
                        <div class="box_group_from">
                            <input type="text" name="name" class="shipping_name" placeholder="Tên Người Đặt" required="">
                        </div>
                        <div class="box_group_from">
                            <input type="email" name="email" class="shipping_email" placeholder="Email" required="">
                        </div>
                        <div class="box_group_from">
                            <input type="" name="phone" class="shipping_phone" placeholder="Số Điện Thoại" required="">
                        </div>
                    </div>
                    <div class="box_group_from">
                            <input type="text" name="name" class="shipping_address" placeholder="Địa Chỉ" required="">
                        </div>
                    <div class="form_nho">
                        <textarea name="content" class="shipping_notes" placeholder="Ghi chú về đơn đặt hàng của bạn, ghi chú đặc biệt khi giao hàng" cols="60" rows="5" required=""></textarea>
                    </div>
                                        </form>
                                    </div>
                                    
                                </div>
                            </div>
                            <?php
                                $content = Cart::content();
                            ?>
                            <div class="col-sm-6">
                                 <h4>Đơn đặt hàng của bạn </h4> 
                                <div id="order_review">
                                     <table class="shop_table box">
                                        <thead>
                                            <tr>
                                                <th class="product-name">Sản phẩm</th>
                                                <th class="product-total">Tổng cộng</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($content as $v_content)
                                            <tr class="cart_item">
                                            <td class="product-name">
                                                <p>{{$v_content->name}}</p>
                                            </td>
                                            <td class="product-price">
                                                <span class="amount">{{number_format($v_content->price).' '.'VNĐ'}}</span>
                                            </td>
                                        </tr>
                                        @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr class="cart-subtotal">
                                                <th>Tổng sản phẩm</th>
                                                <td><span class="amount">{{Cart::subtotal().' '.'VNĐ'}}</span></td>
                                            </tr>
                                            <tr class="shipping">
                                                <th>Phí ship</th>
                                                <td>
                                                    Free Shipping
                                                </td>
                                            </tr>

                                            <tr class="order-total">
                                                <th>Thành tiền</th>
                                                <td><span class="amount">{{Cart::subtotal().' '.'VNĐ'}}</span></td>
                                            </tr>
                                        </tfoot>
                                    </table> 
                                    <div id="payment">
                                        <h4>Phương thức thanh toán</h4>
                                   
                                        <ul class="payment_methods methods box-sm">
                                            <li class="payment_method_bacs">
                                                <label class="radio">
                                                    <input id="payment_method_bacs" class="input-radio" name="payment_method" value="1" checked="checked" data-order_button_text="" type="radio">
                                                    Chuyển khoản 
                                                </label>
                                            </li>
                                            <li class="payment_method_cheque">
                                                <label class="radio">
                                                    <input id="payment_method_cheque" class="input-radio" name="payment_method" value="2" data-order_button_text="" type="radio">
                                                    Thanh toán khi nhận hàng
                                                </label>
                                            </li>
                                            <li class="payment_method_paypal">
                                                <label class="radio">
                                                    <input id="payment_method_paypal" class="input-radio" name="payment_method" value="3" data-order_button_text="Proceed to PayPal" type="radio">
                                                    PayPal <img src="http://demo.qodeinteractive.com/bridge/wp-content/plugins/woocommerce/assets/images/icons/paypal.png" alt="PayPal">
                                                </label>
                                            </li>
                                        </ul>
                                   
                                        <div class="form-row place-order">
                                            <input type="button" value="Xác nhận đơn hàng" name="send_order" class="btn btn-primary btn-sm send_order">
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                </div> 
                             </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
@endsection