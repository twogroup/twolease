<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>出租</title>
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
</head>
<body>
<div class="header">
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
<div >
<center>
    <table>
        <tr>
            <td>标题</td>
            <td><input type="text" name="title"></td>
        </tr>
        <tr>
            <td>地区</td>
            <td></td>
        </tr>
        <tr>
            <td>小区名</td>
            <td></td>
        </tr>
        <tr>
            <td>租金</td>
            <td></td>
        </tr>
        <tr>
            <td>详细描述</td>
            <td></td>
        </tr>
        <tr>
            <td>图片</td>
            <td></td>
        </tr>
        <tr>
            <td>联系人</td>
            <td></td>
        </tr>
        <tr>
            <td>电话</td>
            <td></td>
        </tr>
        <tr>
            <td>提交</td>
            <td>重置</td>
        </tr>
    </table>
    </center>
</div>
</body>
</html>		