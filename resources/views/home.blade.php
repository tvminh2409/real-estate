@extends('layouts.default')
@section('content')
    <!-- start banner  -->
    <section class="banner-area relative" id="home">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="banner-gradient1 logo-pc">
                <a href="/">
                    <img src="{{asset('img/logo.png')}}" alt="" title="" style="height: 120px"/>
                </a>
            </div>
            <div class="row fullscreen d-flex align-items-center justify-content-center">
                <div class="banner-content col-lg-8" data-aos="fade-up">
                    <div id="logo" class="logo-mobile">
                        <a href="/">
                            <img src="{{asset('img/logo.png')}}" alt="" title="" style="height: 250px"/>
                        </a>
                    </div>
                    <h1 class="text-white">
                        <span style="color: rgb(255,215,0); font-size: 100px">YGM</span> Group
                    </h1>
                    <p class="pt-20 pb-20 text-white banner-text-content">
                        Nơi niềm tin tạo dựng
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- End banner  -->
    <!-- Start upcoming-event  -->
    <section class="upcoming-event-area section-gap" id="events" data-aos="fade-down">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-60 col-lg-10">
                    <div class="title text-center">
                        <h1 class="mb-10">{{ __('frontend.home.comming_up_event') }}</h1>
                        <p>Cuộc sống đem lại rất nhiều điều kì diệu, hãy tận hưởng và khám phá!</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 event-left">
                    <div class="single-events" data-aos="fade-right">
                        <img class="img-fluid" src="{{ asset('img/u1.jpg') }}" alt=""style="width: 530px">
                        <a href="#"><h4>Sunshine Wonder Villas</h4></a>
                        <h6><span>24/10/2018</span> tại Hà Nội</h6>
                        <p>
                            Sunshine Wonder Villas với view sân golf thoáng đãng, nội thất độc bản xa xỷ, hệ thống giao
                            thông ngầm hiện đại, tiện ích trường học hoàng gia...
                        </p>
                        <a href="#" class="primary-btn text-uppercase">Thông tin chi tiết</a>
                    </div>
                    <div class="single-events" data-aos="fade-right">
                        <img class="img-fluid" src="{{ asset('img/u3.jpg') }}" alt=""style="width: 530px">
                        <a href="#"><h4>Sunshine Wonder Villas</h4></a>
                        <h6><span>24/10/2018</span> tại Hà Nội</h6>
                        <p>
                            Sunshine Wonder Villas với view sân golf thoáng đãng, nội thất độc bản xa xỷ, hệ thống giao
                            thông ngầm hiện đại, tiện ích trường học hoàng gia...
                        </p>
                        <a href="#" class="primary-btn text-uppercase">Thông tin chi tiết</a>
                    </div>
                </div>
                <div class="col-lg-6 event-right">
                    <div class="single-events" data-aos="fade-left">
                        <a href="#"><h4>Sunshine Wonder Villas</h4></a>
                        <h6><span>24/10/2018</span> tại Hà Nội</h6>
                        <p>
                            Sunshine Wonder Villas với view sân golf thoáng đãng, nội thất độc bản xa xỷ, hệ thống giao
                            thông ngầm hiện đại, tiện ích trường học hoàng gia...
                        </p>
                        <a href="#" class="primary-btn text-uppercase">Thông tin chi tiết</a>
                        <img class="img-fluid" src="{{ asset('img/u2.jpg') }}" alt=""style="width: 530px">
                    </div>
                    <div class="single-events" data-aos="fade-left">
                        <a href="#"><h4>Sunshine Wonder Villas</h4></a>
                        <h6><span>24/10/2018</span> tại Hà Nội</h6>
                        <p>
                            Sunshine Wonder Villas với view sân golf thoáng đãng, nội thất độc bản xa xỷ, hệ thống giao
                            thông ngầm hiện đại, tiện ích trường học hoàng gia...
                        </p>
                        <a href="#" class="primary-btn text-uppercase">Thông tin chi tiết</a>
                        <img class="img-fluid" src="{{ asset('img/u4.jpg') }}" alt=""style="width: 530px">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End upcoming-event  -->
    <section class="blog-area section-gap" id="blog" data-aos="fade-down">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-70 col-lg-8">
                    <div class="title text-center">
                        <h1 class="mb-10">Blog YGM</h1>
                        <p>Sunshine Wonder Villas với view sân golf thoáng đãng, nội thất độc bản xa xỷ, hệ thống giao thông ngầm hiện đại, tiện ích trường học hoàng gia.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 single-blog" data-aos="fade-up">
                    <div class="thumb">
                        <img class="img-fluid" src="img/g8.jpg" alt="">
                    </div>
                    <p class="date">Tháng 10 18</p>
                    <a href="#">
                        <h4>Tiêu đề blog Tiêu đề blog Tiêu đề blog </h4>
                    </a>
                    <p>
                        nội dung blog tóm tắt nội dung blog tóm tắt nội dung blog tóm tắt nội dung blog tóm tắt
                    </p>
                    <div class="meta-bottom d-flex justify-content-between">
                        <p><span class="lnr lnr-heart"></span> 15 Likes</p>
                        <p><span class="lnr lnr-bubble"></span> 02 Bình luận</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 single-blog" data-aos="fade-up">
                    <div class="thumb">
                        <img class="img-fluid" src="img/g8.jpg" alt="">
                    </div>
                    <p class="date">Tháng 10 18</p>
                    <a href="#">
                        <h4>Tiêu đề blog Tiêu đề blog Tiêu đề blog </h4>
                    </a>
                    <p>
                        nội dung blog tóm tắt nội dung blog tóm tắt nội dung blog tóm tắt nội dung blog tóm tắt
                    </p>
                    <div class="meta-bottom d-flex justify-content-between">
                        <p><span class="lnr lnr-heart"></span> 15 Likes</p>
                        <p><span class="lnr lnr-bubble"></span> 02 Bình luận</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 single-blog" data-aos="fade-up">
                    <div class="thumb">
                        <img class="img-fluid" src="img/g8.jpg" alt="">
                    </div>
                    <p class="date">Tháng 10 18</p>
                    <a href="#">
                        <h4>Tiêu đề blog Tiêu đề blog Tiêu đề blog </h4>
                    </a>
                    <p>
                        nội dung blog tóm tắt nội dung blog tóm tắt nội dung blog tóm tắt nội dung blog tóm tắt
                    </p>
                    <div class="meta-bottom d-flex justify-content-between">
                        <p><span class="lnr lnr-heart"></span> 15 Likes</p>
                        <p><span class="lnr lnr-bubble"></span> 02 Bình luận</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 single-blog" data-aos="fade-up">
                    <div class="thumb">
                        <img class="img-fluid" src="img/g8.jpg" alt="">
                    </div>
                    <p class="date">Tháng 10 18</p>
                    <a href="#">
                        <h4>Tiêu đề blog Tiêu đề blog Tiêu đề blog </h4>
                    </a>
                    <p>
                        nội dung blog tóm tắt nội dung blog tóm tắt nội dung blog tóm tắt nội dung blog tóm tắt
                    </p>
                    <div class="meta-bottom d-flex justify-content-between">
                        <p><span class="lnr lnr-heart"></span> 15 Likes</p>
                        <p><span class="lnr lnr-bubble"></span> 02 Bình luận</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Start exibition Area -->
    <section class="exibition-area section-gap" id="exhibitions">
        <div class="container">
            <div class="row d-flex justify-content-center" data-aos="zoom-in">
                <div class="menu-content pb-60 col-lg-10">
                    <div class="title text-center">
                        <h1 class="mb-10">Về nhân sự của chúng tôi</h1>
                        <p>Những người đã xây dựng lên YGM thành công hôm nay.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="active-exibition-carusel text-center">
                    <div class="single-exibition item">
                        <img src="https://via.placeholder.com/360x360.png?text=%E1%BA%A3nh%20ch%C3%A2n%20dung%20demo" class="rounded-circle" alt="">
                        <ul class="tags"></ul>
                        <a href="#"><h4>HOÀNG QUỐC GIA</h4></a>
                        <p>
                            CHỦ TỊCH HỘI ĐỒNG QUẢNG TRỊ KIÊM TGĐ ĐIỀU HÀNH
                        </p>
                        <h6 class="date">CEO</h6>
                    </div>

                    <div class="single-exibition item">
                        <img src="{{ asset('img/pepple/nguyen_hong_phong.jpg') }}" class="rounded-circle" alt="">
                        <ul class="tags"></ul>
                        <a href="#"><h4>NGUYỄN HỒNG PHONG</h4></a>
                        <p>
                            GIÁM ĐỐC DỰ ÁN- SÀN THƯƠNG MẠI VS SHOPHOUSE
                        </p>
                        <h6 class="date">0967185335</h6>
                    </div>

                    <div class="single-exibition item">
                        <img src="{{ asset('img/pepple/lien.jpg') }}" class="rounded-circle" alt="">
                        <ul class="tags"></ul>
                        <a href="#"><h4>NGUYỄN KIM LIÊN</h4></a>
                        <p>
                            GIÁM ĐỐC DỰ ÁN - BĐS NGHỈ DƯỠNG VS CONDOTEL
                        </p>
                        <h6 class="date">0961331696</h6>
                    </div>
                    <div class="single-exibition item">
                        <img src="{{ asset('img/pepple/truong_xuan_vu.jpg') }}" class="rounded-circle" alt="">
                        <ul class="tags"></ul>
                        <a href="#"><h4>TRƯƠNG XUÂN VŨ</h4></a>
                        <p>
                            GIÁM ĐỐC DỰ ÁN - BĐS NGHỈ DƯỠNG VS CONDOTEL
                        </p>
                        <h6 class="date">0936123169</h6>
                    </div>

                    <div class="single-exibition item">
                        <img src="https://via.placeholder.com/360x360.png?text=%E1%BA%A3nh%20ch%C3%A2n%20dung%20demo" class="rounded-circle" alt="">
                        <ul class="tags"></ul>
                        <a href="#"><h4>TRẦN THỊ HỒI</h4></a>
                        <p>
                            GIÁM ĐỐC HÀNH CHÍNH NHÂN SỰ
                        </p>
                        <h6 class="date">0382529984</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End exibition Area -->
@endsection
