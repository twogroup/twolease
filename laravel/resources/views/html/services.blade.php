<!DOCTYPE HTML>
<html>
<head>
<title>异家人————房源添加</title>
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
<script type="text/javascript" src="js/jquery.fancybox.js"></script>
<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css" media="screen" />
<script type="text/javascript">
		$(document).ready(function() {
			$('.fancybox').fancybox();
		});
	</script>
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
       	 <div class="service_grid">

             @foreach ($posts as $val)
	       	<div class="col-md-3 service_box">
	       		<a class="fancybox"  href="uploads/{{ $val->photo }}"  data-fancybox-group="gallery" title="Product Name"><img src="uploads/{{ $val->photo }}" width="400px" class="img-responsive" alt=""/><span> </span></a>
			    <h4><a href="javascript:void(0)" onclick="nae({{ $val->rent_id }})">{{ $val->title }}</a></h4>
				<p>{{ $val->area }}{{ $val->community }}{{ $val->content }}</p>
	       	</div>
	      @endforeach

	       	<div class="clearfix"> </div>
         </div>
           {!! $posts->render() !!}
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
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script>
    function nae(id)
    {
        //alert(id);die;
        var data={'xqid':id}
        var url="showsxq";
        $.get(url,data,function(msg){
            $a = msg;
            //alert(msg);die;
            location.href ='{{url('zhan')}}?id='+$a;
        })
    }
</script>