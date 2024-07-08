@extends('pages.details')
@section('details')
        <div class="page-title-container">
            <div class="page-title">
                <div class="container">
                    <h1 class="entry-title">Chi tiết sản phẩm</h1>
                </div>
            </div>
        </div>
        <section id="content">
        @foreach($product_details as $key => $value)
            <div class="container">
                <div class="product type-product">
                    <div class="row single-product-details">
                        <div class="product-images col-sm-6 box-lg">
                            <div id="sync1" class="owl-carousel images">
                                <div class="">
                                    <img src="{{URL::to('public/uploads/product/'.$value->product_image)}}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="summary entry-summary col-sm-6 box-lg">
                            <div class="clearfix">
                                <h1 class="product-title entry-title">{{$value->product_name}}</h1>
                            </div>
                            <br> <br>
                            <h4>{!!$value->product_content!!}</h4>
                            <dl class="product-meta">
                                <dt class="sku-wrapper">Giá:</dt>
                                <dd>{{number_format($value->product_price).' '.'VNĐ'}}</dd> <br>
                                <dt class="product-category">Danh mục:</dt>
                                <dd>{{$value->category_name}}</dd>
                            </dl>
                                <form action="">
                            @csrf
                            <input type="hidden" value="{{$value->product_id}}" class="cart_product_id_{{$value->product_id}}">
                            <input type="hidden" value="{{$value->product_name}}" class="cart_product_name_{{$value->product_id}}">
                            <input type="hidden" value="{{$value->product_image}}" class="cart_product_image_{{$value->product_id}}">
                            <input type="hidden" value="{{$value->product_price}}" class="cart_product_price_{{$value->product_id}}">
                                <div class="single-variation-wrap">
                                    <div class="qty-wrap">
                                        <label>Số lượng:</label>
                                        <input type="number" id="qty" class="form-control cart_product_qty_{{$value->product_id}}" value="1" min="1" max="10" step="1" data-decimals="0" required>
                                        <input type="hidden" value="{{$value->product_id}}" name="productid_hidden">
                                    </div>
                                    <div class="variation-action">
                                    <input type="button" value="Thêm giỏ hàng" class="btn btn-medium style1  add-to-cart" data-id_product="{{$value->product_id}}" name="add-to-cart">
                                    </div>
                                </div>
                                </form>
                           
                            <div class="social-wrap">
                                <label>Share with friends</label>
                                <div class="social-icons">
                                    <a href="#" class="social-icon"><i class="fa fa-twitter has-circle" data-toggle="tooltip" data-placement="top" title=""></i></a>
                                    <a href="#" class="social-icon"><i class="fa fa-facebook has-circle" data-toggle="tooltip" data-placement="top" title=""></i></a>
                                    <a href="#" class="social-icon"><i class="fa fa-google-plus has-circle" data-toggle="tooltip" data-placement="top" title=""></i></a>
                                    <a href="#" class="social-icon"><i class="fa fa-linkedin has-circle" data-toggle="tooltip" data-placement="top" title=""></i></a>
                                    <a href="#" class="social-icon"><i class="fa fa-skype has-circle" data-toggle="tooltip" data-placement="top" title=""></i></a>
                                    <a href="#" class="social-icon"><i class="fa fa-dribbble has-circle" data-toggle="tooltip" data-placement="top" title=""></i></a>
                                    <a href="#" class="social-icon"><i class="fa fa-tumblr has-circle" data-toggle="tooltip" data-placement="top" title=""></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
</div>
                @endforeach
                   <h1>Sản phẩm liên quan</h1>
                    <ul class="related products row add-clearfix">
                        @foreach($relate as $key => $product)
                        <form action="">
                           @csrf
                                <input type="hidden" value="{{$product->product_id}}" class="cart_product_id_{{$product->product_id}}">
                                <input type="hidden" value="{{$product->product_name}}" class="cart_product_name_{{$product->product_id}}">
                                <input type="hidden" value="{{$product->product_image}}" class="cart_product_image_{{$product->product_id}}">
                                <input type="hidden" value="{{$product->product_price}}" class="cart_product_price_{{$product->product_id}}">
                                <input type="hidden" value="1" class="cart_product_qty_{{$product->product_id}}">
                        <li class="product col-sms-6 col-sm-4 col-lg-3 box">
                            <a class="product-image" href="{{URL::to('chi-tiet-san-pham/'.$product->product_id)}}">
                                <div class="first-img">
                                    <img alt="" src="{{URL::to('public/uploads/product/'.$product->product_image)}}" style="height: 300px; width: 300px;">
                                </div>
                            </a>
                            <div class="product-content">
                                    <h5 class="product-title"><a href="#">{{$product->product_name}}</a></h5>
                                    <span class="product-price">{{number_format($product->product_price).' '.'VNĐ'}}</span>
                                    <span data-toggle="tooltip" title="4" class="star-rating">
                                        <span data-stars="4"></span>
                                    </span>
                                </div>
                                <div class="product-action">
                                <a href=""></a>
                                <button onclick="return false" class="btn btn-add-to-cart add-to-cart" data-id_product="{{$product->product_id}}"> <i class="fa fa-shopping-cart"></i>Thêm giỏ hàng</button>
                                    <a href="#" class="btn btn-add-to-wishlist"><i class="fa fa-heart"></i></a>
                                    <a href="#" class="btn btn-quick-view"><i class="fa fa-search"></i></a>
                                    <a href="#" class="btn btn-compare"><i class="fa fa-star-half-o"></i></a> 
                                </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            </section>
@endsection