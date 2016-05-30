<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/css.css" rel="stylesheet" type="text/css" />
<link href="css/common.css" rel="stylesheet" tyle="text/css" />
<script src="js/jquery.min.1.8.2.js" type="text/javascript"></script>
<script src="js/jquery.SuperSlide.2.1.1.js" type="text/javascript"></script>
<script src="js/common_js.js" type="text/javascript"></script>
<script src="js/footer.js" type="text/javascript"></script>
<title>用户中心</title>
</head>
<body>


<!--内页样式-->
<div class="user_style clearfix" id="user">
  <div class="user_title"><em></em>用户中心</div>
  <!--用户中心布局样式-->
   <!--栏目名称-->
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
</body>
</html>
