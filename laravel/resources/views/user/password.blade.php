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
<title>修改密码</title>
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
                            <div class="Head_portrait"><img src="{{$_COOKIE['pictures']}}"  width="80px" height="80px"/><!--头像区域--></div>
                            <div class="user_name">用户<?php echo $other_name; ?><a href="#">[个人资料]</a></div>
                        </div>
                        <ul class="Section">
                            <li><a href="{{url('personal')}}"><em></em><span>个人信息</span></a></li>
                            <li><a href="{{url('password')}}"><em></em><span>修改密码</span></a></li>
                            <li><a href="#"><em></em><span>我的订单</span></a></li>
                            <li><a href="{{url('comment')}}"><em></em><span>我的评论</span></a></li>
                            <li><a href="{{url('collect')}}"><em></em><span>我的收藏</span></a></li>
                        </ul>
                    </div>
    <!--右侧样式-->
    <div class="right_style r_user_style user_right">
      <div class="user_Borders">
       <div class="title_name">
           <div class="text-center">
        <span class="name">修改密码</span>
               </div>
       </div>
       <!--修改密码样式-->
       <div class="about_user_info" >
        <form id="form1" name="form1" method="post" action="{{url('modify')}}" onsubmit="return check_all()">
       <div class="user_layout">
         <ul >

          <li><label><font size="3">原&nbsp;密&nbsp;码：</font></label><input name="pwd" type="password"  class="add_text" id="pwd" onblur="check_pwd();" /><i id="t_pwd">*</i></li>
                 <input type="hidden" id="h_pwd" value="<?php echo $_COOKIE['pwd']; ?>"/>
          <li><label><font size="3">新&nbsp;密&nbsp;码：</font></label><input name="new_pwd" type="password"  class="add_text" id="new_pwd" onblur="check_new()"/><i id="n_pwd">*</i></li>
          <li><label><font size="3">确认新密码：</font></label><input name="confirm_pwd" type="password"  class="add_text" id="confirm_pwd" onblur="check_confrim();"/><i id="c_pwd">*</i></li>
         </ul>
           <input type="hidden" name="_token" value="{{csrf_token()}}"/>
         <div class="operating_btn"><input name="name" type="submit" value="确认"  class="submit—btn"/></div>
         </div>
          </form>

       </div>
      </div>
    </div>
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
<script>
    //判断输入密码是否与原密码对应
    function check_pwd(){
        var pwd=document.getElementById("h_pwd").value;
        var pwds=$("#pwd").val();
        //alert(pwd);
        if(pwds==""){
            $("#t_pwd").html("<font size='3'>密码不能为空</font>");
            return false;
        }else{
            $.get('revert',{'p':pwds},function(msg){
                //用返回的值判断
                if(msg!=pwd){
                    $("#t_pwd").html("<font size='3'>原密码输入错误</font>");
                }else{
                    $("#t_pwd").html("<font size='3' color='green'><b>√</b></font>");
                }
            })
            return true;
        }
    }
    //进行密码验证
    function check_new(){
        var new_pwd=$("#new_pwd").val();
        if(new_pwd==""){
            $("#n_pwd").html("<font size='3'>密码不能为空</font>");
            return false;
        }else{
            if(!(/^[a-zA-Z\d_]{6,}$/).test(new_pwd)){
                $("#n_pwd").html("<font size='3'>密码长度应大于6</font>");
                return false;
            }else{
                $("#n_pwd").html("<font size='3' color='green'><b>√</b></font>");
                return true;
            }
        }
    }
    //确认密码
    function check_confrim(){
        var n_pwd=$("#new_pwd").val();
        var confirm_pwd=$("#confirm_pwd").val();
        //alert(confirm_pwd);
        if(confirm_pwd==""){
            $("#c_pwd").html("<font size='3'>密码不能为空</font>");
            return false;
        }else{
            if(!(/^[a-zA-Z\d_]{6,}$/).test(confirm_pwd)) {
                $("#c_pwd").html("<font size='3'>密码长度应大于6</font>");
                return false;
            }else if(confirm_pwd!=n_pwd){
                   $("#c_pwd").html("<font size='3'>两次密码不一致</font>");
                   return false;
               }else if(confirm_pwd==n_pwd){
                   $("#c_pwd").html("<font size='3' color='green'><b>√</b></font>");
                   return true;
               }
            }
    }
    //表单提交验证
    function check_all(){
        if(check_pwd() & check_new() & check_confrim()){
            return true;
        }else{
            return false;
        }
    }
</script>
