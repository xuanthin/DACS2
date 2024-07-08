@extends('pages.details')
@section('details')
<div class="page-title-container" style="background-image: url(https://banhngot.tkweb89.com/wp-content/uploads/2021/04/2.jpg);">
            <div class="page-title">
                <div class="container">
                    <h1 class="entry-title">Liên hệ với chúng tôi</h1>
                </div>
            </div>
        </div>
        <section id="content">
            <div class="section container">
                <div class="row">
                    <div class="col-sm-6 box">
                    <div class="lienhe_ct">
                <form id="_frm_contact" name="frm_contact" class="frm f-space20" method="post" onsubmit="return sendMail('send_contact', '_frm_contact');">
                    <input type="hidden" name="lang" value="vi">
                    <div class="form_nho">
                        <div class="box_group_from">
                            <input type="text" name="name" placeholder="Tên Người Đặt" required="">
                        </div>
                        <div class="box_group_from">
                            <input type="email" name="email" placeholder="Email" required="">
                        </div>
                        <div class="box_group_from">
                            <input type="" name="phone" placeholder="Số Điện Thoại" required="">
                        </div>
                    </div>
                    <div class="form_nho">
                        <textarea name="content" placeholder="Nội Dung" cols="60" rows="5" required=""></textarea>
                    </div>

                    <div class="button_ok">
                        <input type="submit" class="send_mail" id="_send_contact" name="send_contact" value="Gửi">
<!--                        <button type="submit" class="send_mail" id="_send_contact" name="send_contact">--><!-- <img src="/images/xt.svg"> </button>-->
                    </div>
                </form>

            </div>
                    </div>
                    <div class="col-sm-6">
                        <ul class="contact-address style1">                               
                               @foreach($contact as $key => $cont)     
                                <div class="colum">    
                                    <div class="col-md-12">
                                        <h4>Thông tin liên hệ</h4>
                                        {!!$cont -> info_contact!!}
                                        {!!$cont -> info_fanpage!!}
                                        <!-- {!!$cont -> info_logo!!} -->

                                    </div>
                                    
                                </div>
                            @endforeach
                            
                            
                        </ul>
                    </div>
                    <div class="col-sm-12">
                                        <h4>Bản đồ</h4>
                                        {!!$cont -> info_map!!}   
                                    </div>
                </div>
            </div>
        </section>
@endsection