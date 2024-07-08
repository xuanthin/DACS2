@extends('pages.details')
@section('details')
<div class="page-title-container">
            <div class="page-title">
                <div class="container">
                    <h1 class="entry-title">Kết quả tìm kiếm</h1>
                </div>
            </div>
        </div>
        <br><br><br>
                    <ul class="related products row add-clearfix">
                        @foreach($search_product as $key => $product)
                        <li class="product col-sms-6 col-sm-4 col-lg-3 box">
                            <a class="product-image" href="#">
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
                                
                                    <a class="btn btn-add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm giỏ hàng</a>
                                    <a href="#" class="btn btn-add-to-wishlist"><i class="fa fa-heart"></i></a>
                                    <a href="ajax/woocommerce-product-quickview.html" class="btn btn-quick-view"><i class="fa fa-search"></i></a>
                                    <a href="#" class="btn btn-compare"><i class="fa fa-star-half-o"></i></a>
                                
                                </div>
                            
                        </li>
                        @endforeach
                    </ul>
@endsection