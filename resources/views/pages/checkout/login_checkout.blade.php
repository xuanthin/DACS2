@extends('pages.details')
@section('details')
<div class="page-title-container">
            <div class="page-title">
                <div class="container">
                    <h1 class="entry-title">Tạo tài khoản</h1>
                </div>
            </div>
        </div>

        <section id="content">
            <div class="container">
                <div id="main">
                        <div class="row">
                            <div class="col-sm-6">
                                <h4>Đăng nhập</h4>
                                <form action="{{URL::to('/login-customers')}}" methos="POST">
                                {{ csrf_field() }}
                                <div class="box_group_from">
                                    <input type="text" name="email_account" class="shipping_address" placeholder="Email" required="">
                                </div>
                                <div class="box_group_from">
                                <input type="password" name="password_account" class="shipping_address" placeholder="Mật khẩu" required="">
                        </div>
                                    
                                        <div class="checkbox">
                                            <label><input type="checkbox">Nhớ mật khẩu?</label>
                                        
                                    </div>
                                    <div class="">
                                        <button type="submit" class="btn style1">Đăng nhập</button>
                                    </div>
                                </form>
                            </div>
                            <div class="col-sm-6">
                                <h4>Đăng ký</h4>
                                <form action="{{URL::to('/add-customers')}}" method="POST">
                                {{ csrf_field() }}
                                <div class="box_group_from">
                                    <input type="text" name="Email" class="shipping_address" placeholder="Họ và Tên" required="">
                                </div>
                                <div class="box_group_from">
                                    <input type="text" name="Email" class="shipping_address" placeholder="Số điện thoại" required="">
                                </div>
                                <div class="box_group_from">
                                    <input type="text" name="Email" class="shipping_address" placeholder="Email" required="">
                                </div>
                                <div class="box_group_from">
                                    <input type="text" name="Email" class="shipping_address" placeholder="Mật khẩu" required="">
                                </div>
                                    <!-- <div class="form-group">
                                        <input type="text" class="input-text full-width" placeholder="Nhập lại mật khẩu">
                                    </div> -->
                                    <div class="">
                                        <button type="submit" class="btn style1">Tạo tài khoản</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection