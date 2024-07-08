@extends('welcome')
@section('best')

 <div class="section container" >
                <div class="box overflow-hidden">
                    <h1 class="font-normal"><p style="text-align: corlor: white">Sản phẩm nổi bật</h1>
                    <div class="products post-slider style7 owl-carousel" data-itemsPerDisplayWidth="[[0, 1], [480, 1], [768, 2], [992, 3], [1200, 4]]" data-items="4">
                        @foreach($all_product as $key => $product)
                       <form action="">
                           @csrf
                                <input type="hidden" value="{{$product->product_id}}" class="cart_product_id_{{$product->product_id}}">
                                <input type="hidden" value="{{$product->product_name}}" class="cart_product_name_{{$product->product_id}}">
                                <input type="hidden" value="{{$product->product_image}}" class="cart_product_image_{{$product->product_id}}">
                                <input type="hidden" value="{{$product->product_price}}" class="cart_product_price_{{$product->product_id}}">
                                <input type="hidden" value="1" class="cart_product_qty_{{$product->product_id}}">
                       
                        <div class="product">  
                            <a href="{{URL::to('chi-tiet-san-pham/'.$product->product_id)}}" class="product-image">
                                <div class="first-img">
                                    <img src="{{URL::to('public/uploads/product/'.$product->product_image)}}" alt="">
                                </div>
                            </a>
                            <div class="product-content">
                                <h5 class="product-title"><a href="#">{{$product->product_name}}</a></h5>
                                <span class="product-price">{{number_format($product->product_price).' '.'VNĐ'}}</span>
                                <span data-toggle="tooltip" title="5" class="star-rating">
                                    <span data-stars="5"></span>
                                </span>
                            </div>
                            <div class="product-action">
                                <a href=""></a>
                                <button onclick="return false" class="btn btn-add-to-cart add-to-cart" data-id_product="{{$product->product_id}}"> <i class="fa fa-shopping-cart"></i>Thêm giỏ hàng</button>
                                
                                <a href="#" class="btn btn-add-to-wishlist"><i class="fa fa-heart"></i></a>
                                <a href="#" class="btn btn-quick-view"><i class="fa fa-search"></i></a>
                                <a href="#" class="btn btn-compare"><i class="fa fa-star-half-o"></i></a>
                            </div>
                        </div>
                        </form>
                        @endforeach
                    </div>
                </div>
            </div>   

@endsection