@extends('pages.details')
@section('details')
<div class="page-title-container">
            <div class="page-title">
                <div class="container">
                    <h1 class="entry-title">Tin tức</h1>
                </div>
            </div>
        </div>
<section id="content" style=" background-image: url(public/frontend/images/nen.png);background-color: #F6F6F6;">
            <div class="container">
                <div id="main">
                    <div class="section-info">
                        <h3 class="section-title">Mini Fullwidth Posts</h3>
                        <div class="blog-posts">
                            <article class="post post-full">
                                <div class="post-image col-sm-5">
                                    <div class="image">
                                        <img src="{{asset('public/frontend/images/tintuc1.jpg')}}" alt="">
                                        <div class="image-extras">
                                            <a href="#" class="post-gallery"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="post-content col-sm-7">
                                    <h3 class="post-title"><a href="#">Bánh kem sầu riêng</a></h3>
                                    <div class="post-meta">
                                        <span class="entry-author fn">By <a href="#">Admin</a></span>
                                        <span class="post-category">in <a href="#">Web Design</a></span>
                                    </div>
                                    <p>Bánh kem sầu riêng tương tự như các sản phẩm bánh kem sữa tươi. Tuy nhiên thay vì sử dụng duy nhất sữa tươi trong công thức, phần nhân bánh sầu riêng có thêm thịt sầu riêng tươi đã được sơ chế, kèm với thành phần custard và kem whipping, giúp bánh thơm ngon tự nhiên và giữ trọn mùi thơm của sầu riêng.</p>
                                    <div class="post-action">
                                        <a href="#" class="btn btn-sm style3 post-comment"><i class="fa fa-comment"></i>25</a>
                                        <a href="#" class="btn btn-sm style3 post-like"><i class="fa fa-heart"></i>480</a>
                                        <a href="#" class="btn btn-sm style3 post-share"><i class="fa fa-share"></i>Share</a>
                                        <a href="#" class="btn btn-sm style3 post-read-more">More</a>
                                    </div>
                                </div>
                            </article>
                            <article class="post post-full">
                                <div class="post-image col-sm-5">
                                    <div class="image">
                                        <img src="{{asset('public/frontend/images/tintuc2.jpg')}}" alt="">
                                        <div class="image-extras">
                                            <a href="#" class="post-gallery"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="post-content col-sm-7">
                                    <h3 class="post-title"><a href="#">Bánh bông lan trứng muối</a></h3>
                                    <div class="post-meta">
                                        <span class="entry-author fn">By <a href="#">Admin</a></span>
                                        <span class="post-category">in <a href="#">Web Design</a></span>
                                    </div>
                                    <p>Bánh bông lan trứng muối là sự kết hợp hoàn hảo đến không ngờ, là sự hoà quyện giữa vị ngọt dịu của vỏ bánh bông lan với vị mằn mặn của trứng muối. Cầm một chiếc bánh lên, hương thơm thoang thoảng kích thích sự thèm ăn, cắn một miếng, vị ngọt ngọt mặn mặn quấn quýt ngay đầu lưỡi khiến người ăn không kìm lòng được mà cắn thêm một miếng nữa.</p>
                                    <div class="post-action">
                                        <a href="#" class="btn btn-sm style3 post-comment"><i class="fa fa-comment"></i>25</a>
                                        <a href="#" class="btn btn-sm style3 post-like"><i class="fa fa-heart"></i>480</a>
                                        <a href="#" class="btn btn-sm style3 post-share"><i class="fa fa-share"></i>Share</a>
                                        <a href="#" class="btn btn-sm style3 post-read-more">More</a>
                                    </div>
                                </div>
                            </article>
                            <article class="post post-full">
                                <div class="post-image col-sm-5">
                                    <div class="post-slideshow owl-carousel">
                                        <div class="image hover-style1">
                                            <img src="{{asset('public/frontend/images/tintuc3.jpg')}}" alt="">
                                            <div class="image-extras">
                                                <a href="#" class="post-gallery"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="post-content col-sm-7">
                                    <h3 class="post-title"><a href="#">Bánh kem bắp</a></h3>
                                    <div class="post-meta">
                                        <span class="entry-author fn">By <a href="#">Admin</a></span>
                                        <span class="post-category">in <a href="#">Web Design</a></span>
                                    </div>
                                    <p>Trong dịp sinh nhật hay những ngày lễ đặc biệt của người thân, bạn bè việc lựa chọn một món quà ý nghĩa là hết sức quan trọng. Một chiếc bánh kem bắp ngon là lựa chọn số 1 cho bạn. Bánh kem bắp vừa mang lại ý nghĩa đặc biệt cho dịp sinh nhật, vừa mang lại niềm vui cho người nhận nhờ hương vị ngọt ngào và sắc vàng ấm áp.</p>
                                    <div class="post-action">
                                        <a href="#" class="btn btn-sm style3 post-comment"><i class="fa fa-comment"></i>25</a>
                                        <a href="#" class="btn btn-sm style3 post-like"><i class="fa fa-heart"></i>480</a>
                                        <a href="#" class="btn btn-sm style3 post-share"><i class="fa fa-share"></i>Share</a>
                                        <a href="#" class="btn btn-sm style3 post-read-more">More</a>
                                    </div>
                                </div>
                            </article>
                            <article class="post post-full">
                                <div class="post-image col-sm-5">
                                    <div class="post-slideshow owl-carousel">
                                        <div class="image hover-style1">
                                            <img src="{{asset('public/frontend/images/tintuc4.jpg')}}" alt="">
                                            <div class="image-extras">
                                                <a href="#" class="post-gallery"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="post-content col-sm-7">
                                    <h3 class="post-title"><a href="#">Bánh red velvet</a></h3>
                                    <div class="post-meta">
                                        <span class="entry-author fn">By <a href="#">Admin</a></span>
                                        <span class="post-category">in <a href="#">Web Design</a></span>
                                    </div>
                                    <p>Chiếc bánh được phủ ngoài là lớp kem tươi vị vanilla truyền thống và lớp nhân kem creamcheese thơm béo, có vị chua nhẹ. Phần cốt bánh là lớp bông lan Red velvet màu đỏ thẫm ngọt ngào đầy mê hoặc. Các lớp lần lượt đan xen nhau, 3 lớp bông lan, 2 lớp nhân, khiêu khích vị giác của bạn một cách tối đa, làm con tim của bao khách hàng thổn thức vì em ấy.</p>
                                    <div class="post-action">
                                        <a href="#" class="btn btn-sm style3 post-comment"><i class="fa fa-comment"></i>25</a>
                                        <a href="#" class="btn btn-sm style3 post-like"><i class="fa fa-heart"></i>480</a>
                                        <a href="#" class="btn btn-sm style3 post-share"><i class="fa fa-share"></i>Share</a>
                                        <a href="#" class="btn btn-sm style3 post-read-more">More</a>
                                    </div>
                                </div>
                            </article>
                            <article class="post post-full">
                                <div class="post-image col-sm-5">
                                    <div class="post-slideshow owl-carousel">
                                        <div class="image hover-style1">
                                            <img src="{{asset('public/frontend/images/tintuc5.jpg')}}" alt="">
                                            <div class="image-extras">
                                                <a href="#" class="post-gallery"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="post-content col-sm-7">
                                    <h3 class="post-title"><a href="#">Bánh mousse</a></h3>
                                    <div class="post-meta">
                                        <span class="entry-author fn">By <a href="#">Admin</a></span>
                                        <span class="post-category">in <a href="#">Web Design</a></span>
                                    </div>
                                    <p>Bánh mousse là dòng bánh lạnh nhiều kem ít bánh, tan ngay trong miệng khi dùng, thường được dùng như món tráng miệng. Bánh Mousse sẽ ngon hơn khi được thưởng thức vào mùa hè oi bức, chắc chắn sẽ giúp bạn đập tan cơn nóng.</p>
                                    <div class="post-action">
                                        <a href="#" class="btn btn-sm style3 post-comment"><i class="fa fa-comment"></i>25</a>
                                        <a href="#" class="btn btn-sm style3 post-like"><i class="fa fa-heart"></i>480</a>
                                        <a href="#" class="btn btn-sm style3 post-share"><i class="fa fa-share"></i>Share</a>
                                        <a href="#" class="btn btn-sm style3 post-read-more">More</a>
                                    </div>
                                </div>
                            </article>
                            <article class="post post-full">
                                <div class="post-image col-sm-5">
                                    <div class="post-slideshow owl-carousel">
                                        <div class="image hover-style1">
                                            <img src="{{asset('public/frontend/images/tintuc6.jpg')}}" alt="">
                                            <div class="image-extras">
                                                <a href="#" class="post-gallery"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="post-content col-sm-7">
                                    <h3 class="post-title"><a href="#">Bánh tiramisu</a></h3>
                                    <div class="post-meta">
                                        <span class="entry-author fn">By <a href="#">Admin</a></span>
                                        <span class="post-category">in <a href="#">Web Design</a></span>
                                    </div>
                                    <p>Bánh Tiramisu là dòng bánh lạnh, nhiều kem ít bánh đến từ đất nước Ý lãng mạn. Tên gọi Tiramisu có nghĩa là “Hãy mang em đi” – một thông điệp vô cùng ngọt ngào xuất phát từ câu chuyện tình yêu của một người phụ nữ và một người lính đang trên đường ra trận, muốn thông qua chiếc bánh này để gửi gắm tình cảm của mình đến đối phương. </p>
                                    <div class="post-action">
                                        <a href="#" class="btn btn-sm style3 post-comment"><i class="fa fa-comment"></i>25</a>
                                        <a href="#" class="btn btn-sm style3 post-like"><i class="fa fa-heart"></i>480</a>
                                        <a href="#" class="btn btn-sm style3 post-share"><i class="fa fa-share"></i>Share</a>
                                        <a href="#" class="btn btn-sm style3 post-read-more">More</a>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection