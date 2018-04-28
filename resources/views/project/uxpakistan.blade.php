@extends('layout.app')

@section('content')
    <div class="section big-70-height over-hide" style="background: url({{asset('img/uxpakistan-main.jpeg')}}) no-repeat; background-size:contain; background-attachment: fixed;">
        <div class="overlay"></div>
        <div class="hero-center-wrap over big z-bigger">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 parallax-fade-top">
                        <p class="text-center">Web Design</p>
                        <h2 class="text-center" style="color:white;">UX Pakistan</h2>
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
                        <img src="{{asset('img/uxpakistan.png')}}" alt="">
                    </div>
                </div>
                <div class="offset-md-2 col-md-8 padding-bottom" data-scroll-reveal="enter bottom move 30px over 0.5s after 0.2s">
                    <div class="project-text-wrapper">
                        <h4>Project Overview</h4>
                        <p>User Experience (UX) conference is the stairway to learning about design, it is where design professionals from all around the world gather to share ideas, hone new skills and inspire the community. The UX Pakistan conference is the first of its kind to be held in Pakistan and is all about sharing and promoting the knowledge in the UX/UI fields.</p>
                        <p>The objective is to design holistic user experiences, teach the latest UX trends and technologies and inspire UXers to create seamless experiences. It will help bridge the gap between industry and academic researchers. The conference will include participants from all fields including designers, UX researchers, usability specialists, business analysts, product managers, and market researchers etc.The conference isn’t just about the presentations, but about meeting up, networking and spending time talking to each other.</p>
                    </div>
                    <div class="contact-info mt-5 text-center">
                        <a href="https://www.uxpakistan.com/2017/" target="_blank" class="js-tilt" data-tilt-perspective="300" data-tilt-speed="700" data-tilt-max="24"><span>See It Live</span></a>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="project-nav-wrap">
                        <a href="{{url('project/nda')}}"><div class="left-nav" data-scroll-reveal="enter left move 60px over 0.9s after 0.1s">prev<div class="text-on-hover">National Design Awards</div></div></a>
                        <a href="{{url('project/index')}}"><div class="right-nav" data-scroll-reveal="enter right move 60px over 0.9s after 0.1s">next<div class="text-on-hover">Index Design Society</div></div></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection