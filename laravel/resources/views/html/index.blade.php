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
    {{--<link href='http://fonts.googleapis.com/css?family=Grand+Hotel:400' rel='stylesheet' type='text/css'>--}}
    {{--<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet:100,300,400,500,600,700,800,900' type='text/css'>--}}

    <!--a标签传值（传ID至控制器）-->
    <script>
        function nae(id)
        {

            var data={'xqid':id}
            //alert(data);die;
            var url="showsxq";
            $.get(url,data,function(msg){

                location.href ='{{url('zhan')}}?id='+msg;
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
        <div class="grid_1">
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
            </br>

            <div class="col-md-7">
                <div class="sap_tabs">
                    <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
                        <div class="tab_grid">
                            <ul class="resp-tabs-list">
                                <li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>全部</span></li>
                                <li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>热门房源</span></li>
                                <li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span>增值房源</span></li>
                                <div class="clearfix"></div>
                            </ul>
                        </div>
                        <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
                            <ul class="tab_img tab_1">
                                @foreach ($posts as $post)
                                    <li class="">
                                        <div class="client_box1">
                                            <a href="javascript:void(0)" onclick="nae({{ $post->ava_id }})">
                                                <img src="uploads/{{ $post->origintal_img}}" class="img-responsive" alt="" /></a>

                                            <div class="box_type">$&nbsp;{{ $post->pay }}</div>

                                            <h3 class="m_1"><a href="javascript:void(0)" onclick="nae({{ $post->ava_id }})">{{ $post->house_title }}</a></h3>
                                            <div>
                                                <h5 class="m_1"><strong><span >{{$post->house_type}} &nbsp;{{$post->house_size}} m²</span></strong> </h5>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                                <div class="clearfix"></div>
                            </ul>
                            {!! $posts->render() !!}
                        </div>

                        <!--  热门房源 -->
                        <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">

                            <ul class="tab_img">
                                @foreach($hot as $ot)
                                    <li>
                                        <div class="client_box1">
                                            <img src="uploads/{{ $ot->origintal_img}}" class="img-responsive" alt=""/>
                                            <div class="box_type">$&nbsp;{{ $ot->pay }}</div>
                                            <h3 class="m_1"><a href="javascript:void(0)" onclick="nae({{ $ot->ava_id }})">{{ $ot->house_title }}</a></h3>
                                            <div>
                                                <h5 class="m_1"><strong><span >{{$ot->house_type}} &nbsp;{{$ot->house_size}} m²</span></strong> </h5>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                                <div class="clearfix"></div>
                            </ul>
                            {!! $hot->render() !!}
                        </div>
                        <!--  增值 房源 -->
                        <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-2">
                            <ul class="tab_img">
                                @foreach($apprec as $rec)
                                    <li>
                                        <div class="client_box1">
                                            <img src="uploads/{{ $rec->origintal_img}}" class="img-responsive" alt=""/>
                                            <div class="box_type">$&nbsp;{{ $rec->pay }}</div>
                                            <h3 class="m_1"><a href="javascript:void(0)" onclick="nae({{ $rec->ava_id }})">{{ $rec->house_title }}</a></h3>
                                            <div>
                                                <h5 class="m_1"><strong><span >{{$rec->house_type}} &nbsp;{{$rec->house_size}} m²</span></strong> </h5>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                                <div class="clearfix"></div>
                            </ul>
                            {!! $apprec->render() !!}
                        </div>
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
    </div>
    <!--底部信息 end -->
    <div class="copy">
        @include('components.footer')
    </div>
    <!--底部信息 start-->

</div>
</body>


</html>