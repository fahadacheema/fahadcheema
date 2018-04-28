@extends('layout.app')

@section('content')
    <div class="section big-70-height over-hide" style="background: url({{asset('img/onthedot-main.jpeg')}}) no-repeat; background-size:contain; background-attachment: fixed;">
        <div class="overlay"></div>
        <div class="hero-center-wrap over big z-bigger">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 parallax-fade-top">
                        <p class="text-center">Branding, Web Design, UX Design</p>
                        <h2 class="text-center" style="color:white;">OntheDot</h2>
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
                        <img src="{{asset('img/onthedot.png')}}" alt="">
                    </div>
                </div>
                <div class="offset-md-2 col-md-8 padding-bottom" data-scroll-reveal="enter bottom move 30px over 0.5s after 0.2s">
                    <div class="project-text-wrapper">
                        <h4>Project Overview</h4>
                        <p>OntheDot is a product developed by me as my senior year project. The idea was to develop an institution based platform where the instructors and the students can easily schedule meetings with one another by selecting the free slots in their weekly schedule. This would auotomate the whole meeting scheduling process and make it easier for the user to keep track of their meetings and also schedule it as they will be able to see a tentative weekly schedule of the user they want to schedule a meeting with and based on that select a free slot available. Through this meeting scheduling could be done in minutes rather than days. Not only that we also implemented a group scheduling feature through which the user is able to schedule meetings with multiple users at once which was an optimal solution when it came to group projects.</p>
                    </div>
                    <div class="contact-info mt-5 text-center">
                        <a href="https://onthedot.herokuapp.com/" target="_blank" class="js-tilt" data-tilt-perspective="300" data-tilt-speed="700" data-tilt-max="24"><span>See It Live</span></a>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="project-nav-wrap">
                        <a href="{{url('project/chatbot')}}"><div class="left-nav" data-scroll-reveal="enter left move 60px over 0.9s after 0.1s">prev<div class="text-on-hover">Chatbot</div></div></a>
                        <a href="{{url('project/xylawater')}}"><div class="right-nav" data-scroll-reveal="enter right move 60px over 0.9s after 0.1s">next<div class="text-on-hover">Xyla Water</div></div></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection