@extends('layouts.master')

@section('title', 'Liên Hệ')

@section('content')

  <section class="bread-crumb">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('home_page') }}">{{ __('header.Home') }}</a></li>
        <li class="breadcrumb-item active" aria-current="page">Liên Hệ</li>
      </ol>
    </nav>
  </section>

  <div class="site-about">
    <section class="section-advertise">
      <div class="content-advertise">
        <div id="slide-advertise" class="owl-carousel">
          @foreach($advertises as $advertise)
            <div class="slide-advertise-inner" style="background-image: url('{{ Helper::get_image_advertise_url($advertise->image) }}');" data-dot="<button>{{ $advertise->title }}</button>"></div>
          @endforeach
        </div>
      </div>
    </section>

    <section class="section-about">
      <div class="section-header">
        <h2 class="section-title">Liên Hệ</h2>
      </div>
      <div class="section-content">
        <div class="row">
          <div class="col-md-9">
            <div class="content-left">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.6961996206724!2d105.84315191424488!3d21.004811693972957!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac76ccab6dd7%3A0x55e92a5b07a97d03!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBCw6FjaCBraG9hIEjDoCBO4buZaQ!5e0!3m2!1svi!2s!4v1574419711202!5m2!1svi!2s" width="800" height="400" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>
           <!-- Validate email -->
           <div class="email_text">
           <h1>Vui lòng liện hệ:</h1> 
           <form name="contactForm" ng-submit="submitContactForm()" action="{{route('contact.sendMailContactForm')}}" method="POST" >
           {{ csrf_field() }}
                    <h4 class="mtext-105 cl2 txt-center p-b-30">
                        Gởi lời nhắn cho PhonsStore
                    </h4>

                  
                       
          
                                        <div class="alert alert-success" ng-show="contactForm.$valid">
                                            Thông tin hợp lệ, vui lòng bấm nút <b>"Gởi lời nhắn"</b> để gởi mail đến Quản trị trang web<br />
                                            Xin chân thành cám ơn các đóng góp, ý kiến, thắc mắc của Quý Khách hàng.
                                        </div>

                                        <!-- Validate email -->
                                        <div class="bor8 m-b-20 how-pos4-parent">
                                            <input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="email" placeholder="Email của bạn" ng-model="email" ng-pattern="/^.+@gmail.com$/" ng-required=true>
                                            <span class="valid" ng-show="userInfo.email.$valid">Hợp lệ</span>
                                            <img class="how-pos4 pointer-none" src="{{ asset('themes/cozastore/images/icons/icon-email.png') }}" alt="ICON">
                                        </div>

                                        <!-- Validate lời nhắm -->
                                        <div class="bor8 m-b-30">
                                            <textarea class="stext-111 cl2 plh3 size-120 p-lr-28 p-tb-25" name="message" placeholder="Bạn cần chúng tôi giúp đỡ về vấn đề gì?" ng-model="message" ng-minlength="6" ng-maxlength="250" ng-required=true></textarea>
                                        </div>

                                        <!-- Nút submit form -->
                                        <button type="submit" class="flex-c-m stext-101 cl0 size-121 bg3 bor1 hov-btn3 p-lr-15 trans-04 pointer" ng-disabled="contactForm.$invalid">
                                            Gởi lời nhắn
                                        </button>
                </form>
           </div>

                                          
          </div>
          <div class="col-md-3">
            <div class="content-right">
              <div class="online_support">
                <h2 class="title">CHÚNG TÔI LUÔN SẴN SÀNG<br>ĐỂ GIÚP ĐỠ BẠN</h2>
                <img src="{{ asset('images/support_online.jpg') }}">
                <h3 class="sub_title">Để được hỗ trợ tốt nhất. Hãy gọi</h3>
                <div class="phone">
                  <a href="tel:18006750" title="1800 6750">1800 6750</a>
                </div>
                <div class="or"><span>HOẶC</span></div>
                <h3 class="title">Chat hỗ trợ trực tuyến</h3>
                <h3 class="sub_title">Chúng tôi luôn trực tuyến 24/7.</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  </div>

@endsection

@section('css')
  <style>
    .slide-advertise-inner {
      background-repeat: no-repeat;
      background-size: cover;
      padding-top: 21.25%;
    }
    #slide-advertise.owl-carousel .owl-item.active {
      -webkit-animation-name: zoomIn;
      animation-name: zoomIn;
      -webkit-animation-duration: .6s;
      animation-duration: .6s;
    }
  </style>
@endsection

@section('js')
  <script>
    $(document).ready(function(){

      $("#slide-advertise").owlCarousel({
        items: 2,
        autoplay: true,
        loop: true,
        margin: 10,
        autoplayHoverPause: true,
        nav: true,
        dots: false,
        responsive:{
          0:{
            items: 1,
          },
          992:{
            items: 2,
            animateOut: 'zoomInRight',
            animateIn: 'zoomOutLeft',
          }
        },
        navText: ['<i class="fas fa-angle-left"></i>', '<i class="fas fa-angle-right"></i>']
      });
    });
  </script>
@endsection

