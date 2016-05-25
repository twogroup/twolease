<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Realist an Real_Estate Category Flat Bootstarp Resposive Website Template | Home :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Realist Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-1.11.1.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Grand+Hotel:400' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet:100,300,400,500,600,700,800,900' type='text/css'>

<!--a标签传值（传ID至控制器）-->
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



<!-- Menu -->
<script src="js/responsiveslides.min.js"></script>
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
</script>
 <!----font-Awesome----->
<link rel="stylesheet" href="fonts/css/font-awesome.min.css">
<!----font-Awesome-->
<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
		    <script type="text/javascript">
			    $(document).ready(function () {
			        $('#horizontalTab').easyResponsiveTabs({
			            type: 'default', //Types: default, vertical, accordion           
			            width: 'auto', //auto or any width like 600px
			            fit: true   // 100% fit in a container
			        });
			    });
</script>
</head>
<body>
<div class="header">
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
</div>
<div class="slider">
	  <div class="callbacks_container">
	      <ul class="rslides" id="slider">
	        <li><img src="images/banner.jpg" class="img-responsive" alt=""/>
	          <div class="banner_desc">
	          	<div class="container">
				  <h1>Est notare quam littera gothica, quam nunc.</h1>
				  <h2>At wisi enim ad minim veniam, quis nostrud.</h2>
				</div>
				<div class="details">
			     <div class="container">
	    	     <div class="col-xs-10 dropdown-buttons">   
            	  <div class="col-xs-4 dropdown-button">           			
            		<div class="section_room">
						 <select id="country" onchange="change_country(this.value)" class="frm-field required">
							<option value="null">All Locations</option>
							<option value="null">Business</option>         
							<option value="AX">First Class</option>
							<option value="AX">Premium Economy</option>
						 </select>
					  </div>
					</div>
				    <div class="col-xs-4 dropdown-button">
					  <div class="section_room">
						 <select id="country" onchange="change_country(this.value)" class="frm-field required">
							<option value="null">All Property types</option>
							<option value="null">House</option>         
							<option value="AX">Apartment</option>
							<option value="AX">Premium Economy</option>
						 </select>
					  </div>
					 </div>
					 <div class="col-xs-4 dropdown-button">
					  <div class="section_room">
						 <select id="country" onchange="change_country(this.value)" class="frm-field required">
							<option value="null">All contracts</option>
							<option value="null">Sale</option>         
							<option value="AX">Rent</option>
							<option value="AX">Sold</option>
						 </select>
					  </div>
					 </div>
				   </div> 
				   <div class="col-xs-2 submit_button"> 
				   	  <form>
				   	     <input type="submit" value="Search">
				   	  </form>
				   </div>
				   <div class="clearfix"> </div>
				</div>
			   </div>
			  </div>
			</li>
	        <li><img src="images/banner1.jpg" class="img-responsive" alt=""/>
	         <div class="banner_desc">
	            <div class="container">
				  <h1>Est notare quam littera gothica, quam nunc.</h1>
				  <h2>At wisi enim ad minim veniam, quis nostrud.</h2>
			    </div>
				<div class="details">
			     <div class="container">
	    	     <div class="col-xs-10 dropdown-buttons">   
            	  <div class="col-xs-4 dropdown-button">           			
            		<div class="section_room">
						 <select id="country" onchange="change_country(this.value)" class="frm-field required">
							<option value="null">All Locations</option>
							<option value="null">Business</option>         
							<option value="AX">First Class</option>
							<option value="AX">Premium Economy</option>
						 </select>
					  </div>
					</div>
				    <div class="col-xs-4 dropdown-button">
					  <div class="section_room">
						 <select id="country" onchange="change_country(this.value)" class="frm-field required">
							<option value="null">All Property types</option>
							<option value="null">House</option>         
							<option value="AX">Apartment</option>
							<option value="AX">Premium Economy</option>
						 </select>
					  </div>
					 </div>
					 <div class="col-xs-4 dropdown-button">
					  <div class="section_room">
						 <select id="country" onchange="change_country(this.value)" class="frm-field required">
							<option value="null">All contracts</option>
							<option value="null">Sale</option>         
							<option value="AX">Rent</option>
							<option value="AX">Sold</option>
						 </select>
					  </div>
					 </div>
				   </div> 
				   <div class="col-xs-2 submit_button"> 
				   	  <form>
				   	     <input type="submit" value="Search">
				   	  </form>
				   </div>
				   <div class="clearfix"> </div>
				</div>
			   </div>
			   </div>
	        </li>
	        <li><img src="images/banner2.jpg" class="img-responsive" alt=""/>
	          <div class="banner_desc">
	          	<div class="container">
				  <h1>Est notare quam littera gothica, quam nunc.</h1>
				  <h2>At wisi enim ad minim veniam, quis nostrud.</h2>
			    </div>
				<div class="details">
			     <div class="container">
	    	     <div class="col-xs-10 dropdown-buttons">   
            	  <div class="col-xs-4 dropdown-button">           			
            		<div class="section_room">
						 <select id="country" onchange="change_country(this.value)" class="frm-field required">
							<option value="null">All Locations</option>
							<option value="null">Business</option>         
							<option value="AX">First Class</option>
							<option value="AX">Premium Economy</option>
						 </select>
					  </div>
					</div>
				    <div class="col-xs-4 dropdown-button">
					  <div class="section_room">
						 <select id="country" onchange="change_country(this.value)" class="frm-field required">
							<option value="null">All Property types</option>
							<option value="null">House</option>         
							<option value="AX">Apartment</option>
							<option value="AX">Premium Economy</option>
						 </select>
					  </div>
					 </div>
					 <div class="col-xs-4 dropdown-button">
					  <div class="section_room">
						 <select id="country" onchange="change_country(this.value)" class="frm-field required">
							<option value="null">All contracts</option>
							<option value="null">Sale</option>         
							<option value="AX">Rent</option>
							<option value="AX">Sold</option>
						 </select>
					  </div>
					 </div>
				   </div> 
				   <div class="col-xs-2 submit_button"> 
				   	  <form>
				   	     <input type="submit" value="Search">
				   	  </form>
				   </div>
				   <div class="clearfix"> </div>
				</div>
				</div>
			    </div>
			 </li>
	      </ul>
	 </div>
</div>
<div class="smart_details">
			     <div class="container">
	    	     <div class="col-md-10 dropdown-buttons">   
            	  <div class="col-md-4 dropdown-button">           			
            		<div class="section_room">
						 <select id="country" onchange="change_country(this.value)" class="frm-field required">
							<option value="null">All Locations</option>
							<option value="null">Business</option>         
							<option value="AX">First Class</option>
							<option value="AX">Premium Economy</option>
						 </select>
					  </div>
					</div>
				    <div class="col-md-4 dropdown-button">
					  <div class="section_room">
						 <select id="country" onchange="change_country(this.value)" class="frm-field required">
							<option value="null">All Property types</option>
							<option value="null">House</option>         
							<option value="AX">Apartment</option>
							<option value="AX">Premium Economy</option>
						 </select>
					  </div>
					 </div>
					 <div class="col-md-4 dropdown-button">
					  <div class="section_room">
						 <select id="country" onchange="change_country(this.value)" class="frm-field required">
							<option value="null">All contracts</option>
							<option value="null">Sale</option>         
							<option value="AX">Rent</option>
							<option value="AX">Sold</option>
						 </select>
					  </div>
					 </div>
				   </div> 
				   <div class="col-md-2 submit_button"> 
				   	  <form>
				   	     <input type="submit" value="Search">
				   	  </form>
				   </div>
				   <div class="clearfix"> </div>
				</div>
</div>
<div class="content_top">
   <div class="container">
   	  <!--最受欢迎的房源-->
   	  <h4 class="m_3">最受欢迎的房源</h4>
   	  <d iv class="grid_1">
		<div class="col-md-3 box_1">
			<a href="single.html"><img src="images/pic8.jpg" class="img-responsive" alt=""/></a>
		    <div class="box_2">
			  <div class="special-wrap"><div class="hot_offer"><span class="m_11">热提供</span></div><div class="forclosure"><span class="m_12">特殊报价</span></div></div>
			</div>
		   <div class="box_3">
			 <h3><a href="single.html">House1</a></h3>
			 <div class="boxed_mini_details clearfix">
			      <span class="area first"><strong>车库</strong><i class="fa fa-plane icon1"> </i>
			      2</span>
			      <span class="status"><strong>洗澡</strong><i class="fa fa-retweet icon1"> </i>
			      2</span>
			      <span class="bedrooms last"><strong>床</strong><i class="fa fa-bed"></i>
			      2</span>
             </div>
		   </div>
		</div>
		<div class="col-md-3 box_1">
			<a href="single.html"><img src="images/pic9.jpg" class="img-responsive" alt=""/></a>
		     <div class="box_2">
			  <div class="special-wrap"><div class="hot_offer"><span class="m_11">热提供</span></div><div class="forclosure"><span class="m_12">特殊报价</span></div></div>
			</div>
		   <div class="box_3">
			 <h3><a href="single.html">House2</a></h3>
			 <div class="boxed_mini_details clearfix">
			      <span class="area first"><strong>车库</strong><i class="fa fa-plane icon1"> </i>
			      2</span>
			      <span class="status"><strong>洗澡</strong><i class="fa fa-retweet icon1"> </i>
			      2</span>
			      <span class="bedrooms last"><strong>床</strong><i class="fa fa-building-o icon1"> </i>
			      2</span>
             </div>
		   </div>
		</div>
		<div class="col-md-3 box_1">
			<a href="single.html"><img src="images/pic10.jpg" class="img-responsive" alt=""/></a>
		     <div class="box_2">
			  <div class="special-wrap"><div class="hot_offer"><span class="m_11">热提供</span></div><div class="forclosure"><span class="m_12">特殊报价</span></div></div>
			</div>
		   <div class="box_3">
			 <h3><a href="single.html">House3</a></h3>
			 <div class="boxed_mini_details clearfix">
			      <span class="area first"><strong>Garage</strong><i class="fa fa-plane icon1"> </i>
			      2</span>
			      <span class="status"><strong>Baths</strong><i class="fa fa-retweet icon1"> </i>
			      2</span>
			      <span class="bedrooms last"><strong>Beds</strong><i class="fa fa-building-o icon1"> </i>
			      2</span>
             </div>
		   </div>
		</div>
		<div class="col-md-3 box_1">
			<a href="single.html"><img src="images/pic11.jpg" class="img-responsive" alt=""/></a>
		     <div class="box_2">
			  <div class="special-wrap"><div class="hot_offer"><span class="m_11">热提供</span></div><div class="forclosure"><span class="m_12">特殊报价</span></div></div>
			</div>
		   <div class="box_3">
			 <h3><a href="single.html">House4</a></h3>
			 <div class="boxed_mini_details clearfix">
			      <span class="area first"><strong>Garage</strong><i class="fa fa-plane icon1"> </i>
			      2</span>
			      <span class="status"><strong>Baths</strong><i class="fa fa-retweet icon1"> </i>
			      2</span>
			      <span class="bedrooms last"><strong>Beds</strong><i class="fa fa-building-o icon1"> </i>
			      2</span>
             </div>
		   </div>
		</div>
		<div class="clearfix"> </div>
	</div>
	<!--房源信息-->
	   <div class="content_bottom">
		<!--类型出售、出租-->
		<div class="col-md-2">
			<div class="widget">
                <div class="title"><h3><i class="fa fa-meh-o men"> </i> 出售</h3></div>
                  <ul class="real-widget"><li><a href="#">商业(3)</a></li>
                	<li><a href="#">住房(16)</a><ul>
                		<li><a href="#">公寓</a></li>
                		<li><a href="#">凉亭</a></li>
                		<li><a href="#">别墅</a></li></ul>
                  </ul></li>
                </ul>
             </div>
             <div class="widget">
                <div class="title"><h3><i class="fa fa-meh-o men"> </i> 出租</h3></div>
                  <ul class="real-widget"><li><a href="#">商业(3)</a></li>
                	<li><a href="#">住房(16)</a><ul>
                		<li><a href="#">公寓</a></li>
                		<li><a href="#">凉亭</a></li>
                		<li><a href="#">别墅</a></li></ul>
                  </ul></li>
                </ul>
             </div>
		</div>
		<!--房源信息详情展示file:/D:/WWW/zulin/-->
		<div class="col-md-7">	
		   <div class="sap_tabs">
				<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
						 <div class="tab_grid">
							  <ul class="resp-tabs-list">
								  <li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span><a href="{{url('shows')}}">全部</a></span></li>
                                  <li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span><a href="{{url('chu')}}">已租</a></span></li>
								  <li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span><a href="{{url('wei')}}">未租</a></span></li>
								  <li class="resp-tab-item" aria-controls="tab_item-3" role="tab"><span><a href="{{url('shou')}}">已售</a></span></li>
								  <div class="clearfix"></div>
							  </ul>	
							</div>
							<!--房源信息循环遍历 -->
							    <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
							    	<ul class="tab_img tab_1">
							    	@foreach ($posts as $post)
									  <li>
										<div class="client_box1">
					       				    <img src="uploads/{{ $post->photo }}" class="img-responsive" alt="" width="500px" height="500px" />
					       				    <h5>$&nbsp;{{ $post->pay }}</h5>
					       				    <h3 class="m_1"><a href="javascript:void(0)" onclick="nae({{ $post->rent_id }})">{{ $post->title }}</a></h3>
					       				    <div>联系人：{{ $post->contacts }}</div>
					       				    <div>联系电话：{{ $post->phone }}</div>
					       				    <div class="boxed_mini_details clearfix">
			                                    <span class="area first"><strong>车库</strong><i class="fa fa-plane icon1"></i>
			                                    1</span>
			                                    <span class="status"><strong>洗澡</strong><i class="fa fa-retweet icon1"> </i>
			                                    2</span>
			                                    <span class="bedrooms last"><strong>床</strong><i class="fa fa-building-o icon1"></i>
			                                    5</span>
                                            </div>
					       				 </div>
										</li>
										@endforeach
										<div class="clearfix"></div>
									</ul>
							    	
							     </div>	
							     {!! $posts->render() !!}
				  </div>
           </div>
        </div>
        <!--房源代理商-->
        <div class="col-md-3">
			<div class="blog_list2">
				 <h3>Our Agents</h3>
					 <ul class="blog-list3 list_1">
					 	<li class="blog-list3-img"><img src="images/pic12.jpg" class="img-responsive" alt=""/></li>
					 	<li class="blog-list3-desc">
					 	  <h4><a href="#">张三</a></h4>
					 	    <ul class="admin_desc">
							    <li class="list_top"><i class="fa fa-phone-square ph"> </i>
								<p class="m_2">20-1257-2587</p></li>
								<div class="clearfix"> </div>
								<li class="list_top"><i class="fa fa-envelope ph"> </i>
								<p class="m_2"><a href="malito:mail@demolink.org">mail(at)realist.com</a></p></li>
								<div class="clearfix"> </div>
					        </ul>
		                 </li>
					 	<div class="clearfix"> </div>
					 </ul>
					 <ul class="blog-list3 list_1">
					 	<li class="blog-list3-img"><img src="images/pic13.jpg" class="img-responsive" alt=""/></li>
					 	<li class="blog-list3-desc">
					 	  <h4><a href="#">李四</a></h4>
					 	    <ul class="admin_desc">
							    <li class="list_top"><i class="fa fa-phone-square ph"> </i>
								<p class="m_2">20-1257-2587</p></li>
								<div class="clearfix"> </div>
								<li class="list_top"><i class="fa fa-envelope ph"> </i>
								<p class="m_2"><a href="malito:mail@demolink.org">mail(at)realist.com</a></p></li>
								<div class="clearfix"> </div>
					        </ul>
		                 </li>
					 	<div class="clearfix"> </div>
					 </ul>
					 <ul class="blog-list3">
					 	<li class="blog-list3-img"><img src="images/pic7.jpg" class="img-responsive" alt=""/></li>
					 	<li class="blog-list3-desc">
					 	  <h4><a href="#">王五</a></h4>
					 	    <ul class="admin_desc">
							    <li class="list_top"><i class="fa fa-phone-square ph"> </i>
								<p class="m_2">20-1257-2587</p></li>
								<div class="clearfix"> </div>
								<li class="list_top"><i class="fa fa-envelope ph"> </i>
								<p class="m_2"><a href="malito:mail@demolink.org">mail(at)realist.com</a></p></li>
								<div class="clearfix"> </div>
					        </ul>
		                 </li>
					 	<div class="clearfix"> </div>
					 </ul>
			    </div>
		</div>
        <div class="clearfix"> </div>
        </div>
        <div class="grid_4">

                <!--帮助的下拉视频开始-->
                <div class="col-md-7 grid_6">
					<center>
					<h1>帮助视频</h1>
					<select name='selectSS'id="selectSS" onChange="GaiBian(this)">
					  <option value='zxc'>http缓存之latmodified.mp4</option> 
					  <option value='zxc'>http缓存之缓存时机.mp4</option> 
					</select>
					<br />
					<a href="#" onclick="SetIndex(1)">change</a>
						<video src="video/http缓存之缓存时机.mp4" autoplay="autoplay" width="600px" height="400px" id="bofang"></video>
					</center>
					<script type="text/javascript" language="javascript">
						//视频
						var mp4=document.getElementById("mp4");
						//播放结束触发
						mp4.onended=function(){
							mp4.pause();
						}
						//播放时触发
						mp4.onplay=function(){
							//alert("play");
							//mp4.pause();//暂停
						}
						//内容改变事件
						function GaiBian(osel){
						    var aas=(osel.options[osel.selectedIndex].text);
						    //alert(aas);
						    $.ajax({
							   //type: "POST",
							   url: "videos",
							   data: {'xqid':aas},
							   success: function(msg){
							     //alert(  msg );
							    // var img=msg;
							      //$('#bofang').prop('src',msg);
							      var img=msg;
							      $('#bofang').prop('src',msg);
							   }
							});
						}
						function SetIndex(v){
						   
						  var s=document.getElementById('selectSS');
						  s.selectedIndex=v;
						  if(s.onchange)s.onchange();    
						}
					</script>
                </div>
                <!--帮助的下拉视频结束-->

                <!-- <div class="col-md-5 grid_5">
                    <div class="banner2">
                        
                        <div class="clearfix"> </div>
                    </div>
                </div>
                <div class="clearfix"> </div>-->
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
			<p>© 2015 All Rights Reseverd Template by <a href="#">W3layouts</a> </p>
	    </div>
	</div>
</div>
</body>
</html>		