@extends('layout.app')

@section('content')
    <div class="section big-70-height over-hide" style="background: url({{asset('img/chatbot-main.jpeg')}}) no-repeat; background-size:contain; background-attachment: fixed;">
        <div class="overlay"></div>
        <div class="hero-center-wrap over big z-bigger">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 parallax-fade-top">
                        <p class="text-center">Web Design</p>
                        <h2 class="text-center" style="color:white;">Chatbot</h2>
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
                        <img src="{{asset('img/chatbot.png')}}" alt="">
                    </div>
                </div>
                <div class="offset-md-2 col-md-8 padding-bottom" data-scroll-reveal="enter bottom move 30px over 0.5s after 0.2s">
                    <div class="project-text-wrapper">
                        <h4>Project Overview</h4>
                        <p>Chatbot is a product of Acrologix Pvt Ltd where they build order based chatbots for different companies to make their customer service better. For this the website had to be something that could not only give user an idea of the product but also teach them as to how a chatbot generally works so for that I had to use different illustrations as to how the architecture of a chatbot is designed. To make the experience of the site even better I embedded an already built chatbot on the website for the users to interact with making it a more personal experience for the user.</p>
                    </div>
                    <div class="contact-info mt-5 text-center">
                        <a href="http://chatbot.pk/" target="_blank" class="js-tilt" data-tilt-perspective="300" data-tilt-speed="700" data-tilt-max="24"><span>See It Live</span></a>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="project-nav-wrap">
                        <a href="{{url('project/manzil')}}"><div class="left-nav" data-scroll-reveal="enter left move 60px over 0.9s after 0.1s">prev<div class="text-on-hover">Manzil Home Automation</div></div></a>
                        <a href="{{url('project/onthedot')}}"><div class="right-nav" data-scroll-reveal="enter right move 60px over 0.9s after 0.1s">next<div class="text-on-hover">OntheDot</div></div></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection