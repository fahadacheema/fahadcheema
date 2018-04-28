@extends('layout.app')

@section('content')
    <div class="section big-85-height over-hide" style="background: url({{asset('img/home-main.gif')}}) no-repeat; background-attachment: fixed; background-size: cover;">
        <div class="overlay"></div>
        <div class="hero-center-wrap z-bigger">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 parallax-fade-top">
                        <p>Fahad Cheema</p>
                        <h2 style="color: #fff;">UI/UX Designer & Web Developer</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 img-slice-wrap mt-5 pb-5 over-hide">
                    <a class="parallax-elements js-tilt" href="{{url('project/nda')}}" data-tilt-perspective="800" data-tilt-speed="700" data-tilt-max="10">
                        <div class="scroll-img" style="background-image: url(img/nda.png);"></div>
                        <div class="project-name z-bigger" data-scroll-reveal="enter right move 80px over 0.8s after 0.2s">NDA Pakistan<span></span></div>
                        <div class="project-type z-bigger" data-scroll-reveal="enter right move 80px over 0.8s after 0.6s"><span>Web Design, UX Design</span></div>
                    </a>
                </div>
                <div class="section clearfix"></div>
                <div class="offset-md-3 col-md-6 img-slice-wrap pt-5 pb-5 over-hide">
                    <a class="parallax-elements js-tilt" href="{{url('project/uxpakistan')}}" data-tilt-perspective="800" data-tilt-speed="700" data-tilt-max="10">
                        <div class="scroll-img" style="background-image: url(img/uxpakistan.png);"></div>
                        <div class="project-name" data-scroll-reveal="enter right move 80px over 0.8s after 0.2s">UX Pakistan<span></span></div>
                        <div class="project-type z-bigger" data-scroll-reveal="enter right move 80px over 0.8s after 0.6s"><span>Web Design</span></div>
                    </a>
                </div>
                <div class="section clearfix"></div>
                <div class="offset-md-6 col-md-6 img-slice-wrap pt-5 pb-5 over-hide">
                    <a class="parallax-elements js-tilt" href="{{url('project/index')}}" data-tilt-perspective="800" data-tilt-speed="700" data-tilt-max="10">
                        <div class="scroll-img" style="background-image: url(img/index.png);"></div>
                        <div class="project-name" data-scroll-reveal="enter right move 80px over 0.8s after 0.2s">Index<span></span></div>
                        <div class="project-type z-bigger" data-scroll-reveal="enter right move 80px over 0.8s after 0.6s"><span>Web Design</span></div>
                    </a>
                </div>
                <div class="offset-md-3 col-md-6 img-slice-wrap pt-5 pb-5 over-hide">
                    <a class="parallax-elements js-tilt" href="{{url('project/manzil')}}" data-tilt-perspective="800" data-tilt-speed="700" data-tilt-max="10">
                        <div class="scroll-img" style="background-image: url(img/manzil.png);"></div>
                        <div class="project-name" data-scroll-reveal="enter right move 80px over 0.8s after 0.2s">Manzil<span></span></div>
                        <div class="project-type z-bigger" data-scroll-reveal="enter right move 80px over 0.8s after 0.6s"><span>Web Design, UX Design</span></div>
                    </a>
                </div>
                <div class="section clearfix"></div>
                <div class="col-md-6 img-slice-wrap pt-5 pb-5 over-hide">
                    <a class="parallax-elements js-tilt" href="{{url('project/chatbot')}}" data-tilt-perspective="800" data-tilt-speed="700" data-tilt-max="10">
                        <div class="scroll-img" style="background-image: url(img/chatbot.png);"></div>
                        <div class="project-name" data-scroll-reveal="enter right move 80px over 0.8s after 0.2s">Chatbot<span></span></div>
                        <div class="project-type z-bigger" data-scroll-reveal="enter right move 80px over 0.8s after 0.6s"><span>Web Design</span></div>
                    </a>
                </div>
                <div class="section clearfix"></div>
                <div class="offset-md-3 col-md-6 img-slice-wrap pt-5 pb-5 over-hide">
                    <a class="parallax-elements js-tilt" href="{{url('project/onthedot')}}" data-tilt-perspective="800" data-tilt-speed="700" data-tilt-max="10">
                        <div class="scroll-img" style="background-image: url(img/onthedot.png);"></div>
                        <div class="project-name" data-scroll-reveal="enter right move 80px over 0.8s after 0.2s">OntheDot<span></span></div>
                        <div class="project-type z-bigger" data-scroll-reveal="enter right move 80px over 0.8s after 0.6s"><span>Branding, Web Design, UX Design</span></div>
                    </a>
                </div>
                <div class="section clearfix"></div>
                <div class="offset-md-6 col-md-6 img-slice-wrap pt-5 pb-5 over-hide">
                    <a class="parallax-elements js-tilt" href="{{url('project/xylawater')}}" data-tilt-perspective="800" data-tilt-speed="700" data-tilt-max="10">
                        <div class="scroll-img" style="background-image: url(img/xylawater.png);"></div>
                        <div class="project-name" data-scroll-reveal="enter right move 80px over 0.8s after 0.2s">Xyla Water<span></span></div>
                        <div class="project-type z-bigger" data-scroll-reveal="enter right move 80px over 0.8s after 0.6s"><span>Web Design</span></div>
                    </a>
                </div>
                <div class="section clearfix"></div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        $(document).ready(function () {
            $('.scroll-img.uncover').css('background', 'none');
        });
    </script>
@endsection