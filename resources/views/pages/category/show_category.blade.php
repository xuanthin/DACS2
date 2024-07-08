@extends('store')
@section('content')
<div id="main" class="col-sm-8 col-md-9">
                    @foreach($category_name as $key => $name)
                        <h1><p style="text-align: center;">{{$name->category_name}}</p></h1>
                    @endforeach
                        <ul class="products row add-clearfix">
                        @foreach($category_by_id as $key => $product)
                            <li class="product col-sms-6 col-sm-6 col-lg-4 box">
                                <a href="{{URL::to('chi-tiet-san-pham/'.$product->product_id)}}" class="product-image">
                                    <div class="first-img">
                                        <img src="{{URL::to('public/uploads/product/'.$product->product_image)}}" alt="">
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
                                    <a href="#" class="btn btn-add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm giỏ hàng</a>
                                    <a href="#" class="btn btn-add-to-wishlist"><i class="fa fa-heart"></i></a>
                                    <a href="ajax/woocommerce-product-quickview.html" class="btn btn-quick-view"><i class="fa fa-search"></i></a>
                                    <a href="#" class="btn btn-compare"><i class="fa fa-star-half-o"></i></a>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                        <div class="post-pagination">
                            <a href="#" class="nav-prev disabled" onclick="return false;"></a>
                            <div class="page-links">
                                <span class="active">1</span>
                                <a href="#" data-page-num="2">2</a>
                            </div>
                            <a href="#" class="nav-next" data-page-num="2"></a>
                        </div>
                    </div>
@endsection