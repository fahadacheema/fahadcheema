@extends('layout.app')

@section('content')
    <div class="section big-70-height over-hide" style="background: url({{asset('img/manzil-main.jpeg')}}) no-repeat; background-size:contain; background-attachment: fixed;">
        <div class="overlay"></div>
        <div class="hero-center-wrap over big z-bigger">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 parallax-fade-top">
                        <p class="text-center">Web Design, UX Design</p>
                        <h2 class="text-center" style="color:white;">Manzil Home Automation</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section padding-bottom">
        <div class="container">
            <div class="row">
                <div class="offset-md-3 padding-top-bottom col-md-6">
                    <div class="img-wrap">
                        <img src="{{asset('img/manzil.png')}}" alt="">
                    </div>
                </div>
                <div class="offset-md-2 col-md-8 padding-bottom" data-scroll-reveal="enter bottom move 30px over 0.5s after 0.2s">
                    <div class="project-text-wrapper">
                        <h4>Project Overview</h4>
                        <p>Almost every electrical device and system in your home can be automated, managed via a smart device (Mobile Phones) or DLP panel, centralized or autonomous control has never been so easy. This provides you with improved convenience, comfort, and energy efficiency. Think of MANZIL home automation system as a unseen housekeeper, who’s always there to give you a helping hand in a secure and reliable way.</p>
                        <p>The idea behind this project was to take a different approach to web design so for that instead of following the norms of website I made this entire website in a single Revolution Slider giving user as much interactivity as needed to make their experience better. It was something different than what I had already done before and turned out to be quite fruitful.</p>
                    </div>
                    <div class="contact-info mt-5 text-center">
                        <a href="http://manzil.com.pk/" target="_blank" class="js-tilt" data-tilt-perspective="300" data-tilt-speed="700" data-tilt-max="24"><span>See It Live</span></a>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="project-nav-wrap">
                        <a href="{{url('project/index')}}"><div class="left-nav" data-scroll-reveal="enter left move 60px over 0.9s after 0.1s">prev<div class="text-on-hover">Index Design Society</div></div></a>
                        <a href="{{url('project/chatbot')}}"><div class="right-nav" data-scroll-reveal="enter right move 60px over 0.9s after 0.1s">next<div class="text-on-hover">Chatbot</div></div></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection