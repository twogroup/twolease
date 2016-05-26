<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>异家人后台管理系统</title>
    <meta name="keywords" content="Bootstrap模版,Bootstrap模版下载,Bootstrap教程,Bootstrap中文" />
    <meta name="description" content="站长素材提供Bootstrap模版,Bootstrap教程,Bootstrap中文翻译等相关Bootstrap插件下载" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- basic styles -->

    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/font-awesome.min.css" />
    <link rel="stylesheet" href="assets/css/font-awesome-ie7.min.css" />
    <link rel="stylesheet" href="assets/css/ace.min.css" />
    <link rel="stylesheet" href="assets/css/ace-rtl.min.css" />
    <link rel="stylesheet" href="assets/css/ace-skins.min.css" />

    <!--[if lte IE 8]>
    <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
    <![endif]-->
    <script src="assets/js/ace-extra.min.js"></script>
    <script src="assets/js/html5shiv.js"></script>
    <script src="assets/js/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<div class="navbar navbar-default" id="navbar">
    <script type="text/javascript">
        try{ace.settings.check('navbar' , 'fixed')}catch(e){}
    </script>

    <div class="navbar-container" id="navbar-container">
        <div class="navbar-header pull-left">
            <a href="#" class="navbar-brand">
                <small>
                    <i class="icon-leaf"></i>
                    异家人 Admin
                </small>
            </a><!-- /.brand -->
        </div><!-- /.navbar-header -->

        <div class="navbar-header pull-right" role="navigation">
            <ul class="nav ace-nav">
                <li class="grey">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <i class="icon-tasks"></i>
                        <span class="badge badge-grey">4</span>
                    </a>

                    <ul class="pull-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
                        <li class="dropdown-header">
                            <i class="icon-ok"></i>
                            4 Tasks to complete
                        </li>

                        <li>
                            <a href="#">
                                <div class="clearfix">
                                    <span class="pull-left">Software Update</span>
                                    <span class="pull-right">65%</span>
                                </div>

                                <div class="progress progress-mini ">
                                    <div style="width:65%" class="progress-bar "></div>
                                </div>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <div class="clearfix">
                                    <span class="pull-left">Hardware Upgrade</span>
                                    <span class="pull-right">35%</span>
                                </div>

                                <div class="progress progress-mini ">
                                    <div style="width:35%" class="progress-bar progress-bar-danger"></div>
                                </div>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <div class="clearfix">
                                    <span class="pull-left">Unit Testing</span>
                                    <span class="pull-right">15%</span>
                                </div>

                                <div class="progress progress-mini ">
                                    <div style="width:15%" class="progress-bar progress-bar-warning"></div>
                                </div>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <div class="clearfix">
                                    <span class="pull-left">Bug Fixes</span>
                                    <span class="pull-right">90%</span>
                                </div>

                                <div class="progress progress-mini progress-striped active">
                                    <div style="width:90%" class="progress-bar progress-bar-success"></div>
                                </div>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                See tasks with details
                                <i class="icon-arrow-right"></i>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="purple">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <i class="icon-bell-alt icon-animated-bell"></i>
                        <span class="badge badge-important">8</span>
                    </a>

                    <ul class="pull-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-close">
                        <li class="dropdown-header">
                            <i class="icon-warning-sign"></i>
                            8 Notifications
                        </li>

                        <li>
                            <a href="#">
                                <div class="clearfix">
											<span class="pull-left">
												<i class="btn btn-xs no-hover btn-pink icon-comment"></i>
												New Comments
											</span>
                                    <span class="pull-right badge badge-info">+12</span>
                                </div>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <i class="btn btn-xs btn-primary icon-user"></i>
                                Bob just signed up as an editor ...
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <div class="clearfix">
											<span class="pull-left">
												<i class="btn btn-xs no-hover btn-success icon-shopping-cart"></i>
												New Orders
											</span>
                                    <span class="pull-right badge badge-success">+8</span>
                                </div>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <div class="clearfix">
											<span class="pull-left">
												<i class="btn btn-xs no-hover btn-info icon-twitter"></i>
												Followers
											</span>
                                    <span class="pull-right badge badge-info">+11</span>
                                </div>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                See all notifications
                                <i class="icon-arrow-right"></i>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="green">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <i class="icon-envelope icon-animated-vertical"></i>
                        <span class="badge badge-success">5</span>
                    </a>

                    <ul class="pull-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
                        <li class="dropdown-header">
                            <i class="icon-envelope-alt"></i>
                            5 Messages
                        </li>

                        <li>
                            <a href="#">
                                <img src="assets/avatars/avatar.png" class="msg-photo" alt="Alex's Avatar" />
										<span class="msg-body">
											<span class="msg-title">
												<span class="blue">Alex:</span>
												Ciao sociis natoque penatibus et auctor ...
											</span>

											<span class="msg-time">
												<i class="icon-time"></i>
												<span>a moment ago</span>
											</span>
										</span>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <img src="assets/avatars/avatar3.png" class="msg-photo" alt="Susan's Avatar" />
										<span class="msg-body">
											<span class="msg-title">
												<span class="blue">Susan:</span>
												Vestibulum id ligula porta felis euismod ...
											</span>

											<span class="msg-time">
												<i class="icon-time"></i>
												<span>20 minutes ago</span>
											</span>
										</span>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <img src="assets/avatars/avatar4.png" class="msg-photo" alt="Bob's Avatar" />
										<span class="msg-body">
											<span class="msg-title">
												<span class="blue">Bob:</span>
												Nullam quis risus eget urna mollis ornare ...
											</span>

											<span class="msg-time">
												<i class="icon-time"></i>
												<span>3:15 pm</span>
											</span>
										</span>
                            </a>
                        </li>

                        <li>
                            <a href="inbox.html">
                                See all messages
                                <i class="icon-arrow-right"></i>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="light-blue">
                    <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                        <img class="nav-user-photo" src="assets/avatars/user.jpg" alt="Jason's Photo" />
								<span class="user-info">
									<small>Welcome,</small>
									Jason
								</span>

                        <i class="icon-caret-down"></i>
                    </a>

                    <ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
                        <li>
                            <a href="#">
                                <i class="icon-cog"></i>
                                Settings
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <i class="icon-user"></i>
                                Profile
                            </a>
                        </li>

                        <li class="divider"></li>

                        <li>
                            <a href="#">
                                <i class="icon-off"></i>
                                Logout
                            </a>
                        </li>
                    </ul>
                </li>
            </ul><!-- /.ace-nav -->
        </div><!-- /.navbar-header -->
    </div><!-- /.container -->
</div>

<div class="main-container" id="main-container">
    <script type="text/javascript">
        try{ace.settings.check('main-container' , 'fixed')}catch(e){}
    </script>

    <div class="main-container-inner">
        <a class="menu-toggler" id="menu-toggler" href="#">
            <span class="menu-text"></span>
        </a>

        <div class="sidebar" id="sidebar">
            <script type="text/javascript">
                try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
            </script>

            <div class="sidebar-shortcuts" id="sidebar-shortcuts">
                <div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
                    <button class="btn btn-success">
                        <i class="icon-signal"></i>
                    </button>

                    <button class="btn btn-info">
                        <i class="icon-pencil"></i>
                    </button>

                    <button class="btn btn-warning">
                        <i class="icon-group"></i>
                    </button>

                    <button class="btn btn-danger">
                        <i class="icon-cogs"></i>
                    </button>
                </div>

                <div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
                    <span class="btn btn-success"></span>

                    <span class="btn btn-info"></span>

                    <span class="btn btn-warning"></span>

                    <span class="btn btn-danger"></span>
                </div>
            </div><!-- #sidebar-shortcuts -->
            <?php  include('leftMenu.php');?>
<!-- /.nav-list -->-->

            <div class="sidebar-collapse" id="sidebar-collapse">
                <i class="icon-double-angle-left" data-icon1="icon-double-angle-left" data-icon2="icon-double-angle-right"></i>
            </div>

            <script type="text/javascript">
                try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
            </script>
        </div>

        <div class="main-content">
            <div class="breadcrumbs" id="breadcrumbs">
                <script type="text/javascript">
                    try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
                </script>

                <ul class="breadcrumb">
                    <li>
                        <i class="icon-home home-icon"></i>
                        <a href="#">Admin</a>
                    </li>

                    <li>
                        <a href="#">Rent Manage</a>
                    </li>
                    <li class="active">Rent Total</li>
                </ul><!-- .breadcrumb -->

                <div class="nav-search" id="nav-search">
                    <form class="form-search">
								<span class="input-icon">
									<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
									<i class="icon-search nav-search-icon"></i>
								</span>
                    </form>
                </div><!-- #nav-search -->
            </div>
            <!--
            <div class="table-header">
                苦苦
                Results for "Latest Registered Domains"
            </div>
             -->

            <div class="page-content">
                <div class="page-header">
                    <div>
                    <h1>
                        租金统计
                        <small>
                            <i class="icon-double-angle-right"></i>
                            Rent &amp; show list
                        </small>
                    </h1>
                    <br>
                    <div class="table-responsive">
                        <table style="width: 100%; height: auto" id="sample-table-2" class="table table-striped table-bordered table-hover">
                            <thead>
                            <tr>
                                <th width="40px;" class="center">
                                    <label>
                                        <input type="checkbox"  class="ace" />
                                        <span class="lbl"></span>
                                    </label>
                                </th>
                                <th width="40px;" class="center">
                                   编号
                                </th>
                                <th width="60px;">租客</th>
                                <th width="60px;">房东</th>
<!--                                <th width="85px;">租赁地址</th>-->
                                <th width="85px">户型</th>
                                <th width="90px;"><i class="icon-time"></i>出租起始时间</th>
                                <th width="90px;"><i class="icon-time"></i>出租结束时间</th>
                                <th width="50px">月租金额/元</th>
                                <th width="45px;" >租期/月</th>
                                <th width="45px;">物业类型</th>
<!--                                <th width="85px;" >其他费用</th>-->
                                <th width="80px;">已交金额</th>
                                <th width="70px;">是否核实</th>
                                <th  width="85px;">备注</th>
                                <th width="90px;">操作</th>

                            </tr>
                            </thead>

                            <tbody>
                            <!-- foreach 循环 租金统计 列表 Start  -->
                            <?php    foreach ($list as $v) { ?>
                                <tr id="tag_<?php echo $v->rent_id ?>">
                                    <td class="center">
                                            <input type="checkbox" name="del[]" value="<?php echo $v->rent_id ?>" class="ace" />
                                            <span class="lbl"></span>
                                    </td>
                                    <td class="center" style="text-align: center"><?php echo $v->rent_id ?></td>
                                    <td class="center" style="text-align: center"><a href="#"><?php echo $v->rent_people?></a></td>
                                    <td class="center" style="text-align: center"><?php echo $v->by_rent_people?></td>
<!--                                    <td class="hidden-480">--><?php //echo $v['rent_address']?><!--</td>-->
                                    <td><?php echo $v->house_type?></td>
                                    <td class="hidden-480">
                                        <span class="label label-sm label-success">
                                        <?php echo $v->rent_start_time?></span>
                                    </td>

                                    <td class="hidden-480"><span class="label label-sm label-warning">
                                        <?php echo $v->rent_end_time?></span>
                                    </td>
                                    <td class="hidden-480"><?php echo $v->mon_rental?></td>
                                    <td class="hidden-480"><?php echo $v->rent_month?></td>
                                    <td class="hidden-480"><?php echo $v['property_class']?></td>
<!--                                    <td class="hidden-480">--><?php //echo $v['other_charges']?><!--</td>-->
                                    <td class="hidden-480"><?php echo $v['rent_money']?></td>
                                    <td class="hidden-480"><?php
                                        if($v['status']=='0')
                                        echo "未审核";
                                        elseif($v['status']=='1')
                                        echo "已核实";
                                    ?></td>
                                    <td class="hidden-480"><?php echo $v['other']?></td>
                                    <td>
                                        <div class="visible-md visible-lg hidden-sm hidden-xs action-buttons">
                                            <a class="blue" href="#">
                                                <i class="icon-zoom-in bigger-130"></i>
                                            </a>

                                            <a class="green" href="index.php?r=rent/update&id=<?php echo $v['rent_id'] ?>">
                                                <i class="icon-pencil bigger-130"></i>
                                            </a>

                                            <a class="red" href="index.php?r=rent/del&id=<?php echo $v['rent_id'] ?>">
                                                <i class="icon-trash bigger-130"></i>
                                            </a>
                                        </div>

<!--                                        <div class="visible-xs visible-sm hidden-md hidden-lg">-->
<!--                                            <div class="inline position-relative">-->
<!--                                                <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown">-->
<!--                                                    <i class="icon-caret-down icon-only bigger-120"></i>-->
<!--                                                </button>-->
<!---->
<!--                                                <ul class="dropdown-menu dropdown-only-icon dropdown-yellow pull-right dropdown-caret dropdown-close">-->
<!--                                                    <li>-->
<!--                                                        <a href="#" class="tooltip-info" data-rel="tooltip" title="View">-->
<!--																				<span class="blue">-->
<!--																					<i class="icon-zoom-in bigger-120"></i>-->
<!--																				</span>-->
<!--                                                        </a>-->
<!--                                                    </li>-->
<!---->
<!--                                                    <li>-->
<!--                                                        <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">-->
<!--																				<span class="green">-->
<!--																					<i class="icon-edit bigger-120"></i>-->
<!--																				</span>-->
<!--                                                        </a>-->
<!--                                                    </li>-->
<!---->
<!--                                                    <li>-->
<!--                                                        <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">-->
<!--																				<span class="red">-->
<!--																					<i class="icon-trash bigger-120"></i>-->
<!--																				</span>-->
<!--                                                        </a>-->
<!--                                                    </li>-->
<!--                                                </ul>-->
<!--                                            </div>-->
<!--                                        </div>-->
                                    </td>
                                </tr>
                            <?php  }?>
                            <!-- foreach 循环 租金统计 列表 End  -->

                            </tbody>
                        </table>
                        <!--  // 显示分页 -->
                        <div>
                            <ul class="pull-left"><button class="btn " id="gritter-remove" >Remove</button></ul>
                            <ul class="pull-right" >
                                <?php
                                use yii\widgets\LinkPager;
                                echo LinkPager::widget([
                                    'pagination' => $pages,
                                ]);
                                ?>
                            </ul>
                        </div>
                    </div>
                    <!--  结束  -->
            </div><!-- /.page-content -->
        </div><!-- /.main-content -->

        <div class="ace-settings-container" id="ace-settings-container">
            <div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
                <i class="icon-cog bigger-150"></i>
            </div>

            <div class="ace-settings-box" id="ace-settings-box">
                <div>
                    <div class="pull-left">
                        <select id="skin-colorpicker" class="hide">
                            <option data-skin="default" value="#438EB9">#438EB9</option>
                            <option data-skin="skin-1" value="#222A2D">#222A2D</option>
                            <option data-skin="skin-2" value="#C6487E">#C6487E</option>
                            <option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
                        </select>
                    </div>
                    <span>&nbsp; Choose Skin</span>
                </div>

                <div>
                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-navbar" />
                    <label class="lbl" for="ace-settings-navbar"> Fixed Navbar</label>
                </div>

                <div>
                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-sidebar" />
                    <label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
                </div>

                <div>
                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-breadcrumbs" />
                    <label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
                </div>

                <div>
                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" />
                    <label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
                </div>

                <div>
                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-add-container" />
                    <label class="lbl" for="ace-settings-add-container">
                        Inside
                        <b>.container</b>
                    </label>
                </div>
            </div>
        </div><!-- /#ace-settings-container -->
    </div><!-- /.main-container-inner -->

    <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
        <i class="icon-double-angle-up icon-only bigger-110"></i>
    </a>
</div><!-- /.main-container -->

        <script type="text/javascript">
            window.jQuery || document.write("<script src='<?=Yii::$app->request->baseUrl?>/assets/js/jquery-2.0.3.min.js'>"+"<"+"/script>");
        </script>
        <script type="text/javascript">
            if("ontouchend" in document) document.write("<script src='<?=Yii::$app->request->baseUrl?>/assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
        </script>
        <script src="<?=Yii::$app->request->baseUrl?>/assets/js/bootstrap.min.js"></script>
        <script src="<?=Yii::$app->request->baseUrl?>/assets/js/typeahead-bs2.min.js"></script>
        <script src="<?=Yii::$app->request->baseUrl?>/assets/js/jquery.dataTables.min.js"></script>
        <script src="<?=Yii::$app->request->baseUrl?>/assets/js/jquery.dataTables.bootstrap.js"></script>
        <script src="<?=Yii::$app->request->baseUrl?>/assets/js/ace-elements.min.js"></script>
        <script src="<?=Yii::$app->request->baseUrl?>/assets/js/ace.min.js"></script>
        <script type="text/javascript">

                $('table th input:checkbox').on('click' , function(){
                    var that = this;
                    $(this).closest('table').find('tr > td:first-child input:checkbox')
                        .each(function(){
                            this.checked = that.checked;
                            $(this).closest('tr').toggleClass('selected');

                        });

                });
                $("#gritter-remove").click(function(msg){
                    var last_id=$("table tr:last td:nth-child(2)").html();
                    var cho = document.getElementsByName('del[]');
                    var idAll="";
                    for(var i=0;i<cho.length;i++){
                        if(cho[i].checked){
                            idAll=idAll+cho[i].value+',';
                        }
                    }
                    idAll=idAll.substring(0,(idAll.length-1));
                    var ajax= new XMLHttpRequest();  // 创建 ajax对象
                    // 监听状态 回调函数
                    ajax.onreadystatechange=function(){
                        if(ajax.readyState==4 && ajax.status== 200){
                            //alert(ajax.responseText);
                            if(ajax.responseText == '1'){
                                alert("删除错误")

                            }else{
                                for(var i=cho.length-1;i>=0;i--){
                                    if(cho[i].checked){
                                        tab=cho[i].parentNode.parentNode.parentNode;
                                        tab.removeChild(cho[i].parentNode.parentNode);
                                    }
                                }
                                var arr=eval('('+ajax.responseText+')');
                                var str="";
                               for(i in arr){
                                 //  $("#tag_"+arr[i].rent_id).remove();

                                   str+='<tr id="tag_'+arr[i].rent_id+'">' ;
                                   str+='<td class="center">';
                                   str+='<input type="checkbox" name="del[]" value="'+arr[i].rent_id+'" class="ace" />  <span class="lbl"></span>';
                                   str+='</td>';
                                   str+='<td class="center" style="text-align: center">'+arr[i].rent_id+'</td>';
                                   str+='<td class="center" style="text-align: center"><a href="#">'+arr[i].rent_people+'</a></td>';
                                   str+='<td class="center" style="text-align: center">'+arr[i].by_rent_people+'</td>';
                                   str+='<td>'+arr[i].house_type+'</td>';
                                   str+='<td class="hidden-480"><span class="label label-sm label-success">'+arr[i].rent_start_time+'</span></td>';
                                   str+='<td class="hidden-480"><span class="label label-sm label-warning">'+arr[i].rent_end_time+'</span></td>';
                                   str+='<td class="hidden-480">'+arr[i].mon_rental+'</td>';
                                   str+='<td class="hidden-480">'+arr[i].rent_month+'</td>';
                                   str+='<td class="hidden-480">'+arr[i].property_class+'</td>';
                                   str+=' <td class="hidden-480">'+arr[i].rent_money+'</td>';
                                   str+='<td class="hidden-480">';
                                        if(arr.status =='0'){
                                        str+="未审核";
                                        }else{
                                            str+="已核实";
                                        }
                                   str+='</td>';
                                   str+='<td class="hidden-480">'+arr[i].other+'</td>';
                                   str+=' <td>';
                                   str+='<div class="visible-md visible-lg hidden-sm hidden-xs action-buttons"> <a class="blue" href="#"> <i class="icon-zoom-in bigger-130"></i> </a>';
                                   str+='<a class="green" href="index.php?r=rent/update&id='+arr[i].rent_id+'"> <i class="icon-pencil bigger-130"></i> </a>';
                                   str+='<a class="red"   href="index.php?r=rent/del&id='+arr[i].rent_id+'"><i class="icon-trash bigger-130"></i></a>';
                                   str+='</div>';
                                   str+='</td>';
                                   str+='</tr>';
                               }
                                $("tr:last").after(str);
                            }
                        }
                    }
                    // 服务器连接
                    ajax.open('get',"index.php?r=rent/pdel&id="+idAll+"&last_id="+last_id,true);
                    //处理请求
                    ajax.send(null);
                });

                $('[data-rel="tooltip"]').tooltip({placement: tooltip_placement});
                function tooltip_placement(context, source) {
                    var $source = $(source);
                    var $parent = $source.closest('table')
                    var off1 = $parent.offset();
                    var w1 = $parent.width();

                    var off2 = $source.offset();
                    var w2 = $source.width();

                    if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
                    return 'left';
                }

        </script>
</body>
</html>
