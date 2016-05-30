<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="description" content="基于HTML5的多图Ajax上传" />
<meta name="description" content="韦森web前端学习实例页面 基于HTML5的多图Ajax上传" />
<meta name="keywords" content="web前端, HTML5, ajax, javascript, 图片上传" />
<meta name="author" content="韦森, weisen" />


<link href="http://assets.muniao.com/assets/2013/style/login.css?2015-8-13.18" rel="stylesheet" type="text/css" />

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


<link rel="stylesheet" href="../css/demo.css" type="text/css" />
<style>
.upload_box{width:800px; margin:1em auto;}
.upload_main{border-width:1px 1px 2px; border-style:solid; border-color:#ccc #ccc #ddd; background-color:#fbfbfb;}
.upload_choose{padding:1em;}
.upload_drag_area{display:inline-block; width:60%; padding:4em 0; margin-left:.5em; border:1px dashed #ddd; background:#fff url(http://rescdn.qqmail.com/zh_CN/htmledition/images/func/dragfile07bf38.gif) no-repeat 20px center; color:#999; text-align:center; vertical-align:middle;}
.upload_drag_hover{border-color:#069; box-shadow:inset 2px 2px 4px rgba(0, 0, 0, .5); color:#333;}
.upload_preview{border-top:1px solid #bbb; border-bottom:1px solid #bbb; background-color:#fff; overflow:hidden; _zoom:1;}
.upload_append_list{height:300px; padding:0 1em; float:left; position:relative;}
.upload_delete{margin-left:2em;}
.upload_image{max-height:250px; padding:5px;}
.upload_submit{padding-top:1em; padding-left:1em;}
.upload_submit_btn{display:none; height:32px; font-size:14px;}
.upload_loading{height:250px; background:url(http://www.zhangxinxu.com/study/image/loading.gif) no-repeat center;}
.upload_progress{display:none; padding:5px; border-radius:10px; color:#fff; background-color:rgba(0,0,0,.6); position:absolute; left:25px; top:45px;}
</style>
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


<div class="main">
	<div class="procedure">
		<ul>
			<li><span>填写房源基本信息</span><div class="probg">1</div></li>
			<li><span class="aOrange">填写图片信息</span><div class="probg1">2</div></li>
			<li><span>填写价格要求</span><div class="probg">3</div></li>
			<li><span>成功发布房源</span><div class="probg">4</div></li>
			<div class="clear"></div>
		</ul>
	</div></br>
	<div class="oneselfT"><h4>	房源发布</h4></div>
	<div class="oneself">


    <div id="body" class="light">
    	<div id="content" class="show">
            <div class="demo">
            	<form id="uploadForm" action="upload2.php" method="post" enctype="multipart/form-data">

					<input type="hidden" name="_token" value="{{csrf_token()}}">

					

                    <div class="upload_box">
                        <div class="upload_main">
                            <div class="upload_choose">
                                <input id="fileImage" type="file" size="30" name="fileselect[]" multiple />
                                <span id="fileDragArea" class="upload_drag_area">或者将图片拖到此处</span>
                            </div>
                            <div id="preview" class="upload_preview"></div>
                        </div>
                        <div class="upload_submit">
                            <button type="button" id="fileSubmit" class="upload_submit_btn">确认上传图片</button>
                        </div>
                        <div id="uploadInf" class="upload_inf"></div>
                        <center>
                    		<input type="button" class="ueditbtn2" value="" />
                    	</center>
                    </div>
                </form>
            </div>
        </div>       
    </div>

    </div>


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

</div>
 
<script src="http://libs.baidu.com/jquery/1.4.4/jquery.js"></script>
<script src="js/uploadfile/zxxFile.js"></script>
<script>
var params = {
	fileInput: $("#fileImage").get(0),
	dragDrop: $("#fileDragArea").get(0),
	upButton: $("#fileSubmit").get(0),
	url: $("#uploadForm").attr("action"),
	filter: function(files) {
		var arrFiles = [];
		for (var i = 0, file; file = files[i]; i++) {
			if (file.type.indexOf("image") == 0) {
				//alert(file.name);die;     		//file.name图片名
				if (file.size >= 1024000) {
					alert('您这张"'+ file.name +'"图片大小过大，应小于1M');	
				} else {
					arrFiles.push(file);		//图片数
				}			
			} else {
				alert('文件"' + file.name + '"不是图片。');	
			}
		}
		return arrFiles;
	},
	onSelect: function(files) {
		var html = '', i = 0;
		$("#preview").html('<div class="upload_loading"></div>');
		var funAppendImage = function() {
			file = files[i];
			if (file) {
				var reader = new FileReader()
				reader.onload = function(e) {
					html = html + '<div id="uploadList_'+ i +'" class="upload_append_list"><p><strong>' + file.name + '</strong>'+ 
						'<a href="javascript:" class="upload_delete" title="删除" data-index="'+ i +'">删除</a><br />' +
						'<img id="uploadImage_' + i + '" src="' + e.target.result + '" class="upload_image" /></p>'+ 
						'<span id="uploadProgress_' + i + '" class="upload_progress"></span>' +
					'</div>';
					i++;
					funAppendImage();
				}
				reader.readAsDataURL(file);
			} else {
				$("#preview").html(html);
				if (html) {
					//删除方法
					$(".upload_delete").click(function() {
						ZXXFILE.funDeleteFile(files[parseInt($(this).attr("data-index"))]);
						return false;	
					});
					//提交按钮显示
					$("#fileSubmit").show();	
				} else {
					//提交按钮隐藏
					$("#fileSubmit").hide();	
				}
			}
		};
		funAppendImage();		
	},
	onDelete: function(file) {
		$("#uploadList_" + file.index).fadeOut();
	},
	onDragOver: function() {
		$(this).addClass("upload_drag_hover");
	},
	onDragLeave: function() {
		$(this).removeClass("upload_drag_hover");
	},
	onProgress: function(file, loaded, total) {
		var eleProgress = $("#uploadProgress_" + file.index), percent = (loaded / total * 100).toFixed(2) + '%';
		eleProgress.show().html(percent);
	},
	onSuccess: function(file, response) {
		$("#uploadInf").append("<p>上传成功，图片地址是：" + response + "</p>");
	},
	onFailure: function(file) {
		$("#uploadInf").append("<p>图片" + file.name + "上传失败！</p>");	
		$("#uploadImage_" + file.index).css("opacity", 0.2);
	},
	onComplete: function() {
		//提交按钮隐藏
		$("#fileSubmit").hide();
		//file控件value置空
		$("#fileImage").val("");
		$("#uploadInf").append("<p>当前图片全部上传完毕，可继续添加上传。</p>");
	}
};
ZXXFILE = $.extend(ZXXFILE, params);
ZXXFILE.init();
</script>

</body>
</html>

