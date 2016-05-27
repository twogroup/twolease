<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="css/login-css.css" rel="stylesheet" type="text/css" />
    <script language="javascript" src="js/global.js" charset="utf-8" ></script>
    <script language="javascript" src="js/common.js" charset="utf-8"></script>
    <title>经纪人自助管理平台</title>
    <script type="text/javascript">
        window.onload = function(){
            document.getElementById("vLeftImgId").src="/verifyCodeServlet?random="+Math.random();
        }
        //jQuery脚本库的使用
        function myQuery(){
            myQuery.ajax = function(s){
                jQuery.ajax(s);
            }
        }
        //更新验证码
        function getCode(){
            document.getElementById("vLeftImgId").src="/verifyCodeServlet?random="+Math.random();
        }
        //验证验证码
        var forCode = false;
        function checkCode(){
            document.getElementById("message").innerHTML="";
            var code = document.getElementById("textfield3").value;
            myQuery();
            myQuery.ajax({
                async : false,
                type : "get",
                url : "/servlet/checkCodeServlet?random="+Math.random(),
                dataType : "text",
                data : {code:code},
                error: function(){
                    document.getElementById("message").innerHTML="验证码后台出错";
                    getCode();
                },
                success : function(msg){
                    if(msg == "true"){
                        forCode = true;
                    }else{
                        forCode = false;
                        document.getElementById("message").innerHTML="验证码错误";
                        getCode();
                    }
                }
            });
        }
        //验证用户
        var forUser = false;
        function checkUser(){
            document.getElementById("message").innerHTML="";
            var username = encodeURI(document.getElementById("textfield1").value);
            var password = document.getElementById("textfield2").value;
            myQuery();
            myQuery.ajax({
                async : false,
                type : "get",
                url : "/servlet/loginUserCheckServlet",
                dataType : "text",
                data : {username:username,password:password,date:new Date(),logonType:3},
                error: function(){
                    document.getElementById("message").innerHTML="验证用户后台出错"
                },
                success : function(msg){
                    if(msg != ""){
                        // 设置cookie
                        var tmp = msg.split(";");
                        document.cookie = tmp[0];
                        document.cookie = encodeURI(tmp[1]);
                        document.cookie = tmp[2];
                        document.cookie = tmp[3];
                        document.cookie = tmp[4];
                        document.cookie = tmp[5];
                        if(tmp.length>6){
                            document.cookie = tmp[6];
                        }
                        forUser = true;

                    }else{
                        document.getElementById("message").innerHTML="用户名或密码错误";
                        getCode();
                        forUser = false;
                    }

                }
            });

        }
        //页面跳转到index
        function goIndex(){
            var code = document.getElementById("textfield3").value;
            if(code == ""){
                document.getElementById("message").innerHTML="验证码不可为空";
                return false;
            }
            var username = document.getElementById("textfield1").value;
            var password = document.getElementById("textfield2").value;
            if(username=="" || password==""){
                document.getElementById("message").innerHTML="用户名和密码不能为空";
                getCode();
                return false;
            }
            document.getElementById("button").value="登陆中...";
            checkCode();
            if(forCode){
                checkUser();
                if(forUser){
                    if(3==3){
                        var submitform = document.getElementById("form");
                        submitform.action="/admindex";
                        submitform.submit();
                    }else{
                        return true;
                    }
                }else{
                    document.getElementById("button").value="登    录";
                    return false;
                }
            }else{
                document.getElementById("button").value="登    录";
                return false;
            }


        }
    </script>
</head>

<body>
<!--LOGIN TOP Strat-->
<div class="login-top">
    <h1><a href="http://www.5i5j.com" target="_blank"><img src="images/logo.png" width="158" height="50" /></a></h1>
    <h2>经 纪 人 自 助 管 理 平 台</h2>
    <h3>版本号2.0</h3>
    <div class="login-nav">
        <a href="http://www.5i5j.com" target="_blank">首页</a>
        <a href="http://bj.5i5j.com/exchange" target="_blank">二手房</a>
        <a href="http://bj.5i5j.com/rent" target="_blank">租房</a>
        <a href="http://bj.5i5j.com/broker" target="_blank">置业顾问</a>
        <a href="http://bj.5i5j.com/community" target="_blank">小区</a></div>
</div>
<!--LOGIN TOP End-->

<!--LOGIN FRAME Strat-->
<form id="form" method="get" action="/index">
    <div class="login-Bg">
        <div class=" main-1000">
            <div class="login-Frame">
                <ul class="nav-Tab-login">
                    <li class="admin-login"><a href="/logon?logonType=1">经纪人登陆</a></li>
                    <!--
                    <li class="add-login"><a href="/logon?logonType=2">加盟登录</a></li>
                    -->
                    <li class="zygw-login-on"><a href="/logon?logonType=3">管理员登陆</a></li>

                </ul>
                <ul class="Login-info">
                    <li><span class="login-Input"><input  type="text"  class="login-inp1" id="textfield1" value="" size="32"/></span>账　号：
                    </li>
                    <li><span class="login-Input"><input  type="password"  class="login-inp1" id="textfield2" value="" size="32"/></span>密　码：        </li>
                    <li>验证码：
                        <input type="text" class="login-inp2" id="textfield3" size="12" /><span class="identCode">
          <img id="vLeftImgId" style="cursor:pointer;" border=0 src=""  onclick="getCode()"/>
          <p><a href="javascript:getCode()">看不清，换一张</a></p></span>
                    </li>
                    <font color='red' id="message"></font>
                    <li class="mrT">
                        <input type="submit" id="button" value="登    录" class="login-submit" onclick="return goIndex()" />
                    </li>
                </ul>
            </div>
        </div>
    </div>
</form>

<!--LOGIN FRAME End-->
<div class="login-bottom">@1998-2013 伟业我爱我家集团 版权所有，并保留所有权利 京ICP备09041444号-1 京公网安备110101002497号</div>
</body>
</html>