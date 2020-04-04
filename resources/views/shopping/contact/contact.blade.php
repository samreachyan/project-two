@extends('shopping.master.master')
@section('title', 'Contact - Man Woman Clothes')


@section('content')
    <!-- Begin Li's Breadcrumb Area -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="breadcrumb-content">
                <ul>
                    <li><a href="/index.html">Home</a></li>
                    <li class="active">Contact</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Li's Breadcrumb Area End Here -->     
    <!-- Begin Contact Main Page Area -->
    
    <div class="contact-main-page mt-60 mb-40 mb-md-40 mb-sm-40 mb-xs-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 offset-lg-1 col-md-12 order-1 order-lg-2">
                    <div class="contact-page-side-content">
                        <h3 class="contact-page-title">Contact Us</h3>
                        <p class="contact-page-message mb-25">Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in most web projects.</p>
                        <div class="single-contact-block">
                            <h4><i class="fa fa-fax"></i> Address</h4>
                            <p>103 đường Yersin (Số cũ là: 148), P. Phú Cường, Tp. Thủ Dầu Một, Bình Dương, Vietnam.</p>
                        </div>
                        <div class="single-contact-block">
                            <h4><i class="fa fa-phone"></i> Phone</h4>
                            <p>Mobile: (+84) 38612 68 62</p>
                            <p>Hotline: 096 360 14 11</p>
                        </div>
                        <div class="single-contact-block last-child">
                            <h4><i class="fa fa-envelope-o"></i> Email</h4>
                            <p>samreachyan@gmail.com</p>
                            <p>info@domain.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 order-2 order-lg-1">
                    <div class="contact-form-content pt-sm-55 pt-xs-55">
                        
                        @if (session('thongbao'))
                        <div class="row">
                            <div class="col-md-12 col-12">
                                <div class="alert alert-danger">
                                    {{ session('thongbao') }}
                                </div>
                            </div>
                        </div>
                        @endif

                        <h3 class="contact-page-title">Tell Us Your Message</h3>
                        <div class="contact-form">
                            <form  id="contact-form" action="/contact.html" method="post">
                                @csrf
                                <div class="form-group">
                                    <label>Your Name <span class="required">*</span></label>
                                    <input type="text" name="customerName" id="customername" required>
                                </div>
                                <div class="form-group">
                                    <label>Your Email <span class="required">*</span></label>
                                    <input type="email" name="customerEmail" id="customerEmail" required>
                                </div>
                                <div class="form-group">
                                    <label>Subject</label>
                                    <input type="text" name="contactSubject" id="contactSubject">
                                </div>
                                <div class="form-group mb-30">
                                    <label>Your Message</label>
                                    <textarea name="contactMessage" id="contactMessage" ></textarea>
                                </div>
                                <div class="form-group">
                                    <button type="submit" value="submit" id="submit" class="li-btn-3" name="submit">send</button>
                                </div>
                            </form>
                        </div>
                        <p class="form-messege"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection