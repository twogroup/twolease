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

<div style="float:left; display:inline; margin:0px;padding:0px;">
    <img src="uploads/moneyhouse.jpg" width="500px" height="500px">
</div>

<div style="float:left; display:inline; margin:0px;padding:0px;">

    <table>
        <ul>
            <span class="contact">
                <b>*</b>
                主&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;题：
            </span>
            <input class="appCommunityName" size="30" name="" id="" type="text" maxlength="50" />
            <input id="conmmunityid" name="RentEntrust[conmmunityid]" type="hidden" />
            <!--<em><div class="errorMessage" id="RentEntrust_conmmunityname_em_" style="display:none"></div></em>-->
        </ul><br/>
        <ul>
            <span class="contact">
                <b>*</b>
                地&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;区：
            </span>
            <input class="appCommunityName" size="30" name="" id="" type="text" maxlength="50" />
            <input id="conmmunityid" name="RentEntrust[conmmunityid]" type="hidden" />
            <!--<em><div class="errorMessage" id="RentEntrust_conmmunityname_em_" style="display:none"></div></em>-->
        </ul><br/>
        <ul>
            <span class="contact">
                <b>*</b>
                小&nbsp;区&nbsp;名：
            </span>
            <input class="appCommunityName" size="30" name="" id="" type="text" maxlength="50" />
            <input id="conmmunityid" name="RentEntrust[conmmunityid]" type="hidden" />
            <!--<em><div class="errorMessage" id="RentEntrust_conmmunityname_em_" style="display:none"></div></em>-->
        </ul><br/>
        <ul>
            <span class="contact">
                <b>*</b>
                图&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;片：
            </span>
            <input class="appCommunityName" size="30" name="" id="" type="file" maxlength="50" />
            <input id="conmmunityid" name="RentEntrust[conmmunityid]" type="hidden" />
            <!--<em><div class="errorMessage" id="RentEntrust_conmmunityname_em_" style="display:none"></div></em>-->
        </ul><br/>
        <ul>
            <span class="contact">
                <b>*</b>
                房源类型：
            </span>
            <input type="radio" value="1" id="ra1" checked="checked">小区&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" value="2" id="ra2">公寓&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" value="3" id="ra3">别墅
           <!-- <span id="RentEntrust_rentmode"><input id="RentEntrust_rentmode_0" value="1" checked="checked" type="radio"/>小区
            <input id="RentEntrust_rentmode_1" value="2" type="radio" />公寓</span>
            &nbsp;&nbsp;&nbsp;&nbsp;<input id="RentEntrust_rentmode_1" value="2" type="radio"/>别墅</span>
            <em><div class="errorMessage" id="RentEntrust_conmmunityname_em_" style="display:none"></div></em>-->
        </ul><br/>
        <ul>
            <span class="contact">
                <b>*</b>
                租/售 方式：
            </span>
            <input type="radio" value="11" id="dio1" checked="checked">出租&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" value="22" id="dio2">出售
            <!--<em><div class="errorMessage" id="RentEntrust_conmmunityname_em_" style="display:none"></div></em>-->
        </ul><br/>
        <ul>
            <span class="contact">
                <b>*</b>
                意向租金：
            </span>
            <input class="appCommunityName" size="10" name="" id="" type="text" maxlength="50" />元/月
            <input id="conmmunityid" name="RentEntrust[conmmunityid]" type="hidden" />
            <!--<em><div class="errorMessage" id="RentEntrust_conmmunityname_em_" style="display:none"></div></em>-->
        </ul><br/>
        <ul>
            <span class="contact">
                <b>*</b>
                详&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;情：
            </span>
            <textarea name="" rows="1" cols="10"></textarea>
            <!--<input class="appCommunityName" size="30" name="" id="" type="text" maxlength="50" />
            <input id="conmmunityid" name="RentEntrust[conmmunityid]" type="hidden" />
            <em><div class="errorMessage" id="RentEntrust_conmmunityname_em_" style="display:none"></div></em>-->
        </ul><br/>
        <ul>
            <span class="contact">
                <b>*</b>
                联&nbsp;系&nbsp;人：
            </span>
            <input class="appCommunityName" size="15" name="" id="" type="text" maxlength="50" />
            <input id="conmmunityid" name="RentEntrust[conmmunityid]" type="hidden" />
            <!--<em><div class="errorMessage" id="RentEntrust_conmmunityname_em_" style="display:none"></div></em>-->
        </ul><br/>
        <ul>
            <span class="contact">
                <b>*</b>
                手&nbsp;机&nbsp;号：
            </span>
            <input class="appCommunityName" size="30" name="" id="" type="text" maxlength="50" />
            <input id="conmmunityid" name="RentEntrust[conmmunityid]" type="hidden" />
            <!--<em><div class="errorMessage" id="RentEntrust_conmmunityname_em_" style="display:none"></div></em>-->
        </ul><br/>
        <center>
        <div class="main tc">
            <input type="submit" value="提&nbsp;&nbsp;交">
        </div>
        </center>
    </table>
</div>
</body>
</html>		