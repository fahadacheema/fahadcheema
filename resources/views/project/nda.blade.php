@extends('layout.app')

@section('content')
    <div class="section big-70-height over-hide" style="background: url({{asset('img/nda-main.jpeg')}}) no-repeat; background-size:contain; background-attachment: fixed;">
        <div class="overlay"></div>
        <div class="hero-center-wrap over big z-bigger">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 parallax-fade-top">
                        <p class="text-center">Web Design, UX Design</p>
                        <h2 class="text-center" style="color:white;">National Design Awards Pakistan</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section padding-bottom">
        <div class="container">
            <div class="row">
                <div class="offset-md-3 padding-top-bottom-small col-md-6">
                    <div class="img-wrap">
                        <img src="{{asset('img/nda.png')}}" alt="">
                    </div>
                </div>
                <div class="offset-md-2 col-md-8 padding-bottom" data-scroll-reveal="enter bottom move 30px over 0.5s after 0.2s">
                    <div class="project-text-wrapper">
                        <h4>Project Overview</h4>
                        <p>The National Design Awards program aims to celebrate design as a vital humanistic tool in shaping the world, and seeks to increase national awareness of the impact of design by drawing national attention to the ways in which design enriches everyday life. The Awards are organized for the recognition of excellence, innovation, and enhancement of the quality of life. They were launched for the first time at the UXPakistan Conference in 2018 as an official project of UXPakistan in collaboration with the National Incubation Center.</p>
                        <p>Since the aim of the website was to get users a platform where they can submit their designs so in order to achieve that we decided to implemented an authentication system on the website so that each user is able to make an account and then fill in the submission form. The account also gives users a chance to keep track of their submissions made. This was the easy part but the tricky part was to implement a payment system so that users can pay for their submissions but we didn't want to make an online payment system because people here don't like giving in their credit card details so instead we gave users the option to select an offline mode of payment which was verified by urging users to upload a payment proof against their submission on the portal.</p>
                    </div>
                    <div class="contact-info mt-5 text-center">
                        <a href="https://www.ndapakistan.com/" target="_blank" class="js-tilt" data-tilt-perspective="300" data-tilt-speed="700" data-tilt-max="24"><span>See It Live</span></a>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="project-nav-wrap">
                        <a href="{{url('project/xylawater')}}"><div class="left-nav" data-scroll-reveal="enter left move 60px over 0.9s after 0.1s">prev<div class="text-on-hover">Xyla Water</div></div></a>
                        <a href="{{url('project/uxpakistan')}}"><div class="right-nav" data-scroll-reveal="enter right move 60px over 0.9s after 0.1s">next<div class="text-on-hover">UX Pakistan</div></div></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection