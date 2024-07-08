<!DOCTYPE html>
<html>

<head>
    <!-- Page Title -->
    <title>MIMOSA BAKERY</title>
    <link rel="shortcut icon" href="{{asset('public/frontend/images/favicon.png')}}" />
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="author" content="SoapTheme">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Theme Styles -->
    <link rel="stylesheet" href="{{asset('public/frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/css/font-awesome.min.css')}}">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic' rel='stylesheet'
        type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Dosis:400,300,500,600,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{asset('public/frontend/css/animate.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/frontend/components/owl-carousel/owl.carousel.css')}}"
        media="screen" />
    <link rel="stylesheet" type="text/css"
        href="{{asset('public/frontend/components/owl-carousel/owl.transitions.css')}}" media="screen" />
    <!-- Magnific Popup core CSS file -->
    <link rel="stylesheet" href="{{asset('public/frontend/components/magnific-popup/magnific-popup.css')}}">
    <link rel="stylesheet" type="text/css"
        href="{{asset('public/frontend/components/revolution_slider/css/settings.css')}}" media="screen" />
    <link rel="stylesheet" type="text/css"
        href="{{asset('public/frontend/components/revolution_slider/css/style.css')}}" media="screen" />
    <!-- Main Style -->
    <link id="main-style" rel="stylesheet" href="{{asset('public/frontend/css/style.css')}}">
    <!-- Updated Styles -->
    <link rel="stylesheet" href="{{asset('public/frontend/css/updates.css')}}">
    <!-- Custom Styles -->
    <link rel="stylesheet" href="{{asset('public/frontend/css/custom.css')}}">
    <!-- Responsive Styles -->
    <link rel="stylesheet" href="{{asset('public/frontend/css/responsive.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/css/sweetalert.css')}}">
</head>

<body class="woocommerce">
    <div id="page-wrapper">
        <header id="header" class="header-color-white">
            <div class="container">
                <div class="header-inner">
                    <div class="branding">
                        <h1 class="logo">
                            <a href="{{URL::to('/trang-chu')}}"><img
                                    src="{{asset('public/frontend/images/logo@2x.png')}}" alt=""><span>MIMOSA</span></a>
                        </h1>
                    </div>
                    <nav id="nav">
                        <ul class="header-top-nav">
                            <li class="mini-cart menu-item-has-children">
                                <a href="#"><i class="fa fa-shopping-cart has-circle"></i></a>
                                <div class="sub-nav cart-content">
                                    <ul class="product-list product-list-widget">
                                     @if(Session::get('cart') !=null)
                                     @php
                                    $total = 0;
                                    @endphp
                                    @foreach(Session::get('cart') as $key => $cart)
                                        @php
                                            $subtotal = $cart['product_price']* $cart['product_quantity'] ;
                                            $total+=$subtotal;
                                        @endphp
                                    @endforeach
                                        @foreach (Session::get('cart') as $key => $value)
                                    <li>
                                            <div class="product-image">
                                            <img src="{{asset('public/uploads/product/'.$value['product_image'])}}" width="50" alt="product">
                                            </div>
                                            <div class="product-content">
                                                <a href="#" class="product-title">{{$value['product_name']}}</a>
                                                <span class="product-price">{{number_format($value['product_price'])." ".'vnđ'}}</span>
                                            </div>
                                        </li>
                                        @endforeach
                                       @else
                                            <p>Không có sản phẩm nào trong giỏ hàng</p>
                                            @endif
                                    </ul>
                                    <hr>
                                    <div class="st-table">
                                        <div class="cart-action">
                                            <a href="{{URL::to('/show-cart')}}" class="btn-view-cart btn btn-sm style4"><i class="fa fa-shopping-cart"></i>View Cart</a>
                                        </div>
                                        <div class="cart-price">Tổng: <span class="total-price"></span></div>
                                    </div>
                                    
                                </div>
                            </li>
                            <li class="mini-search">
                                <a href="#"><i class="fa fa-search has-circle"></i></a>
                                <div class="main-nav-search-form">
                                    <form method="get" role="search">
                                        <div class="search-box">
                                            <input type="text" id="s" name="s" value="">
                                            <button type="submit"><i class="fa fa-search"></i></button>
                                        </div>
                                    </form>
                                </div>
                            </li>
                            <li>
                                <li class="mini-sign-in menu-item-has-children">
                                <a href="#"><i class="fa fa-user has-circle"style="color: #ff6600; border:1px solid #ff6600;"></i></a>
                                <div class="sub-nav cart-content">
                                    <ul class="product-list product-list-widget">
                                        <li>
                                            <div class="product-content">
                                                <p>Khách Hàng</p>    
                                            </div>
                                        </li>
                                        <?php 
                                        $customer_id = Session::get('customer_id');
                                        if($customer_id!=NULL) {
                                        ?>  
                                        <li>
                                        <div class="product-content">
                                            <a href="{{URL::to('/logout-checkout')}}">Đăng Xuất</a>
                                        </div>
                                        </li>
                                        <?php
                                        }else{
                                            ?>
                                         <li>
                                            <div class="product-content">
                                                <a href="{{URL::to('/login-checkout')}}">Đăng Nhập</a>
                                            </div>
                                        </li>
                                        <?php
                                        }
                                        ?>
                                       
                                    </ul>
                                </div>
                                </li>
                            </li>
                            <li class="visible-mobile">
                                <a href="#mobile-nav-wrapper" data-toggle="collapse"><i class="fa fa-bars has-circle"></i></a>
                            </li>
                        </ul>
                        <ul id="main-nav" class="hidden-mobile">
                            <li class="menu-item-has-children">
                                <a href="{{URL::to('/trang-chu')}}">Home</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="{{URL::to('/cua-hang')}}">Cửa Hàng</a>
                            </li>
                            <li class="menu-item-has-children mega-menu-item mega-column-4">
                                <a href="{{URL::to('/tin-tuc')}}">Tin Tức</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="{{URL::to('/lien-he')}}">Liên Hệ</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="mobile-nav-wrapper collapse visible-mobile" id="mobile-nav-wrapper">
                <ul class="mobile-nav">
                    <li class="menu-item-has-children">
                        <span class="open-subnav"></span>
                        <a href="{{URL::to('/trang-chu')}}">Home</a>
                    </li>
                    <li class="menu-item-has-children">
                        <span class="open-subnav"></span>
                        <a href="{{URL::to('/cua-hang')}}">Cửa Hàng</a>
                    </li>
                    <li class="menu-item-has-children">
                        <span class="open-subnav"></span>
                        <a href="{{URL::to('/tin-tuc')}}">Tin Tức</a>
                    </li>
                    <li class="menu-item-has-children">
                        <span class="open-subnav"></span>
                        <a href="{{URL::to('/lien-he')}}">Liên Hệ</a>
                    </li>
                </ul>
            </div>
        </header>
        <div id="slideshow">
            <div class="revolution-slider">
                <ul>
                    <!-- Slide1 -->
                    <li data-transition="zoomin" data-slotamount="7" data-masterspeed="1500">
                        <!-- MAIN IMAGE -->
                        <img src="{{asset('public/frontend/images/slide.jpg')}}" alt="">
                    </li>
                    <!-- Slide2 -->
                    <li data-transition="zoomout" data-slotamount="7" data-masterspeed="1500">
                        <!-- MAIN IMAGE -->
                        <img src="{{asset('public/frontend/images/slide2.jpg')}}" alt="">
                    </li>
                    <!-- Slide3 -->
                    <li data-transition="slidedown" data-slotamount="7" data-masterspeed="1500">
                        <!-- MAIN IMAGE -->
                        <img src="{{asset('public/frontend/images/slide1.jpg')}}" alt="">
                    </li>
                    <!-- Slide4 -->
                    <li data-transition="slidedown" data-slotamount="7" data-masterspeed="1500">
                        <!-- MAIN IMAGE -->
                        <img src="{{asset('public/frontend/images/slide3.jpg')}}" alt="">
                    </li>
                </ul>
            </div>
        </div>
        <section id="content">

            @yield('best')

            <div>
                <div class="banner-color1">
                    <div class="section container">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="image-container fixed">
                                    <img src="{{asset('public/frontend/images/a.jpg')}}" alt="">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <i style="text-align: center;">
                                    <h1 class="box-title">Về chúng tôi</h1>
                                </i>
                                <h3>Được thành lập vào ngày 20.9.2021, MIMOSA BAKERY với tầm nhìn trở thành thương hiệu
                                    hàng đầu về các sản phẩm bánh ngọt. MIMOSA luôn đề cao chất lượng sản phẩm và dịch
                                    vụ để mang đến cho khách hàng những trải nghiệm khó quên. Vì lẽ đó, chúng tôi luôn
                                    lấy sự sáng tạo và khác biệt để làm nên tảng cho sự phát triển, nhằm mang đến cho
                                    khách hàng những sản phẩm chất lượng với giá thành hợp lý.</h3>
                                <h3>MIMOSA BAKERY hy vọng sẽ mang lại những trải nghiệm hoàn hảo cho khách hàng để có
                                    thể sẻ chia niềm vui cùng với bạn bè và gia đình mình.</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <footer id="footer" class="style4">
            <div class="footer-wrapper">
                <div class="container">
                    <div class="row add-clearfix same-height">
                        <div class="col-sm-6 col-md-3">
                            <h3 class="section-title box">Địa chỉ</h3>
                            <ul class="recent-posts">
                                <li>
                                    <a class="post-author-avatar"><span><img
                                                src="{{asset('public/frontend/images/vector.jpg')}}" alt=""></span></a>
                                    <div class="post-content">
                                        <p class="post-title">172 Huỳnh Văn Nghệ, P.Hoà Quý, Q.Ngũ Hành Sơn, Tp.Đà Nẵng
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <h3 class="section-title box">Email</h3>
                            <ul class="recent-posts">
                                <li>
                                    <a class="post-author-avatar"><span><img
                                                src="{{asset('public/frontend/images/email.jpg')}}" alt=""></span></a>
                                    <div class="post-content">
                                        <p class="post-title">mimosa@gmail.com</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <h3 class="section-title box">Số điện thoại</h3>
                            <ul class="recent-posts">
                                <li>
                                    <a class="post-author-avatar"><span><img
                                                src="{{asset('public/frontend/images/phone.jpeg')}}" alt=""></span></a>
                                    <div class="post-content">
                                        <p class="post-title">(+84)356474041 or (+84)359404032</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <h5 class="section-title box">MIMOSA BAKERY</h5>
                            <p style="color: white;">Nơi làm bánh uy tín, chất lượng</p>
                            <div class="social-icons">
                                <a href="#" class="social-icon"><i class="fa fa-twitter has-circle"
                                        data-toggle="tooltip" data-placement="top" title="Twitter"></i></a>
                                <a href="#" class="social-icon"><i class="fa fa-facebook has-circle"
                                        data-toggle="tooltip" data-placement="top" title="Facebook"></i></a>
                                <a href="#" class="social-icon"><i class="fa fa-google-plus has-circle"
                                        data-toggle="tooltip" data-placement="top" title="GooglePlus"></i></a>
                                <a href="#" class="social-icon"><i class="fa fa-linkedin has-circle"
                                        data-toggle="tooltip" data-placement="top" title="LinkedIn"></i></a>
                                <a href="#" class="social-icon"><i class="fa fa-skype has-circle" data-toggle="tooltip"
                                        data-placement="top" title="Skype"></i></a>
                                <a href="#" class="social-icon"><i class="fa fa-dribbble has-circle"
                                        data-toggle="tooltip" data-placement="top" title="Dribbble"></i></a>
                                <a href="#" class="social-icon"><i class="fa fa-tumblr has-circle" data-toggle="tooltip"
                                        data-placement="top" title="Tumblr"></i></a>
                            </div>
                            <a href="#" class="back-to-top"><span></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- Javascript -->    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <script type="text/javascript" src="{{asset('public/frontend/js/jquery-2.1.3.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/frontend/js/jquery.noconflict.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/frontend/js/modernizr.2.8.3.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/frontend/js/jquery-migrate-1.2.1.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/frontend/js/jquery-ui.1.11.2.min.js')}}"></script>
    <!-- Twitter Bootstrap -->
    <script type="text/javascript" src="{{asset('public/frontend/js/bootstrap.min.js')}}"></script>
    <!-- Magnific Popup core JS file -->
    <script type="text/javascript"
        src="{{asset('public/frontend/components/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
    <!-- parallax -->
    <script type="text/javascript" src="{{asset('public/frontend/js/jquery.stellar.min.js')}}"></script>
    <!-- waypoint -->
    <script type="text/javascript" src="{{asset('public/frontend/js/waypoints.min.js')}}"></script>
    <!-- Owl Carousel -->
    <script type="text/javascript"
        src="{{asset('public/frontend/components/owl-carousel/owl.carousel.min.js')}}"></script>
    <!-- load revolution slider scripts -->
    <script type="text/javascript"
        src="{{asset('public/frontend/components/revolution_slider/js/jquery.themepunch.tools.min.js')}}"></script>
    <script type="text/javascript"
        src="{{asset('public/frontend/components/revolution_slider/js/jquery.themepunch.revolution.min.js')}}"></script>
    <!-- plugins -->
    <script type="text/javascript" src="{{asset('public/frontend/js/jquery.plugins.js')}}"></script>
    <!-- load page Javascript -->
    <script type="text/javascript" src="{{asset('public/frontend/js/main.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/frontend/js/revolution-slider.js')}}"></script>
<!-- JavaScript -->
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

<!-- CSS -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
<!-- Default theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>
<!-- Semantic UI theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css"/>
<!-- Bootstrap theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>
    <script type="text/javascript" src="{{asset('public/frontend/js/sweetalert.min.js')}}"></script>
    
    <script type="text/javascript">
    $(document).ready(function(){
        $('.add-to-cart').click(function(e){
            e.preventDefault();
            var id = $(this).data('id_product');
            var cart_product_id = $('.cart_product_id_' + id).val();
            var cart_product_name = $('.cart_product_name_' + id).val();
            var cart_product_image = $('.cart_product_image_' + id).val();
            var cart_product_price = $('.cart_product_price_' + id).val();
            var cart_product_quantity = $('.cart_product_qty_' + id).val();
            var _token = $('input[name="_token"]').val();
            console.log(cart_product_quantity);
            $.ajax({
                url: '{{url('/add-cart-ajax')}}',
                type: "POST",
                data:{cart_product_id:cart_product_id,cart_product_name:cart_product_name,cart_product_image:cart_product_image,cart_product_price:cart_product_price,cart_product_qty:cart_product_quantity,_token:_token},
                success: function(){

                    swal({
                            title: "Thêm vào giỏ hàng thành công",
                            text: "Bạn có thể mua hàng tiếp hoặc tới giỏ hàng để tiến hành thanh toán",
                            type: 'success',
                            showCancelButton: true,
                            cancelButtonText: "Xem tiếp",
                            cancelButtonClass: "btn btn-info",
                            confirmButtonClass: "btn-success",
                            confirmButtonText: "Đi đến giỏ hàng",
                            closeOnConfirm: false,
                        },
                        function() {
                            window.location.href = "{{url('/show-cart')}}";

                        });

                }

            });
        });
    });
</script>
</body>

</html>