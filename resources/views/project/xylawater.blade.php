@extends('layout.app')

@section('content')
    <div class="section big-70-height over-hide" style="background: url({{asset('img/xylawater-main.jpeg')}}) no-repeat; background-size:contain; background-attachment: fixed;">
        <div class="overlay"></div>
        <div class="hero-center-wrap over big z-bigger">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 parallax-fade-top">
                        <p class="text-center">Web Design</p>
                        <h2 class="text-center" style="color:white;">Xyla Water</h2>
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
                        <p>Xyla Water is a social impact startup that focuses on the UN SDG number 6: Clean Water and Sanitation. Our Startup aims at defying the affordability challenge, by providing clean drinking water to the underprivileged masses, using a cheap, biodegradable xylem water filter. Founded in June 2017, Xyla Water is commercializing filters based on research from scientists at the Massachusetts Institute of Technology. The filter can clean enough water for a family of seven, for under $10 per year. Let that, sink in…</p>
                    </div>
                    <div class="contact-info mt-5 text-center">
                        <a href="http://xylawater.com/" target="_blank" class="js-tilt" data-tilt-perspective="300" data-tilt-speed="700" data-tilt-max="24"><span>See It Live</span></a>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="project-nav-wrap">
                        <a href="{{url('project/onthedot')}}"><div class="left-nav" data-scroll-reveal="enter left move 60px over 0.9s after 0.1s">prev<div class="text-on-hover">OntheDot</div></div></a>
                        <a href="{{url('project/nda')}}"><div class="right-nav" data-scroll-reveal="enter right move 60px over 0.9s after 0.1s">next<div class="text-on-hover">National Design Awards</div></div></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection