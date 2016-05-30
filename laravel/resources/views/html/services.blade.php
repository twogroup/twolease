<?php
$conditions = array('region','price','area','housetype');//要进行筛选的字段放在这里
$region = $price = $area = $housetype='';//先给需要筛选的字段赋空值，这些值将输出到页面的hidden fileds 中
//以下循环给已经进行的筛选赋值，以便能够在下一次筛选中保留
foreach($conditions as $value){
    if(isset($_GET[$value])){
        $value = $_GET[$value];
    }
}

?>


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

<!-- 多条件搜索 样式 start -->
    <link rel="stylesheet" type="text/css" href="style/list.css"/>
    <link rel="stylesheet" type="text/css" href="style/manhuaDate.1.0.css"/>
    <script type="text/javascript" src="js/js/jquery-1.5.1.js"></script><!--日期控件，JS库版本不能过高否则tab会失效-->
    <script type="text/javascript" src="js/js/datejs.js"></script>
    <script type="text/javascript" src="js/js/ui.tab.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            var tab = new $.fn.tab({
                tabList:"#demo1 .ui-tab-container .ui-tab-list li",
                contentList:"#demo1 .ui-tab-container .ui-tab-content"
            });
            var tab = new $.fn.tab({
                tabList:"#demo1 .ui-tab-container .ui-tab-list2 li",
                contentList:"#demo1 .ui-tab-container .ui-tab-content2"
            });
        });
    </script>
    <script type="text/javascript">
        $(function (){
            $("input.mh_date").datejs({
                Event : "click",//可选
                Left : 0,//弹出时间停靠的左边位置
                Top : -16,//弹出时间停靠的顶部边位置
                fuhao : "-",//日期连接符默认为-
                isTime : false,//是否开启时间值默认为false
                beginY : 2010,//年份的开始默认为1949
                endY :2015//年份的结束默认为2049
            });

        });
    </script>
    <script type="text/javascript">
        $(document).ready(function(e) {
            $("#selectList").find(".more").toggle(function(){
                $(this).addClass("more_bg");
                $(".more-none").show()
            },function(){
                $(this).removeClass("more_bg");
                $(".more-none").hide()
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            var taboy_box=$(".lefttable-list");
            taboy_box.children("tbody").find("tr:gt(2)").hide();
            $(".leftbox-morea").toggle(function(){
                        $(this).parent().prev().find("tr").show();
                        $(this).addClass("more-i")
                    },function(){
                        $(this).removeClass("more-i");
                        $(this).parent().prev().children("tbody").find("tr:gt(2)").hide();
                    }
            );
        });
    </script>
<!-- 多条件搜索 end -->



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

<script>
    function Filter(a,b){
        var $ = function(e){return document.getElementById(e);}
        var ipts = $('filterForm').getElementsByTagName('input'),result=[];
        for(var i=0,l=ipts.length;i<l;i++){
            if(ipts[i].getAttribute('to')=='filter'){
                result.push(ipts[i]);

            }
        }
        if($(a)){
            $(a).value = b;
            for(var j=0,len=result.length;j<len;j++){
                if(result[j].value==''){
                    result[j].parentNode.removeChild(result[j]);
                }
            }
            document.forms['filterForm'].submit();
        }
        return false;
    }
</script>
<div class="about_top">
    <div class="container">
    <!--  多条件 搜索 主体 start -->
        <div class="w1200">
            <div class="list-screen">
                <div class="screen-top" style="position:relative;">
                    <link href="http://esf.js.soufunimg.com/esf/zu/css/list2016.css?v=201605260111" rel="stylesheet" />
                    <!--搜索头文件开始-->
                    <div class="searchbg">
                        <div class="fsearch_con">
                            <!--fangsearch start-->
                            <form id="form_rent" name="form_rent"  action="{{url('serch')}}" method="post">
                    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                    <input type="text" id="input_key" name="serval" class="inputstyle_out" autocomplete="off" placeholder="输入关键字(小区名或地段名)" />
                                <input type="submit" value="搜 索" class="button" id="" />
                            </form>
                        </div>
                        <!--fangsearch end-->
                        <div class="clear">
                        </div>
                    </div>
                </div>

                <form  id="filterForm" action="{{url('area')}}" method="get">
                    <input to="filter" type="hidden" id="region" name="region" value="{{$region}}" />
                    <input to="filter" type="hidden" id="price" name="price" value="{{$price}}" />
                    <input to="filter" type="hidden" id="area" name="area" value="{{$area}}" />
                    <input to="filter" type="hidden" id="housetype" name="housetype" value="{{$housetype}}" />
                <div style="padding:10px 30px 10px 10px;"><div class="screen-address">
                        <div class="list-tab">
                            <div id="demo1" class="clearfix">
                                <div class="jiud-name">区域</div>
                                <div class="ui-tab-container">
                                    <ul class="clearfix ui-tab-list">
                                        {{--<li class="ui-tab-active">按区域</li>--}}
                                        {{--<li>交通枢纽</li>--}}
                                        <li>按区域</li>
                                        <li>按地铁</li>
                                    </ul>
                                    <div class="ui-tab-bd">
                                        <div class="ui-tab-content clearfix">
                                            {{--<ul class="clearfix ui-tab-list2">--}}
                                                {{--<li class="ui-tab-active">景点</li>--}}
                                                {{--<li>交通枢纽</li>--}}
                                            {{--</ul>--}}
                                            <div class="ui-tab-bd">
                                                <div class="ui-tab-content2 clearfix">

                                                    <p>
                                                        <label>
                                                            <input name="tabrad" type="radio" value="朝阳" />
                                                            <a href="javascript:Filter('region','朝阳');" >朝阳</a></label>
                                                        <label>
                                                            <input name="tabrad" type="radio" value="海淀" />
                                                            <a href="javascript:Filter('region','海淀');" >海淀</a></label>
                                                        <label>
                                                            <input name="tabrad" id="" type="radio" value="丰台" />
                                                            <a href="javascript:Filter('region','丰台');" >丰台 </a></label>
                                                        <label>
                                                            <input name="tabrad" id="" type="radio" value="东城" />
                                                            <a href="javascript:Filter('region','东城');"  >东城</a></label>
                                                        <label>
                                                            <input name="tabrad" id="" type="radio" value="西城" />
                                                            <a href="javascript:Filter('region','西城');"  >西城</a></label>
                                                        <label>
                                                            <input name="tabrad" id="" type="radio"  />
                                                            <a href="javascript:Filter('region','石景山');"  >石景山</a></label>
                                                        <label>
                                                            <input name="tabrad" id="" type="radio"  />
                                                            <a href="javascript:Filter('region','大兴');"  >大兴</a></label>
                                                        <label>
                                                            <input name="tabrad" id="" type="radio" />
                                                            <a href="javascript:Filter('region','通州');"  >通州</a></label>
                                                        <label>
                                                            <input name="tabrad" id="" type="radio"  />
                                                            <a href="javascript:Filter('region','顺义');"  >顺义</a></label>
                                                        <label>
                                                            <input name="tabrad" id="" type="radio"  />
                                                            <a href="javascript:Filter('region','昌平');"  >昌平</a></label>
                                                        {{--<label>--}}
                                                        {{--<input name="radio2" type="radio" value="" />--}}
                                                        {{--<a href="javascript:;"values1="600" attrval="5000以上">8000-10000元</a></label>--}}
                                                    </p>
                                                   {{--@foreach($sub_area as $area)--}}
                                                    {{--<p>--}}
                                                        {{--<label>--}}
                                                            {{----}}
                                                            {{--@if($area->area_name !="")--}}
                                                            {{--<input name="tabrad" id="area_{{$area->sub_id}}" type="radio" value="{{$area->area_name}}" />--}}
                                                                {{--<a href="javascript:Filter('tabrad','{{$area->area_name}}');">{{$area->area_name}}</a>--}}

                                                                {{--<script>--}}
                                                                    {{--$("#area_"+"{{$area->sub_id}}").click(function(){--}}
                                                                        {{--var area = $("#area_"+"{{$area->sub_id}}").val();--}}
                                                                        {{--var str="";--}}
                                                                        {{--$.get("area",{'area':area}, function(content){--}}

                                                                            {{--for(var i=0;i<content['data'].length;i++){--}}

                                                                            {{--str+='<div class="col-md-3 service_box">' ;--}}
                                                                            {{--str+='<a class="fancybox"  href="uploads/'+ content['data'][i]['photo']+'"  data-fancybox-group="gallery" title="Product Name">';--}}
                                                                            {{--str+='<img src="uploads/'+ content['data'][i]['photo']+'"  width="400px" class="img-responsive" alt=""/><span> </span></a>';--}}
                                                                            {{--str+='<h4><a href="javascript:void(0)" onclick="nae('+ content['data'][i]['rent_id']+')">'+ content['data'][i]['title']+'</a></h4>';--}}
                                                                            {{--str+='<p>'+ content['data'][i]['area']+''+ content['data'][i]['community']+''+ content['data'][i]['content']+'</p>';--}}
                                                                            {{--str+= '</div>';--}}
                                                                            {{--}--}}

                                                                            {{--$("#content").html(str);--}}
                                                                        {{--});--}}
                                                                    {{--});--}}


                                                                {{--</script>--}}
                                                            {{--@endif--}}
                                                        {{--</label>--}}
                                                    {{--</p>--}}
                                                       {{--@endforeach--}}
                                                </div>

                                            </div>
                                        </div>

                                        <div class="ui-tab-content clearfix" style="display:none">
                                            @foreach($sub_area as $subway)
                                            <p>
                                                <label>
                                                    <input name="tabrad1" type="radio" value="{{$subway->sub_id}}" />
                                                   {{$subway->sub_name}}</label>
                                            </p>
                                            @endforeach
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="screen-term">
                        <div class="selectNumberScreen">
                            <div id="selectList" class="screenBox screenBackground">
                                <dl class="listIndex" attr="价格范围">
                                    <dt>租金</dt>
                                    <dd>
                                        <label><a href="javascript:Filter('price','不限');" >不限</a></label>
                                        <label>
                                            <input name="radio2" type="radio" value="1500" />
                                            <a href="javascript:Filter('price','1500');" >1500元以下</a></label>
                                        <label>
                                            <input name="radio2" id="" type="radio" value="1500-3000" />
                                            <a href="javascript:Filter('price','1500-3000');" >1500-3000元 </a></label>
                                        <label>
                                            <input name="radio2" id="" type="radio" value="3000-5000" />
                                            <a href="javascript:Filter('price','3000-5000');"  >3000-5000元</a></label>
                                        <label>
                                            <input name="radio2" id="" type="radio" value="5000" />
                                            <a href="javascript:Filter('price','5000');"  >5000元以上</a></label>
                                        {{--<label>--}}
                                            {{--<input name="radio2" type="radio" value="" />--}}
                                            {{--<a href="javascript:;"values1="600" attrval="5000以上">8000-10000元</a></label>--}}
                                        <div class="custom"><span>自定义</span>&nbsp;
                                            <input name="cust" type="text" id="custext1"/>
                                            &nbsp;-&nbsp;
                                            <input name="cust1" type="text" id="custext2"/>
                                            <input name="cust2" type="button" id="cusbtn"/>
                                        </div>
                                    </dd>
                                </dl>
                                <dl class=" listIndex" attr="terminal_os_s">
                                    <dt>面积</dt>
                                    <dd id="rrr">
                                        <label><a href="javascript:Filter('area','');" values2="" values1="" attrval="不限">不限</a> </label>
                                        <label>
                                            <input name="checkbox2" type="checkbox" value="" autocomplete="off"/>
                                            <a href="javascript:Filter('area','50');"  values2="" values1="" attrval="android"> 50m2</a> </label>
                                        <label>
                                            <input name="checkbox2" type="checkbox" value="" autocomplete="off"/>
                                            <a href="javascript:Filter('area','50-70');"  values2="" values1="" attrval="symbian">50-70m2</a></label>
                                        <label>
                                            <input name="checkbox2" type="checkbox" value="" autocomplete="off"/>
                                            <a href="javascript:Filter('area','70-90');" values2="" values1="" attrval="百度易平台">70-90m2</a></label>
                                        <label>
                                            <input name="checkbox2" type="checkbox" value="" autocomplete="off"/>
                                            <a href="javascript:Filter('area','90-110');" values2="" values1="" attrval="">90-110m2</a></label>
                                        {{--<label>--}}
                                            {{--<input name="checkbox2" type="checkbox" value="" autocomplete="off"/>--}}
                                            {{--<a href="javascript:;" values2="" values1="" attrval="百度易平台">110-130m2</a></label>--}}
                                        {{--<label>--}}
                                            {{--<input name="checkbox2" type="checkbox" value="" autocomplete="off"/>--}}
                                            {{--<a href="javascript:;" values2="" values1="" attrval="百度易平台">130-150m2</a></label>--}}
                                        {{--<label>--}}
                                            {{--<input name="checkbox2" type="checkbox" value="" autocomplete="off"/>--}}
                                            {{--<a href="javascript:;" values2="" values1="" attrval="百度易平台">150-200m2</a></label>--}}
                                        {{--<label>--}}
                                            {{--<input name="checkbox2" type="checkbox" value="" autocomplete="off"/>--}}
                                            {{--<a href="javascript:;" values2="" values1="" attrval="百度易平台">200m2以上</a></label>--}}
                                        <div class="custom"><span></span>&nbsp;
                                            <input name="" type="text" id="custext1"/>
                                            &nbsp;-&nbsp;
                                            <input name="" type="text" id="custext2"/>
                                            <input name="" type="button" id="cusbtn"/>
                                        </div>
                                    </dd>
                                </dl>
                                <dl class="listIndex" attr="terminal_brand_s">
                                    <dt>户型</dt>
                                    <dd data-more=true>
                                        <label><a href="javascript:;" values2="" values1="" attrval="不限">不限</a></label>
                                        <label>
                                            <input name="checkbox2" type="checkbox" value="" autocomplete="off"/>
                                            <a href="javascript:Filter('housetype','一居');" values2="" values1="" attrval="一居">一居</a></label>
                                        <label>
                                            <input name="checkbox2" type="checkbox" value="" autocomplete="off"/>
                                            <a href="javascript:Filter('housetype','二居');" values2="" values1="" attrval="二居">二居</a> </label>
                                        <label>
                                            <input name="checkbox2" type="checkbox" value="" autocomplete="off"/>
                                            <a href="javascript:Filter('housetype','三居');" values2="" values1="" attrval="三居">三居</a> </label>
                                        <label>
                                            <input name="checkbox2" type="checkbox" value="" autocomplete="off"/>
                                            <a href="javascript:Filter('housetype','四居');" values2="" values1="" attrval="四居">四居</a></label>
                                        <label>
                                            <input name="checkbox2" type="checkbox" value="" autocomplete="off"/>
                                            <a href="javascript:Filter('housetype','五居');" values2="" values1="" attrval="五居">五居</a></label>
                                        <label>
                                            <input name="checkbox2" type="checkbox" value="" autocomplete="off"/>
                                            <a href="javascript:Filter('housetype','六居');" values2="" values1="" attrval="六居以上">六居以上</a></label>
                                        {{--<span class="more"><em class="open"></em>更多</span>--}}
                                    </dd>
                                </dl>
                                {{--<dl class="listIndex more-none" attr="terminal_brand_s"  style="display:none;border:none">--}}
                                    {{--<dt style='visibility:hidden'>主题风格</dt>--}}
                                    {{--<dd >--}}
                                        {{--<label style='visibility:hidden'><a href="javascript:;" values2="" values1="" attrval="不限">不限</a></label>--}}
                                        {{--<form action="" method="get">--}}
                                            {{--<label><input name="checkbox2" type="checkbox" value="" /><a href="javascript:;" values2="" values1="" attrval="华为">精品酒店2</a></label>--}}
                                            {{--<label><input name="checkbox2" type="checkbox" value="" /><a href="javascript:;" values2="" values1="" attrval="华为">精品酒店3</a> </label>--}}
                                            {{--<label><input name="checkbox2" type="checkbox" value="" /><a href="javascript:;" values2="" values1="" attrval="华为">精品酒店4</a> </label>--}}
                                        {{--</form>--}}
                                {{--</dl>--}}
                            </div>
                        </div>
                    </div>

                </div>

                <div class="hasBeenSelected clearfix">
                    {{--<span id="time-num"><font>208</font>家酒店</span>--}}
                    <dt style="float: left">本次找房条件：</dt>
                    <div style="float:right;" class="eliminateCriteria">【清空全部】 </div>
                    <dl>

                        <dd style="DISPLAY: none" class=clearDd>
                            <div class=clearList></div>
                    </dl>
                </div>
                <script type="text/javascript" src="js/js/shaixuan.js"></script>
                </form>
            </div>
        </div>


    <!--  多条件 搜索 主体 end -->

       <div class="about" id="content">

       	 <div class="service_grid" >

             @foreach ($posts as $val)
	       	<div class="col-md-3 service_box">
	       		<a class="fancybox"  href="uploads/{{ $val->photo }}"  data-fancybox-group="gallery" title="Product Name"><img src="uploads/{{ $val->photo }}" width="400px" class="img-responsive" alt=""/><span> </span></a>
			    <h4><a href="javascript:void(0)" onclick="nae({{ $val->rent_id }})">{{ $val->title }}</a></h4>
				<p>{{ $val->area }}{{ $val->community }}{{ $val->content }}</p>
	       	</div>
	      @endforeach

	       	<div class="clearfix"> </div>
         </div>
           {{--{!! $posts->render() !!}--}}
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
{{--<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>--}}
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