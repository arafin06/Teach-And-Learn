<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, maximum-scale=1">
    <title>Teach & Learn</title>
    <link rel="icon" href="{{asset('/')}}main/favicon.png" type="image/png">
    <link href="{{asset('/')}}main/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="{{asset('/')}}main/css/style.css" rel="stylesheet" type="text/css">
    <link href="{{asset('/')}}main/css/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="{{asset('/')}}main/css/animate.css" rel="stylesheet" type="text/css">

    <!--[if lt IE 9]>
    <script src="{{asset('/')}}main/js/respond-1.1.0.min.js"></script>
    <script src="{{asset('/')}}main/js/html5shiv.js"></script>
    <script src="{{asset('/')}}main/js/html5element.js"></script>
    <![endif]-->



</head>
<body>

<!--Header_section-->
<header id="header_wrapper">
    <div class="container">
        <div class="header_box">
            <div class="logo"><a href="{{route('/')}}"><img src="{{asset('/')}}main/img/logo.png" alt="logo"></a></div>
            <nav class="navbar navbar-inverse" role="navigation">

                <div id="main-nav" class="collapse navbar-collapse navStyle">
                    <ul class="nav navbar-nav" id="mainNav">
                        <li class="active"><a href="#hero_section" class="scroll-link">Home</a></li>
                        <li><a href="#aboutUs" class="scroll-link">About Us</a></li>
                        {{--<li><a href="#service" class="scroll-link">Services</a></li>--}}
                        <li><a href="#team" class="scroll-link">Team</a></li>
                        <li><a href="#contact" class="scroll-link">Contact</a></li>
                        <li class="hidden"><a href="{{route('profile')}}" class="scroll-link">main</a></li>
                        <button style="margin-top: 8px" type="button" class="btn btn-primary" data-toggle="modal" data-target="#signIn">
                            Sign in
                        </button>
                        <button style="margin-top: 8px" type="button" class="btn btn-primary" data-toggle="modal" data-target="#signUp">
                            Sign up
                        </button>
                    </ul>
                </div>
            </nav>
        </div>

        {{--modal sign in--}}
        <div class="modal" id="signIn">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h2 class="modal-title">Sign In</h2>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->

                    <div class="modal-body" style="margin: 15px">
                        <form class="form-horizontal" action="{{route('login-clint')}} " method="post">
                            @csrf

                            <div class="form-group">
                                <label style="color: #9d1e15">Email Address</label>
                                <div >
                                    <input type="text" name="email" class="form-control"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label style="color: #9d1e15">Password</label>
                                <div >
                                    <input type="password" name="password" class="form-control"/>
                                </div>
                            </div>


                            <div class="form-group">
                                <div >
                                    <input type="submit" name="btn" class="btn btn-success btn-block" value="Login"/>
                                </div>
                            </div>
                        </form>
                    </div>




                </div>
            </div>
        </div>


        {{--modal signup--}}
        <div class="modal" id="signUp">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h2 class="modal-title">Sign Up</h2>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body" style="margin: 15px">
                        <form class="form-horizontal" action="{{route('new-clint')}}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label style="color: #9d1e15">First Name</label>
                                <div >
                                    <input type="text" name="fname" class="form-control"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label style="color: #9d1e15">Last Name</label>
                                <div >
                                    <input type="text" name="lname" class="form-control"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label style="color: #9d1e15">Email Address</label>
                                <div >
                                    <input type="email" name="email" class="form-control"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label style="color: #9d1e15">Phone Number</label>
                                <div >
                                    <input type="text" name="mobile" class="form-control"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label style="color: #9d1e15">Skype ID</label>
                                <div >
                                    <input type="text" name="skyp" class="form-control"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label style="color: #9d1e15">Educational Background</label>
                                <div >
                                    <select class="form-control" name="educational_background">
                                        <option>--Select Background Name--</option>
                                        @foreach($subjects as $subject)
                                            <option value="{{$subject->id}}">{{$subject->subject_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label style="color: #9d1e15">Department</label>
                                <div >
                                    <select class="form-control" name="department">
                                        <option>--Select Department Name--</option>
                                        @foreach($departments as $department)
                                            <option value="{{$department->id}}">{{$department->department_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label style="color: #9d1e15">Profession</label>
                                <div >
                                    <input type="text" name="profession" class="form-control"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label style="color: #9d1e15">Institute</label>
                                <div >
                                    <input type="text" name="institute" class="form-control"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label style="color: #9d1e15">Profile Picture</label>
                                <div >
                                    <input type="file" name="profile_image" accept="image/*"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label style="color: #9d1e15">Password</label>
                                <div >
                                    <input type="password" name="password">

                                </div>
                            </div>




                            <div class="form-group">
                                <div >
                                    <input type="submit" name="btn" class="btn btn-success btn-block" value="Registration"/>
                                </div>
                            </div>
                        </form>
                    </div>



                </div>
            </div>
        </div>
        <h4 class="text-center"> @if($message=Session::get('message')) {{$message}} @endif</h4>
    </div>
</header>

<!--Header_section-->

<!--Hero_Section-->
<section id="hero_section" class="top_cont_outer">
    <div class="hero_wrapper">
        <div class="container">
            <div class="hero_section">
                <div class="row">
                    <div class="col-lg-5 col-sm-7">
                        <div class="top_left_cont zoomIn wow animated">
                            <h2>Learn <strong>Anything Anywhere</strong> Anytime</h2>
                            <p>Be a teacher at the same time a learner. <br> Learn whatever you dont know & teach what you know.</p>
                            <p></p>
                            <a href="#service" class="read_more2">Read more</a> </div>
                    </div>
                    <div class="col-lg-7 col-sm-5">
                        <img src="{{asset('/')}}main/img/main_device_image.png" class="zoomIn wow animated" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Hero_Section-->

<section id="aboutUs"><!--Aboutus-->
    <div class="inner_wrapper">
        <div class="container">
            <h2>About Us</h2>
            <div class="inner_section">
                <div class="row">
                    <div class=" col-lg-4 col-md-4 col-sm-4 col-xs-12 pull-right"><img src="{{asset('/')}}main/img/about-img.jpg" class="img-circle delay-03s animated wow zoomIn" alt=""></div>
                    <div class=" col-lg-7 col-md-7 col-sm-7 col-xs-12 pull-left">
                        <div class=" delay-01s animated fadeInDown wow animated">
                            <h3>We are the first in this time era</h3><br/>
                            <p>We are living in modern era where education is the power for every person. A person who join
                                an institute for institutional education. Every student from any institute such as school,
                                college and universities sometimes need help after the school time. Sometimes a class is not
                                enough for him/her. Institute is not always enough for every person. Those people who still
                                have lacking despite of joining a class they need special help. They need someone who can
                                teach them that specific topic properly.   Our website will be the hub for teachers and
                                learners. Where anyone can learn anything he wants or need. Anyone can teach.</p> <br/>
                        </div>
                        <div class="work_bottom"> <span>Want to know more..</span> <a href="#contact" class="contact_btn">Contact Us</a> </div>
                    </div>

                </div>


            </div>
        </div>
    </div>
</section>
<!--Aboutus-->


<!--Service-->
{{--<section  id="service">--}}
    {{--<div class="container">--}}
        {{--<h2>Services</h2>--}}
        {{--<div class="service_wrapper">--}}
            {{--<div class="row">--}}
                {{--<div class="col-lg-4">--}}
                    {{--<div class="service_block">--}}
                        {{--<div class="service_icon delay-03s animated wow  zoomIn"> <span><i class="fa fa-android"></i></span> </div>--}}
                        {{--<h3 class="animated fadeInUp wow">Android</h3>--}}
                        {{--<p class="animated fadeInDown wow">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-lg-4 borderLeft">--}}
                    {{--<div class="service_block">--}}
                        {{--<div class="service_icon icon2  delay-03s animated wow zoomIn"> <span><i class="fa fa-apple"></i></span> </div>--}}
                        {{--<h3 class="animated fadeInUp wow">Apple IOS</h3>--}}
                        {{--<p class="animated fadeInDown wow">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-lg-4 borderLeft">--}}
                    {{--<div class="service_block">--}}
                        {{--<div class="service_icon icon3  delay-03s animated wow zoomIn"> <span><i class="fa fa-html5"></i></span> </div>--}}
                        {{--<h3 class="animated fadeInUp wow">Design</h3>--}}
                        {{--<p class="animated fadeInDown wow">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="row borderTop">--}}
                {{--<div class="col-lg-4 mrgTop">--}}
                    {{--<div class="service_block">--}}
                        {{--<div class="service_icon delay-03s animated wow  zoomIn"> <span><i class="fa fa-dropbox"></i></span> </div>--}}
                        {{--<h3 class="animated fadeInUp wow">Concept</h3>--}}
                        {{--<p class="animated fadeInDown wow">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-lg-4 borderLeft mrgTop">--}}
                    {{--<div class="service_block">--}}
                        {{--<div class="service_icon icon2  delay-03s animated wow zoomIn"> <span><i class="fa fa-slack"></i></span> </div>--}}
                        {{--<h3 class="animated fadeInUp wow">User Research</h3>--}}
                        {{--<p class="animated fadeInDown wow">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-lg-4 borderLeft mrgTop">--}}
                    {{--<div class="service_block">--}}
                        {{--<div class="service_icon icon3  delay-03s animated wow zoomIn"> <span><i class="fa fa-users"></i></span> </div>--}}
                        {{--<h3 class="animated fadeInUp wow">User Experience</h3>--}}
                        {{--<p class="animated fadeInDown wow">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</section>--}}
<!--Service-->






<section class="page_section team" id="team"><!--main-section team-start-->
    <div class="container">
        <h2>Team</h2>
        <h6>The creative minds</h6>
        <div class="team_section clearfix">
            <div class="team_area">
                <div class="team_box wow fadeInDown delay-03s">
                    <div class="team_box_shadow"><a href="javascript:void(0)"></a></div>
                    <img src="{{asset('/')}}main/img/team_pic1.png" alt="">
                    <ul>
                        <li><a href="javascript:void(0)" class="fa fa-twitter"></a></li>
                        <li><a href="javascript:void(0)" class="fa fa-facebook"></a></li>
                        <li><a href="javascript:void(0)" class="fa fa-pinterest"></a></li>
                        <li><a href="javascript:void(0)" class="fa fa-google-plus"></a></li>
                    </ul>
                </div>
                <h3 class="wow fadeInDown delay-03s">Niaz MD Arafin Haque</h3>
                <span class="wow fadeInDown delay-03s">Co-founder</span>
                <p class="wow fadeInDown delay-03s"></p>
            </div>
            <div class="team_area">
                <div class="team_box  wow fadeInDown delay-06s">
                    <div class="team_box_shadow"><a href="javascript:void(0)"></a></div>
                    <img src="{{asset('/')}}main/img/team_pic2.png" alt="">
                    <ul>
                        <li><a href="javascript:void(0)" class="fa fa-twitter"></a></li>
                        <li><a href="javascript:void(0)" class="fa fa-facebook"></a></li>
                        <li><a href="javascript:void(0)" class="fa fa-pinterest"></a></li>
                        <li><a href="javascript:void(0)" class="fa fa-google-plus"></a></li>
                    </ul>
                </div>
                <h3 class="wow fadeInDown delay-06s">MD Tarikul Islam</h3>
                <span class="wow fadeInDown delay-06s">Co-founder</span>
                <p class="wow fadeInDown delay-06s"></p>
            </div>
            <div class="team_area">
                <div class="team_box wow fadeInDown delay-09s">
                    <div class="team_box_shadow"><a href="javascript:void(0)"></a></div>
                    <img src="{{asset('/')}}main/img/team_pic3.png" alt="">
                    <ul>
                        <li><a href="javascript:void(0)" class="fa fa-twitter"></a></li>
                        <li><a href="javascript:void(0)" class="fa fa-facebook"></a></li>
                        <li><a href="javascript:void(0)" class="fa fa-pinterest"></a></li>
                        <li><a href="javascript:void(0)" class="fa fa-google-plus"></a></li>
                    </ul>
                </div>
                <h3 class="wow fadeInDown delay-09s">Sabbir Mahmud</h3>
                <span class="wow fadeInDown delay-09s">Co-founder</span>
                <p class="wow fadeInDown delay-09s"></p>
            </div>
        </div>
    </div>
</section>
<!--/Team-->
<!--Footer-->
<footer class="footer_wrapper" id="contact">
    <div class="container">
        <section class="page_section contact" id="contact">
            <div class="contact_section">
                <h2>Contact Us</h2>
                <div class="row">
                    <div class="col-lg-4">

                    </div>
                    <div class="col-lg-4">

                    </div>
                    <div class="col-lg-4">

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 wow fadeInLeft">
                    <div class="contact_info">
                        <div class="detail">
                            <h4>Teach & Learn</h4>
                            <p>Shukrabad, Dhaka, Bangladesh</p>
                        </div>
                        <div class="detail">
                            <h4>Call us</h4>
                            <p>+880-1779-337180</p>
                        </div>
                        <div class="detail">
                            <h4>Email us</h4>
                            <p>admin@gmail.com</p>
                        </div>
                    </div>



                    <ul class="social_links">
                        <li class="twitter animated bounceIn wow delay-02s"><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
                        <li class="facebook animated bounceIn wow delay-03s"><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
                        <li class="pinterest animated bounceIn wow delay-04s"><a href="javascript:void(0)"><i class="fa fa-pinterest"></i></a></li>
                        <li class="gplus animated bounceIn wow delay-05s"><a href="javascript:void(0)"><i class="fa fa-google-plus"></i></a></li>
                    </ul>
                </div>
                <div class="col-lg-8 wow fadeInLeft">

                        <form class="form-horizontal" action="{{route('contact-us')}}" method="post">
                            <h3 style="color: white">{{Session::get('massage')}}</h3>
                            @csrf



                            <input class="input-text" type="text" name="name" placeholder="Your Name *" >
                            <input class="input-text" type="number" name="mobile" placeholder="Your Number *">
                            <input class="input-text" type="text" name="email" placeholder="Your E-mail *" >
                            <textarea class="input-text text-area" name="msg" cols="0" rows="0" ></textarea>

                            <input class="input-btn" type="submit" value="send message">

                        </form>
                    </div>

            </div>
        </section>
    </div>
    <div class="container">
        <div class="footer_bottom"><span>Copyright © 2014,    Template by <a href="{{route('/')}}">Teach&Learn</a>. </span> </div>
    </div>
</footer>

<script type="text/javascript" src="{{asset('/')}}main/js/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="{{asset('/')}}main/js/bootstrap.min.js"></script>
<script type="text/javascript" src="{{asset('/')}}main/js/jquery-scrolltofixed.js"></script>
<script type="text/javascript" src="{{asset('/')}}main/js/jquery.nav.js"></script>
<script type="text/javascript" src="{{asset('/')}}main/js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="{{asset('/')}}main/js/jquery.isotope.js"></script>
<script type="text/javascript" src="{{asset('/')}}main/js/wow.js"></script>
<script type="text/javascript" src="{{asset('/')}}main/js/custom.js"></script>

</body>
</html>