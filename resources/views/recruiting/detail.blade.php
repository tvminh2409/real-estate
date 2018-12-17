@extends('layouts.default')
@section('style')
    //
@endsection

@section('content')
    @include('partitions.banner', ['pageTitle' => $recruiting->title, 'routeName' => 'recruiting'])

    <section class="blog-posts-area section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 post-list blog-post-list">
                    <div class="single-post">
                        <img class="img-fluid" src="{{ Voyager::image($recruiting->thumbnail('medium')) }}" alt="">
                        <ul class="tags">
                            <li><a href="#">{{ $recruiting->tag }}</a></li>
                        </ul>
                        <a href="#">
                            <h1> {{ $recruiting->title }} </h1>
                        </a>
                        <div class="content-wrap">
                            {!! $recruiting->body !!}
                        </div>
                        <div class="bottom-meta">
                            <div class="user-details row align-items-center">
                                <div class="comment-wrap col-lg-6 col-sm-6">
                                    <ul>
                                        <li><a href="#"><span class="lnr lnr-heart"></span> 4 lượt thích</a></li>
                                        <li><a href="#"><span class="lnr lnr-bubble"></span> 06 Lượt bình luận</a></li>
                                    </ul>
                                </div>
                                <div class="social-wrap col-lg-6">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                    </ul>

                                </div>
                            </div>
                        </div>

                        <!-- Start commentform Area -->
                        <section class="commentform-area pt-80">
                            <div class="container">
                                <h5 class="pb-50">Viết bình luận</h5>
                                <div class="row flex-row d-flex">
                                    <div class="col-lg-4 col-md-6">
                                        <input name="name" placeholder="Enter your name" onfocus="this.placeholder = ''"
                                               onblur="this.placeholder = 'Nhập tên của bạn'"
                                               class="common-input mb-20 form-control" required="" type="text">
                                        <input name="email" placeholder="Enter your email"
                                               onfocus="this.placeholder = ''"
                                               onblur="this.placeholder = 'Nhập email của bạn'"
                                               class="common-input mb-20 form-control" required="" type="email">
                                        <input name="Subject" placeholder="Subject" onfocus="this.placeholder = ''"
                                               onblur="this.placeholder = 'Nhập tiêu đề bình luận'"
                                               class="common-input mb-20 form-control" required="" type="text">

                                    </div>
                                    <div class="col-lg-8 col-md-6">
                                        <textarea class="form-control mb-10" name="message" placeholder="Messege"
                                                  onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'"
                                                  required=""></textarea>
                                        <a class="primary-btn mt-20" href="#">Bình luận</a>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- End commentform Area -->
                    </div>
                </div>
                @include('partitions.sidebar')
            </div>
        </div>
    </section>
@endsection

@section('script')
    //
@endsection