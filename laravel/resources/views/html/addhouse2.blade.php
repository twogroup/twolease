<!DOCTYPE>
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf8" />
<meta http-equiv="X-UA-Compatible" content="IE=7, IE=9" />
<title>我要当房东-异家人租房</title>
<link href="http://assets.muniao.com/assets/2013/style/login.css?2015-8-13.18" rel="stylesheet" type="text/css" />

<link href="css/uploadfile/default.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="swfupload/swfupload.js"></script>
<script type="text/javascript" src="js/uploadfile/swfupload.queue.js"></script>
<script type="text/javascript" src="js/uploadfile/fileprogress.js"></script>
<script type="text/javascript" src="js/uploadfile/handlers.js"></script>

<script type="text/javascript" src="http://assets.muniao.com/assets/2013/script/iuiue.js"></script>

<!--上传 开始-->
<script type="text/javascript">
		var swfu;

		window.onload = function() {
			var settings = {
				flash_url : "swfupload/swfupload.swf",
				upload_url: "upload.php",	
				post_params: {"PHPSESSID" : "<?php echo session_id(); ?>"},
				file_size_limit : "100 MB",
				file_types : "*.*",
				file_types_description : "All Files",
				file_upload_limit : 20,  //配置上传个数
				file_queue_limit : 0,
				custom_settings : {
					progressTarget : "fsUploadProgress",
					cancelButtonId : "btnCancel"
				},
				debug: false,

				// Button settings
				button_image_url: "images/uploadfile/TestImageNoText_65x29.png",
				button_width: "65",
				button_height: "29",
				button_placeholder_id: "spanButtonPlaceHolder",
				button_text: '<span class="theFont">上传</span>',
				button_text_style: ".theFont { font-size: 16; }",
				button_text_left_padding: 12,
				button_text_top_padding: 3,
				
				file_queued_handler : fileQueued,
				file_queue_error_handler : fileQueueError,
				file_dialog_complete_handler : fileDialogComplete,
				upload_start_handler : uploadStart,
				upload_progress_handler : uploadProgress,
				upload_error_handler : uploadError,
				upload_success_handler : uploadSuccess,
				upload_complete_handler : uploadComplete,
				queue_complete_handler : queueComplete	
			};

			swfu = new SWFUpload(settings);
	     };
	</script>
<!--上传结束-->

<script type="text/javascript">
S("body").ready(function(){
	var navs=S("nav").tagname("li");
	for (var i=0;i<navs.length;i++){
		S(navs[i]).on("mouseover",function(e){
			e=e||window.event;var a=e.currentTarget||e.srcElement;
			if (!!a.href){a=a.parentNode;}
			for (var i=0;i<navs.length;i++){S(navs[i]).className("");}
			var navas=S("nav").tagname("a");for (var i=0;i<navas.length-2;i++){S(navas[i]).className("");}
			S(a).className("navlibg");
		});
		S(navs[i]).on("mouseout",function(e){
			e=e||window.event;var a=e.currentTarget||e.srcElement;
			if (!!a.href){a=a.parentNode;}
			S(a).className("");
		});
	};
});
</script>
</head>
<body>
<!--
<link href="http://assets.muniao.com/assets2/2015/style/??reset.css,s_style.css,w_css.css,style_single.css?2016-4-15.66" rel="stylesheet" type="text/css">
-->


<script>
S("body").ready(function(){
	function _b(){
		S("mylist_con1").hide();S("mylist1").className("Rnavbg");S("mylist_con2").hide();S("mylist2").className("Rnavbg2");S("mylist_con").hide();S("mylist").className("Rnavbg");
	}
	S("mylist").on("mouseover",function(e){
		_b();S("mylist_con").show();S("mylist").className("Rnavbg1");
	});
	S("mylist1").on("mouseover",function(e){
		_b();S("mylist_con1").show();S("mylist1").className("Rnavbg1");
	});
	S("mylist2").on("mouseover",function(e){
		_b();S("mylist_con2").show();S("mylist2").className("Rnavbg1");
	});
	S("body").on("mouseover",function(e){
		e=e||window.event;var a=e.target||e.srcElement;
		var noeve=false;
		for (var i=0;i<10;i++){
			if (a==null){break;}
			if (/((.)*noeve(.)*)$/.test(S(a).className())){noeve=true;break;}
			else if (/^(searchmain)$/.test(a.id)){noeve=true;break;}
			if (a==document.body){break;}
			a=a.parentNode;
		}
		if (noeve==false){_b();}
	});
});
</script>

<!--头部结束-->
<style>
.Rnavbg1{ color:#333;}
.Rnavbg2{background: url(http://assets.muniao.com/assets/2013/image/bgrnav2.jpg) no-repeat 14px 0;}
</style>
<!--登陆开始-->
<div class="main">
	<div class="procedure">
		<center>
		<ul>
			<li><span class="aOrange">填写房源基本信息</span><div class="probg1">1</div></li>
			<li><span>填写图片信息</span><div class="probg">2</div></li>
			<li><span>填写价格要求</span><div class="probg">3</div></li> 
			<!--<li><span>成功发布房源</span><div class="probg">4</div></li>-->
			<div class="clear"></div>
		</ul>
		</center>
	</div>
	<div class="oneselfT"><h4>异家人房源发布</h4></div>
	<div class="oneself">

<!--上传开始-->
<div id="content">
    <div>
        <form action="{{url('pic')}}" method="post" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
        <p> 请选择图片： <input type="file" name="upfile"/></p>
            <p><input type="submit" value="submit"/></p>
            </form>
    </div>
	{{--<form id="form1" action="index.php" method="post" enctype="multipart/form-data">--}}
		{{--<p>点击“浏览”按钮，选择您要上传的文档文件后，系统将自动上传并在完成后提示您。</p>--}}
		{{--<p>请勿上传包含中文文件名的文件！</p>--}}
		{{--<div class="fieldset flash" id="fsUploadProgress">--}}
			{{--<span class="legend">快速上传</span>--}}
	  {{--</div>--}}
		{{--<div id="divStatus">0 个文件已上传</div>--}}
			{{--<div>--}}
				{{--<span id="spanButtonPlaceHolder"></span>--}}
				{{--<input id="btnCancel" type="button" value="取消所有上传" onclick="swfu.cancelQueue();" disabled="disabled" style="margin-left: 2px; font-size: 8pt; height: 29px;" />--}}
			{{--</div>--}}

	{{--</form>--}}
</div>
<!--上传结束-->


<div id="fimguploadbg" class="fimguploadbg" style="display:none;"></div>
<iframe id='fimguploadIframe' class='fimguploadIframe' frameborder='0' ></iframe>

<!--step0-->
	</div>
</div>
<!--登陆结束-->
<!--
<link href="http://assets.muniao.com/assets2/2015/style/??reset.css,s_style.css,w_css.css,style_single.css?2015-10-22.83" rel="stylesheet" type="text/css">
-->
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
<div class="display">
<script type="text/javascript">
var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1000373664'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "v1.cnzz.com/z_stat.php%3Fid%3D1000373664' type='text/javascript'%3E%3C/script%3E"));
var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F59c4ac1df66ae9bdb2ce804f09084ea1' type='text/javascript'%3E%3C/script%3E"));
</script><script type="text/javascript">
var _py = _py || [];
_py.push(['a', 'x5s..6h9N25bYbmKSHNiH6LUtm0']);
_py.push(['domain','stats.bjglxf.com']);
_py.push(['e','']);
-function(d) {
var s = d.createElement('script'),
e = d.body.getElementsByTagName('script')[0]; e.parentNode.insertBefore(s, e),
f = 'https:' == location.protocol;
s.src = (f ? 'https' : 'http') + '://'+(f?'sjs.bjglxf.com ':'js.bjglxf.com')+'/j/adv.js';
}(document);
</script>
<noscript><img src="//stats.bjglxf.com/adv.gif?a=x5s..6h9N25bYbmKSHNiH6LUtm0&e=" style="display:none;"/></noscript>
</div>
<script type="text/javascript" src="http://webim.muniao.com:8080/webim2/?action=boot"></script>
</body>
</html>

