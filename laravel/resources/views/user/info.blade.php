<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Realist Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />

    <link href="css/css.css" rel="stylesheet" type="text/css" />
<link href="css/common.css" rel="stylesheet" type="text/css" />
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<script src="js/jquery.min.1.8.2.js" type="text/javascript"></script>
<script src="js/jquery.SuperSlide.2.1.1.js" type="text/javascript"></script>
<script type="text/javascript" src="js/slide.js"></script>
<script src="js/common_js.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="js/jquery.form.js"></script>
    <script type="text/javascript" src="js/myUpload.js"></script>
<script src="js/jquery.foucs.js" type="text/javascript"></script>
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
<title>用户中心</title>
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
<!--用户中心-->
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
            <li><a href="{{url('comment')}}"><em></em><span>我的留言板</span></a></li>
            <li><a href="{{url('collect')}}"><em></em><span>我的收藏</span></a></li>

        </ul>
    </div>
    <div class=" right_style r_user_style">
      <div class="user_Borders">
       <div class="title_name">
           <div class="text-center">
        <span class="name">个人信息设置</span>
               </div>
       </div>
       <div class="about_user_info">
       <form id="form1" name="form1" enctype="multipart/form-data" method="post" action="{{url('information')}}" onsubmit="return check_all()">
       <div class="user_layout">

         <ul >
          <li id="one"><label >用户头像：</label>
              <?php if(!empty($_COOKIE['pictures'])){ ?>
              &nbsp;&nbsp;<img id="pictures" src="{{$img}}" style="width: 65px;height: 65px"/>&nbsp;&nbsp;<input type="button" id="changes" value="更换头像"/></li><br/>
             <?php }else{?>
             <input type="file" name="otherimg"/>
             <?php }?>
             <li><label>用户昵称：</label>&nbsp;&nbsp;<input name="username" type="text"  class="add_text" value="<?php echo $users[0]->username?>" onblur="check_name()" id="username"/><i id="nickname">*</i></li>
          <li><label>真实姓名：</label>&nbsp;&nbsp;<input name="t_name" type="text"  class="add_text" value="<?php echo $users[0]->t_name?>" id="t_name"  onblur="check_t_name()"/><i id="real_name">*</i></li>
          <li><label>用户性别：</label>
                <label> &nbsp;&nbsp;<input type="radio" name="sex" value="男" id="RadioGroup1_0"  checked="checked"/><span>男</span></label>
                <label><input type="radio" name="sex" value="女" id="RadioGroup1_1" /><span>女</span></label>
                <i id="t_sex">*</i>
          </li>
          <li><label>手&nbsp;机&nbsp;号：</label>&nbsp;<input name="tell" type="text"  class="add_text" value="<?php echo $users[0]->tell?>" onblur="check_tell()" id="tell"/><i id="t_tell">*</i></li>
          <li><label>邮箱地址：</label>&nbsp;&nbsp;<input name="email" type="text"  class="add_text" value="<?php echo $users[0]->email?>" onblur="check_email" id="email"/><i id="t_email">*</i></li>
         </ul>
           <input type="hidden" name="_token" value="{{csrf_token()}}"/>
         <div class="operating_btn">&nbsp;&nbsp;<input name="name" type="submit" value="提交"  class="submit—btn"/></div>
         </div>
          </form>
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
     //更换头像
    $("#changes").click(function(){
        $("#one").replaceWith('<li id="one"><label >用户头像：</label><input type="file" name="otherimg"/></li>');
    })
    //姓名正则验证
    function check_name(){
         var name=$("#username").val();
         if(name==""){
             $("#nickname").html("昵称不能为空");
             return false;
         }else{
             if(!(/^[A-Za-z0-9_]{4,16}$/).test(name)){
                 $("#nickname").html("昵称位4-16字符");
                 return false;
             }else{
                 $("#nickname").html("<font color='green'><b>√</b></font>");
                 return true;
             }
         }
    }
    //验证真实姓名
     function check_t_name(){
         var t_name=$("#t_name").val();
         if(t_name==""){
             $("#real_name").html("真实姓名不能为空");
             return false;
         }else{
             if(!(/^[\u4e00-\u9fa5]{2,}$/).test(t_name)){
                 $("#real_name").html("用户名仅能为汉字");
                 return false;
             }else{
                 $("#real_name").html("<font color='green'><b>√</b></font>");
                 return true;
             }
         }
     }
    //验证性别
     $(":radio").click(function(){
         //alert(222);
         $("#t_sex").html("<font color='green'><b>√</b></font>");
         return true;
     })
    //验证手机号
     function check_tell(){
         var tell=$("#tell").val();
         if(tell==""){
             $("#t_tell").html("手机号不能为空");
             return false;
         }else{
             if(!(/^1[3|4|5|8][0-9]\d{4,8}$/).test(tell)){
                 $("#t_tell").html("手机号格式不对");
                 return false;
             }else{
                 $("#t_tell").html("<font color='green'><b>√</b></font>");
                 return true;
             }
         }
     }
    //验证邮箱
     function check_email(){
         var email=$("#email").val();
         if(email==""){
             $("#t_email").html("邮箱不能为空");
             return false;
         }else{
             if(!(/^\S+@qq.com$/).test(email)){
                 $("#t_email").html("邮箱格式不对");
                 return false;
             }else{
                 $("#t_email").html("<font color='green'><b>√</b></font>");
                 return true;
             }
         }
     }
     //验证表单提交
     //验证表单提交
     function check_all(){
         if(check_name()&check_t_name()&check_tell()&check_email()){
             return true;
         }else{
             return false;
         }
     }
</script>
