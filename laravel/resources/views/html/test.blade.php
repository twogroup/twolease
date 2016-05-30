
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
    <meta http-equiv="Pragma" content="no-cache" />

    <meta name="mobile-agent" content="format=html5;url=http://m.fang.com/zf/bj/?adap=auto">
    <link href="http://esf.js.soufunimg.com/esf/zu/css/list2016.css?v=201605260111" rel="stylesheet" />
</head>
<body>
<input id="talkProjName" type="hidden" value="zulist" />
<link href="//jsimg.fang.com/navigation/style/navigation20141112.css" rel="stylesheet" type="text/css" />

<script type="text/javascript">
    // 标红
    var url = window.location.href;
    if (url.indexOf("office") > -1) {
        PublicNav.select('office');
    } else if (url.indexOf("shop") > -1) {
        PublicNav.select('shop');
    } else {
        PublicNav.select('zu');
    }
</script>
<script type="text/javascript" src="http://esf.js.soufunimg.com/esf/zu/js/libs/jquery-1.7.1.min.js"></script>
<!-- 用户自动登录 -->
<script src="http://esf.js.soufunimg.com/esf/zu/js/complied/autologin.js?v=20160526" type="text/javascript"></script>
<!--搜索头文件开始-->
<div class="searchbg">
    <div class="searchbox">
        <div class="fangsearch">
            <div class="fsearch_con">
                <!--fangsearch start-->
                <form id="form_rent" name="form_rent" onsubmit="return form_action2()" action="http://zu.fang.com/RentSearch/PostService/SearchBox.aspx"
                      method="post">
                <span id="rentid_B03_06">
                    <input type="text" id="input_key" class="inputstyle_out" autocomplete="off" value="输入关键字(楼盘名或地段名)" />
                    <span class="inpbj"></span>
                </span>
                <span id="www_299">
                    <input type="submit" value="搜 索" class="button" id="rentid_39" />
                </span>
                    <div class="search_select" id="listbox" style="display: none">
                        <table cellspacing="0" border="0" style="width: 460px;" id="suggestion">
                            <tbody>
                            <tr>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </form>
            </div>

            <div class="clear">
            </div>
        </div>
        <!--fangsearch end-->
        <div class="clear">
        </div>
    </div>
</div>
<script src="http://esf.js.soufunimg.com/esf/zu/js/complied/mapinfo.js?v=20160526" type="text/javascript"></script>
<script src="http://esf.js.soufunimg.com/esf/zu/js/complied/search.js?v=20160526" type="text/javascript"></script>

<div class="clear">
</div>
<!-- main begin -->
<div class="wrap">

    <div class="search-box">
        <div class="search-menu-top clearfix">
            <ul class="search-menu floatl">
                <li class="liOn" id="rentid_D03_01"><a class="" href="javascript:void(0);">区域 </a></li>

                <li id="rentid_D03_02"><a class="" href="/house1/">地铁</a></li>

                <li id="rentid_D03_03"><a class="" rel="nofollow" href="/bus/">公交</a></li>

                <li id="rentid_D03_04"><a class="" href="/school/">学校</a></li>

            </ul>
            <div class="search-ment-r floatr" id="rentid_D03_05">
                <a  class="fabu" href="#" target="_blank">免费发布房源</a>
            </div>
        </div>
        <div class="con">
            <div class="search-listbox">
                <dl class="search-list clearfix" id="rentid_D04_01">
                    <dt>区域：</dt>
                    <dd>
                        <a href="javascript:void(0);"  class="org bold" onclick='clearviewed()'>不限</a><a href="/house-a01/" >朝阳</a><a href="/house-a00/" >海淀</a><a href="/house-a06/" >丰台</a><a href="/house-a012/" >昌平</a><a href="/house-a0585/" >大兴</a><a href="/house-a010/" >通州</a><a href="/house-a03/" >西城</a><a href="/house-a02/" >东城</a><a href="/house-a0987/" >燕郊</a><a href="/house-a07/" >石景山</a><a href="/house-a011/" >顺义</a><a href="/house-a08/" >房山</a><a href="/house-a013/" >密云</a><a href="/house-a09/" >门头沟</a><a href="/house-a014/" >怀柔</a><a href="/house-a011817/" >北京周边</a><a href="/house-a016/" >平谷</a><a href="/house-a015/" >延庆</a>
                    </dd>
                </dl>

                <dl class="search-list clearfix" id="rentid_D04_02">
                    <dt>租金：</dt>
                    <dd>

                        <a  rel="nofollow"  href="javascript:void(0);"  class="org bold"  onclick='clearviewed()'>不限</a>

                        <a  rel="nofollow"  href="/house/c20-d2500/" >500元以下</a>

                        <a  rel="nofollow"  href="/house/c2500-d21000/" >500-1000元</a>

                        <a  rel="nofollow"  href="/house/c21000-d22000/" >1000-2000元</a>

                        <a  rel="nofollow"  href="/house/c22000-d23000/" >2000-3000元</a>

                        <a  rel="nofollow"  href="/house/c23000-d25000/" >3000-5000元</a>

                        <a  rel="nofollow"  href="/house/c25000-d28000/" >5000-8000元</a>

                        <a  rel="nofollow"  href="/house/c28000-d210000/" >8000-10000元</a>

                        <a  rel="nofollow"  href="/house/c210000-d20/" >10000元以上</a>

                        <input type="text" name="txt" class="inputSmall" value='' id="minprice" />-<input
                                type="text" name="txt" class="inputSmall" value='' id="maxprice" /><input
                                type="button" name="btu" value="确定" class="btnSmall"
                                id="pricBtn" style="cursor: pointer;" />

                    </dd>
                </dl>

                <dl class="search-list clearfix" id="rentid_D04_03">
                    <dt>户型：</dt>
                    <dd>

                        <a rel="nofollow" href="javascript:void(0);"  class="org bold" onclick='clearviewed()'>不限</a>

                        <a rel="nofollow" href="/house/g21/" >一居</a>

                        <a rel="nofollow" href="/house/g22/" >二居</a>

                        <a rel="nofollow" href="/house/g23/" >三居</a>

                        <a rel="nofollow" href="/house/g24/" >四居</a>

                        <a rel="nofollow" href="/house/g299/" >四居以上</a>

                    </dd>
                </dl>

                <dl class="search-list clearfix" id="rentid_D04_09">
                    <dt>方式：</dt>
                    <dd>

                        <a  rel="nofollow"  href="javascript:void(0);"  class="org bold" onclick='clearviewed()'>不限</a>

                        <a  rel="nofollow"  href="/house/n31/" >整租</a>

                        <a  rel="nofollow"  href="/hezu/" >合租</a>

                        <a  rel="nofollow"  href="http://www.youtx.com/beijing/" >日租周租</a>

                    </dd>
                </dl>

                <dl class="search-list clearfix" id="rentid_D04_05">
                    <dt>特色：</dt>
                    <dd>

                        <a  rel="nofollow"  href="/house/"  class="org bold">不限</a>

                        <a  rel="nofollow"  href="/house/a534/" >免中介费</a>

                        <a  rel="nofollow"  href="/house/a5105/" >紧邻地铁</a>

                        <a  rel="nofollow"  href="/house/a5106/" >交通便利</a>

                        <a  rel="nofollow"  href="/house/a5107/" >周边配套齐</a>

                        <a  rel="nofollow"  href="/house/a5108/" >独门独卫</a>

                        <a  rel="nofollow"  href="/house/a5109/" >采光好</a>

                        <a  rel="nofollow"  href="/house/a5110/" >全装全配</a>

                        <a  rel="nofollow"  href="/house/a5111/" >南北通透</a>

                        <a  rel="nofollow"  href="/house/a5112/" >首次出租</a>

                        <a  rel="nofollow"  href="/house/a5114/" >可注册办公</a>

                    </dd>
                </dl>


               <!-- <script type="text/javascript">
                    var priceurl = '/house/c2100-d2100-l300/';
                </script> -->
            </div>

        </div>
    </div>
    </div>
    <script src="http://esf.js.soufunimg.com/esf/zu/js/footer.js" type="text/javascript"></script>
    <script src="http://support.fang.com/resource/script/QianTai/support.dialogbox.js" type="text/javascript"></script>
    <script type="text/javascript" src="http://clickn.soufun.com/stats/clickm2011.js"></script>
    <script type="text/javascript">    Clickstat.eventAdd(window, 'load', function (e) { Clickstat.batchEvent('rentid_', 'bjlb'); });</script>
    <script type="text/javascript" src="http://js.soufunimg.com/upload/webim/newim/scripts/im1.0.1.js?v=201605261122" charset="utf-8"></script>
    <style type="text/css">
        .OnlineTalk {
            font: 12px/22px Arial, "\5B8B\4F53", "SimSun", HELVETICA, "Hiragino Sans GB";
            color: #333;
        }
    </style>
    <!-- links end -->


</body>
</html>
