<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Realist Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-1.11.1.min.js"></script>
    <!-- Custom Theme files -->
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <link href='http://fonts.googleapis.com/css?family=Grand+Hotel:400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet:100,300,400,500,600,700,800,900' type='text/css'>
    <!-- Menu -->
    <!----font-Awesome----->
    <link rel="stylesheet" href="fonts/css/font-awesome.min.css">
    <!----font-Awesome----->
    <link href="css/css.css" rel="stylesheet" type="text/css" />
    <link href="css/common.css" rel="stylesheet" type="text/css" />
    <script src="js/jquery.min.1.8.2.js" type="text/javascript"></script>
    <script src="js/jquery.SuperSlide.2.1.1.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/slide.js"></script>
    <script src="js/common_js.js" type="text/javascript"></script>
    <script src="js/jquery.foucs.js" type="text/javascript"></script>
    <title>我的评论</title>
</head>

<body>
<div class="col-xs-4">
    <div class="logo">
        <a href="index.html"><img src="images/logo.png" alt=""/></a>
    </div>
</div>
<div class="col-xs-8 header_right">
    <span class="menu"></span>
    <div class="top-menu">
        @include('components.head')
    </div>
    <!-- script for menu -->
    <script>
        $( "span.menu" ).click(function() {
            $( ".top-menu" ).slideToggle( "slow", function() {
                // Animation complete.
            });
        });
    </script>
    <!-- script for menu -->
</div>
<div class="clearfix"> </div>
</div>
<!--修改密码-->
<div class="about_top">
    <div class="container">
        <div class="about">

            <div class="user_style clearfix" id="user">
                <div class="clearfix user" >
                    <div class="user_left">
                        <div class="user_info">
                            <div class="Head_portrait" style="width:80px;height:80px;border-radius:80px;"><img src="{{$_COOKIE['pictures']}}"  width="85px" height="85px"/><!--头像区域--></div>
                            <div class="user_name">用户<?php echo $other_name; ?><a href="#">[个人资料]</a></div>
                        </div>
                        <ul class="Section">
                            <li><a href="{{url('personal')}}"><em></em><span>个人信息</span></a></li>
                            <li><a href="{{url('password')}}"><em></em><span>修改密码</span></a></li>
                            <li><a href="#"><em></em><span>我的订单</span></a></li>
                            <li><a href="{{url('comment')}}"><em></em><span>我的留言板</span></a></li>
                            <li><a href="{{url('collect')}}"><em></em><span>我的收藏</span></a></li>

                        </ul>
                    </div>
                    <!--右侧样式-->
                    <div class=" right_style r_user_style">
                        <div class="user_Borders">
                            <div class="title_name">
                                <div class="text-center">
                                    <span class="name">我的留言板</span>
                                </div>
                            </div>
                            <div class="about_comment_info">
                                <form id="form1" name="form1" enctype="multipart/form-data" method="post" action="{{url('information')}}" onsubmit="return check_all()">
                                    <div class="comment_layout">
                                        <ul >

                                            <li><label><font size="3">主&nbsp;题：</font></label>
                                                <input name="theme" type="text"  class="text" id="theme" /></li>

                                            <li><label><font size="3">内&nbsp;容：</font></label><textarea name="content" class="content" id="" cols="30" rows="10"></textarea></li>
                                        </ul>
                                        <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                                        <div class="operating_btn"><input name="name" type="submit" value="确认"  class="submit—btn"/></div>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>

                    {{--<div class="right_style r_user_style user_right">--}}
                    {{--<div class="user_Borders">--}}
                    {{--<div class="title_name">--}}
                    {{--<div class="text-center">--}}
                    {{--<span class="name">我的留言板</span>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--<!--我的留言-->--}}
                    {{--<div class="about_user_info" >--}}
                    {{--<form id="form1" name="form1" method="post" action="" onsubmit="">--}}
                    {{--<div class="user_layout">--}}
                    {{--<ul >--}}

                    {{--<li><label><font size="3">主&nbsp;题：</font></label>--}}
                    {{--<input name="theme" type="text"  class="add_text" id="theme" /><i id="t_pwd">*</i></li>--}}

                    {{--<li><label><font size="3">内&nbsp;容：</font></label><textarea name="content" class="add_text" id="" cols="30" rows="10"></textarea><i id="n_content">*</i></li>--}}
                    {{--</ul>--}}
                    {{--<input type="hidden" name="_token" value="{{csrf_token()}}"/>--}}
                    {{--<div class="operating_btn"><input name="name" type="submit" value="确认"  class="submit—btn"/></div>--}}
                    {{--</div>--}}
                    {{--</form>--}}

                    {{--</div>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                </div>
            </div>
            <div class="grid_7">
                <div class="col-md-4 box_4">
                    <h4>Receive our Newsletter</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliq.</p>
                    <div class="search">
                        <form>
                            <input type="text" value="">
                            <input type="submit" value="Subscribe">
                        </form>
                    </div>
                </div>
                <div class="col-md-4">
                    <address class="footer-addr">
                        totam rem aperiam, <br>
                        voluptatum deleniti , USA <br>
                        E-MAIL:
                        <a href="#">MAIL@DEMOLINK.ORG</a>

                        <div class="phone">
                            <span>(500)</span> 1254 6487
                        </div>
                    </address>
                </div>
                <div class="col-md-2">
                    <ul class="list_2">
                        <li>
                            <a href="#">1st &amp; 2nd Mortgages</a>
                        </li>
                        <li>
                            <a href="#">Construction Loans</a>
                        </li>
                        <li>
                            <a href="#">Fractional Ownerships</a>
                        </li>
                        <li>
                            <a href="#">Home Refinancing</a>
                        </li>
                        <li>
                            <a href="#">Home Equity Lines</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-2">
                    <ul class="list_2">
                        <li>
                            <a href="#">1st &amp; 2nd Mortgages</a>
                        </li>
                        <li>
                            <a href="#">Construction Loans</a>
                        </li>
                        <li>
                            <a href="#">Fractional Ownerships</a>
                        </li>
                        <li>
                            <a href="#">Home Refinancing</a>
                        </li>
                        <li>
                            <a href="#">Home Equity Lines</a>
                        </li>
                    </ul>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="copy">
                <p>© 2015 All Rights Reseverd Template by <a href="http://w3layouts.com/">W3layouts</a> </p>
            </div>
        </div>
    </div>
</div>
</body>
</html>

