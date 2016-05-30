
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<meta http-equiv="X-UA-Compatible" content="IE=7, IE=9" />
<link href="http://assets.muniao.com/assets/2013/style/login.css?2015-8-13.18" rel="stylesheet" type="text/css" />
<title>我要当房东-异家人租房</title>

<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-1.11.1.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Grand+Hotel:400' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet:100,300,400,500,600,700,800,900' type='text/css'>
<meta name="keywords" content="Realist Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>




<!-- Menu -->
<!--<script src="js/responsiveslides.min.js"></script>
<script>
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	nav: true,
      	speed: 500,
        namespace: "callbacks",
        pager: true
      });
    });
</script>-->
</head>
<body>
<br>
<div class="">
	<div class="col-xs-4">
	  <div class="logo">
		<a href="index"><img src="images/logo.png" alt=""/></a>
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
	</br></br>
</br></br>
</div>





<!--登陆开始-->
<div class="main">
	<div class="procedure">
		<ul>
			<li><span>填写房源基本信息</span><div class="probg">1</div></li>
			<li><span>填写图片信息</span><div class="probg">2</div></li>
			<li><span class="aOrange">填写时间价格</span><div class="probg1">3</div></li>
			<li><span>成功发布房源</span><div class="probg">4</div></li>
			<div class="clear"></div>
		</ul>
	</div></br>
	<div class="oneselfT"><h4>	房源发布</h4></div>
	<div class="oneself">
		
			<form action="houseadd3" method="post">
			<input type="hidden" name="_token" value="{{csrf_token()}}">

			<center>
			<table width="948" border="0" cellspacing="0" cellpadding="0">
				
				<tr>
					<td>
						<input type="hidden" name="name" value="{{$name}}" />
					</td>
				</tr>
				<tr>
					<td align="right" height="50" valign="middle" width="71"><span class="aRed">*</span>房&nbsp;&nbsp;&nbsp;&nbsp;型：</td>
					<td colspan="3" align="left" height="50" valign="middle">
					<input name="house_type" class="oneselfinput" type="text"></td>
					<td align="left" height="50" valign="middle" width="200">&nbsp;</td>
				</tr>
				<tr>
					<td align="right" height="50" valign="middle" width="200"><span class="aRed">*</span>可入住时间：</td>
					<td colspan="3" align="left" height="50" valign="middle">
					<input name="in_time" class="oneselfinput" type="date"></td>
					<td align="left" height="50" valign="middle" width="200">&nbsp;</td>
				</tr>
				<tr>
					<td align="right" height="50" valign="middle" width="71"><span class="aRed">*</span>退房时间：</td>
					<td colspan="3" align="left" height="50" valign="middle">
					<input name="out_time" class="oneselfinput" type="date"></td>
					<td align="left" height="50" valign="middle" width="200">&nbsp;</td>
				</tr>
				<tr>
					<td align="right" height="50" valign="middle" width="71"><span class="aRed">*</span>接待时间：</td>
					<td colspan="3" align="left" height="50" valign="middle">
					<input name="receive_time" class="oneselfinput" type="date"></td>
					<td align="left" height="50" valign="middle" width="200">&nbsp;</td>
				</tr>
				<tr>
					<td align="right" height="50" valign="middle" width="71"><span class="aRed">*</span>住房押金：</td>
					<td colspan="3" align="left" height="50" valign="middle">
					<input name="deposit" class="oneselfinput" type="text">元</td>
					<td align="left" height="50" valign="middle" width="200">&nbsp;</td>
				</tr>
				<tr>
					<td align="right" height="50" valign="middle" width="71"><span class="aRed">*</span>住房租金：</td>
					<td colspan="3" align="left" height="50" valign="middle">
					<input name="pay" class="oneselfinput" type="text">元</td>
					<td align="left" height="50" valign="middle" width="200">&nbsp;</td>
				</tr>
				
				<tr>
				<td>
					<td height="50" colspan="11" align="center" valign="middle">
						<input type="submit" class="ueditbtn2" value="" />
					</td>
				</tr>
			</table>
			</center>
			</form>
<!--尾开始-->
<div class="s_mn_footerbox" id="s_mn_footerbox">
 <div class="s_mn_footer_center">
  <div class="s_mn_footer_nav">
   <a href="#" rel="nofollow" target="_blank" title="关于我们">关于我们</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="#" target="_blank" title="异家人客服">联系我们</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="http://www.muniao.com/single_4.html" rel="nofollow" target="_blank" title="法律声明">法律声明</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="http://www.muniao.com/single_5.html" rel="nofollow" target="_blank" title="新手指南">新手指南</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="http://www.muniao.com/single_1.html" rel="nofollow" target="_blank" title="帮助中心">帮助中心</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="http://www.muniao.com/single_7.html" rel="nofollow" target="_blank" title="加入我们">加入我们</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="http://www.muniao.com/list_news_0_1.html" target="_blank" rel="nofollow" title="新闻资讯">新闻资讯</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="http://www.muniao.com/sitemap_iuiue.html" target="_blank" title="网站地图">网站地图</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="http://www.muniao.com/" target="_blank" title="短租房">短租房</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="http://www.muniao.com/dibiao/" target="_blank" title="地标找短租房">地标找短租房</a> | <a href="http://www.muniao.com/single_9.html" rel="nofollow" target="_blank" title="地标找短租房">媒体报道</a>
  </div>
  <div class="s_mn_footer_information">
   <div class="s_mn_copyright">
    <p>客服电话：124-7894-7898&nbsp;意见反馈：*****.com</p>
    <p>版权所有&nbsp;异家人&nbsp;网站备案/许可证号：京ICP备120435*3号-3  京公网安备1101080**11855号</p>
    <p>北京易友科技有限公司</p>
   </div>
   <div class="s_mn_security">
   	<center>
    <tr class="s_mn_security_list">
    <td><a href="http://net.china.cn/chinese/index.htm" rel="nofollow" title="信息举报中心" target="_blank"><img src="http://assets.muniao.com/assets/2013/image/pic1.jpg" alt="信息举报中心" title="信息举报中心" width="109" height="50"></a></td>
    <td><a href="http://www.bj.cyberpolice.cn/index.htm" rel="nofollow" title="网络110" target="_blank"><img src="http://assets.muniao.com/assets/2013/image/pic2.jpg" alt="网络110" title="网络110" width="109" height="50"></a></td>
    <td><a href="http://www.bjjubao.org/" rel="nofollow" title="互联网举报中心" target="_blank"><img src="http://assets.muniao.com/assets/2013/image/pic3.jpg" alt="互联网举报中心" title="互联网举报中心" width="109" height="50"></a></td>
    <td><a href="http://webscan.360.cn/index/checkwebsite/url/muniao.com" rel="nofollow" title="安全检测" target="_blank"><img src="http://assets.muniao.com/assets/2013/image/pic6.jpg" alt="安全检测" title="安全检测" width="109" height="50"></a></td>
    </tr>
    </center>
   </div>
  </div>
 </div>
</div>
<!--尾结束-->