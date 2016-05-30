<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Realist an Real_Estate Category Flat Bootstarp Resposive Website Template | About :: w3layouts</title>
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
<div class="about_top">
    <div class="container">
        <div class="about">
        	<div class="col-md-8">
        		<h3 class="m_3">关于我们</h3>
        		<div class="section_group"> 
			      	<div class="col_1_of_2 span_1_of_2">
			      		<img src="images/about.jpg" class="img-responsive" alt=""/>
			      	</div>
			        <div class="col_1_of_2 span_1_of_2">
			      		<h4>{{$us[0]->us_title}}</h4>
			      		<p>{{$us[0]->us_content}}</p>
			        </div>
			        <div class="clearfix"> </div>
                </div>
        	</div>
        	<div class="col-md-4 about_box">
        		<h3 class="m_3">{{$us[1]->us_title}}</h3>
			    <p>{{$us[1]->us_content}}</p>
			</div>
        	<div class="clearfix"> </div>
        </div>
        <div class="about_grid1">
        	<h3>我们的优势</h3>
        	<div class="col-md-4">
        		<div class="list styled custom-list">
				  <ul>
					 <li><span class="dropcap">01 / </span>  
					   <div class="about_desc">
					 	<h5><a href="#">{{$us[2]->us_title}}</a></h5>
					 	<p>{{$us[2]->us_content}}</p>
					   </div>
					 </li>
				  </ul>
				</div>
        	</div>
        	<div class="col-md-4">
        		<div class="list styled custom-list">
				  <ul>
					 <li><span class="dropcap">02 / </span>  
					   <div class="about_desc">
					 	<h5><a href="#">{{$us[3]->us_title}}</a></h5>
					 	<p>{{$us[3]->us_content}}</p>
					   </div>
					 </li>
				  </ul>
				</div>
        	</div>
        	<div class="col-md-4">
        		<div class="list styled custom-list">
				  <ul>
					 <li><span class="dropcap">03 / </span>  
					   <div class="about_desc">
					 	<h5><a href="#">{{$us[4]->us_title}} </a></h5>
					 	<p>{{$us[4]->us_content}}</p>
					   </div>
					 </li>
				  </ul>
				</div>
        	</div>
        	<div class="clearfix"> </div>
        </div>
        <div class="about_grid2">
            <h3>我们的成员</h3>
            @foreach($staff as $sta)
            <div class="col-md-3 about_box2">
                <img src="{{$sta->staff_img}}" width="280px" height="300px" class="" alt=""/>
                <h3>{{$sta->us_staff}} </h3>
                <p>{{$sta->us_desc}}</p>
            </div>
            @endforeach
            <div class="clearfix"> </div>
        </div>
        <br>
        <div class="about_grid2">
        	<h3>我们的特色</h3>
        	<div class=" about_box2">
        		{{--<img src="images/a1.jpg" class="img-responsive" alt=""/> --}}
        		<h3>{{$us[5]->us_title}}</h3>
        		<p>{{$us[5]->us_content}}</p>
        	</div>
        	<div class="clearfix"> </div>
        </div>
        <div class="grid_4">

                <div class="clearfix"> </div>
        </div>

        <div class="copy">
            @include('components.footer')
	    </div>
	</div>
</div>
</body>
</html>		