@extends('store')
@section('content')
<div id="main" class="col-sm-8 col-md-9">
                        <h1><p style="text-align: center;">Tên Danh Mục</p></h1>
                        <ul class="products row add-clearfix">
                            @foreach($all_product as $key => $product)
                            <form action="">
                           @csrf
                                <input type="hidden" value="{{$product->product_id}}" class="cart_product_id_{{$product->product_id}}">
                                <input type="hidden" value="{{$product->product_name}}" class="cart_product_name_{{$product->product_id}}">
                                <input type="hidden" value="{{$product->product_image}}" class="cart_product_image_{{$product->product_id}}">
                                <input type="hidden" value="{{$product->product_price}}" class="cart_product_price_{{$product->product_id}}">
                                <input type="hidden" value="1" class="cart_product_qty_{{$product->product_id}}">
                            <li class="product col-sms-6 col-sm-6 col-lg-4 box">
                                <a href="{{URL::to('chi-tiet-san-pham/'.$product->product_id)}}" class="product-image">
                                    <div class="first-img">
                                        <img src="{{URL::to('public/uploads/product/'.$product->product_image)}}" style="height: 300px; width: 300px;" alt="">
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
                            </form>
                            @endforeach
                        </ul>
                        
                        <div class="post-pagination">
                            {{$all_product->links("pagination::bootstrap-4") }}
                        </div>
                    </div>
@endsection