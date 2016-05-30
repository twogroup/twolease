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
    <link rel="stylesheet" type="text/css" href="css/search-form.css">
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

<style type="text/css">
  *{ margin:0; padding:0; }
  img{ display: block; border:none;}
  ul,li{ list-style: none;}
  .lubo{ width: 100%; min-width:1000px;clear: both; position: relative; height:368px;}
  .lubo_box{ position: relative; width: 100%; height:368px; }
  .lubo_box li{ float: left;position: absolute; top: 0; left: 0; width: 100%; height:368px; opacity: 0;filter:alpha(opacity=0);}
  .lubo_box li a{ display: block;width: 100%;  height: 440px;}

  .lubo_box li img{ width: 100%; height: 440px;}

  /*圆点*/
  /*.cir_box{ overflow: hidden; position: absolute; z-index: 100; top: 330px;}
  .cir_box li{ float: left; width: 30px; height: 5px; margin:0 5px; cursor: pointer; background: #fff; opacity: 0.8;filter:alpha(opacity=80);}
  .cir_on{ background: #000 !important;}
*/
  /*按钮*/
  .lubo_btn{ position: absolute; width: 100%; top: 200px;}
  .left_btn, .right_btn{ width: 30px; height: 80px; background: #000;opacity: 0.8;filter:alpha(opacity=80); cursor: pointer; color: #fff; line-height: 80px; font-size: 30px; text-align: center;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;}
  .left_btn{ float: left;}
  .right_btn{ float: right;}
</style>
<script type="text/javascript" src="js/lubotu.js"></script>
<script type="text/javascript">
$(function(){
    $(".lubo").lubo({
    });
})
</script>
<!-- 搜索 -->
<script type="text/javascript">
    function searchToggle(obj, evt){
        var lookup = $(obj).closest('.search-wrapper');
        //alert(lookup)
        if(!lookup.hasClass('active')){
            lookup.addClass('active');
            evt.preventDefault();
        }
        else if(lookup.hasClass('active') && $(obj).closest('.input-holder').length == 0){
            lookup.removeClass('active');
            lookup.find('.search-input').val('');
             lookup.find('.result-lookup').fadeOut(100, function(){$(this).empty();});
        }
    }
    function submitFn(obj, evt){
        value = $(obj).find('.search-input').val().trim();
        //_html = "亲，你要搜索的是: ";
        if(!value.length){
            _html = "<font size='' color='red'><strong>对不起亲，城市不能为空！</strong></font>";
        }
        else{
            $.ajax({
        type: "GET",
        url: "{{url('select')}}",
        dataType: ""
      });
        }
        $(obj).find('.result-lookup').html('<span>' + _html + '</span>');
        $(obj).find('.result-lookup').fadeIn(100);
        evt.preventDefault();
    }
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
    <div class="lubo">
      <ul class="lubo_box">
        <li style=" opacity: 1;filter:alpha(opacity=50);"><a href="" style="background:url(images/banner1.jpg) center top no-repeat"></a></li>
        <li><a href="" style="background:url(images/banner2.jpg) center top no-repeat"></a></li>
        <li><a href="" style="background:url(images/banner3.jpg) center top no-repeat"></a></li>
        <li><a href="" style="background:url(images/banner4.jpg) center top no-repeat"></a></li>
        <li><a href="" style="background:url(images/banner1.jpg) center top no-repeat"></a></li>
        <li><a href="" style="background:url(images/banner2.jpg) center top no-repeat"></a></li>
        <li><a href="" style="background:url(images/banner3.jpg) center top no-repeat"></a></li>
        <li><a href="" style="background:url(images/banner4.jpg) center top no-repeat"></a></li>
      </ul>
    </div>
</div>
<div class="smart_details">
    <div class="container">
        <div class="lookup">
          <!-- <form ;onsubmit="submitFn(this, event)"> -->
          <form action="{{url('serch')}}"  method="post">
          <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                  <div class="search-wrapper">
                      <div class="input-holder">
                          <input type="text" class="search-input" name="serch" id="area" placeholder="请输入城市关键字" />
                          <button class="search-icon" onclick="searchToggle(this, event);"><span><input type="submit" value=""></span></button>
                      </div>
                      <span class="close" onclick="searchToggle(this, event);"></span>
                      <div class="result-lookup"></div>
                  </div>
              </form>
        </div>
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
                    <h3>异家人客服服务</h3>
                    <ul class="blog-list3 list_1">
                        <li class="blog-list3-img"><img src="images/me1.jpg" class="img-responsive" alt=""/></li>
                        <li class="blog-list3-desc">
                            <h4><i class="fa fa-meh-o men"></i><a href="#">张晨杰</a></h4>
                            <ul class="admin_desc">
                                <li class="list_top"><i class="fa fa-phone-square ph"> </i>
                                    <p class="m_2">18613383140</p></li>
                                <div class="clearfix"> </div>
                                <li class="list_top"><i class="fa fa-envelope ph"> </i>
                                    <p class="m_2"><a href="http://mail.163.com/">18613383140@163.com</a></p></li>
                                <div class="clearfix"> </div>
                            </ul>
                        </li>
                        <div class="clearfix"> </div>
                    </ul>
                    <ul class="blog-list3 list_1">
                        <li class="blog-list3-img"><img src="images/ws.jpg" class="img-responsive" alt=""/></li>
                        <li class="blog-list3-desc">
                            <h4><i class="fa fa-meh-o men"></i><a href="#">韦森</a></h4>
                            <ul class="admin_desc">
                                <li class="list_top"><i class="fa fa-phone-square ph"> </i>
                                    <p class="m_2">18801432060</p></li>
                                <div class="clearfix"> </div>
                                <li class="list_top"><i class="fa fa-envelope ph"> </i>
                                    <p class="m_2"><a href="http://mail.163.com/">w54supersen@163.com</a></p></li>
                                <div class="clearfix"> </div>
                            </ul>
                        </li>
                        <div class="clearfix"> </div>
                    </ul>
                    <ul class="blog-list3 list_1">
                        <li class="blog-list3-img"><img src="images/rp.jpg" class="img-responsive" alt=""/></li>
                        <li class="blog-list3-desc">
                            <h4><i class="fa fa-meh-o men"></i><a href="#">任鹏</a></h4>
                            <ul class="admin_desc">
                                <li class="list_top"><i class="fa fa-phone-square ph"> </i>
                                    <p class="m_2">13716725971</p></li>
                                <div class="clearfix"> </div>
                                <li class="list_top"><i class="fa fa-envelope ph"> </i>
                                    <p class="m_2"><a href="http://mail.163.com/">13716725971@163.com</a></p></li>
                                <div class="clearfix"> </div>
                            </ul>
                        </li>
                        <div class="clearfix"> </div>
                    </ul>
                    <ul class="blog-list3 list_1">
                        <li class="blog-list3-img"><img src="images/pic7.jpg" class="img-responsive" alt=""/></li>
                        <li class="blog-list3-desc">
                            <h4><i class="fa fa-meh-o men"></i><a href="#">王超</a></h4>
                            <ul class="admin_desc">
                                <li class="list_top"><i class="fa fa-phone-square ph"> </i>
                                    <p class="m_2">18101367721</p></li>
                                <div class="clearfix"> </div>
                                <li class="list_top"><i class="fa fa-envelope ph"> </i>
                                    <p class="m_2"><a href="http://mail.163.com/">18101367721@163.com</a></p></li>
                                <div class="clearfix"> </div>
                            </ul>
                        </li>
                        <div class="clearfix"> </div>
                    </ul>
                    <ul class="blog-list3 list_1">
                        <li class="blog-list3-img"><img src="images/a7.jpg" class="img-responsive" alt=""/></li>
                        <li class="blog-list3-desc">
                            <h4><i class="fa fa-meh-o men"></i><a href="#">王瑞雪</a></h4>
                            <ul class="admin_desc">
                                <li class="list_top"><i class="fa fa-phone-square ph"> </i>
                                    <p class="m_2">15801103411</p></li>
                                <div class="clearfix"> </div>
                                <li class="list_top"><i class="fa fa-envelope ph"> </i>
                                    <p class="m_2"><a href="http://mail.163.com/">15801103411@163.com</a></p></li>
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