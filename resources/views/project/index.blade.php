@extends('layout.app')

@section('content')
    <div class="section big-70-height over-hide" style="background: url({{asset('img/index-main.jpeg')}}) no-repeat; background-size:contain; background-attachment: fixed;">
        <div class="overlay"></div>
        <div class="hero-center-wrap over big z-bigger">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 parallax-fade-top">
                        <p class="text-center">Web Design</p>
                        <h2 class="text-center" style="color:white;">Index Design Society</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section padding-bottom">
        <div class="container">
            <div class="row">
                <div class="offset-md-2 col-md-8 padding-top-bottom" data-scroll-reveal="enter bottom move 30px over 0.5s after 0.2s">
                    <div class="project-text-wrapper">
                        <h4>Project Overview</h4>
                        <p>INDEX: The Design and Innovation Society at LUMS is here to pave the way for savoir-faire user experience through design and innovation. The agenda is to make the community more prone to thinking from a design perspective and helping them realise the proper approach to good design. The society plans to organize fun-filled events designed to help everyone, be it a scientist, an economist, an artist or even a sociologist to bring out their inner designer. You don’t have to be a called a designer to recognize and appreciate good aspects of design. It’s all about problem solving!</p>
                    </div>
                    <div class="contact-info mt-5 text-center">
                        <a href="https://index.lums.edu.pk/" target="_blank" class="js-tilt" data-tilt-perspective="300" data-tilt-speed="700" data-tilt-max="24"><span>See It Live</span></a>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="project-nav-wrap">
                        <a href="{{url('project/uxpakistan')}}"><div class="left-nav" data-scroll-reveal="enter left move 60px over 0.9s after 0.1s">prev<div class="text-on-hover">UX Pakistan</div></div></a>
                        <a href="{{url('project/manzil')}}"><div class="right-nav" data-scroll-reveal="enter right move 60px over 0.9s after 0.1s">next<div class="text-on-hover">Manzil Home Automation</div></div></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection