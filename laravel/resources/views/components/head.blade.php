
        <ul>
            <li><a class="active scroll" href="{{url('')}}"><i class="fa fa-home"> </i>首页</a></li>
            <li><a href="{{url('service')}}"><i class="fa fa-thumbs-up"> </i>房源</a></li>
            <!--判断是用户还是房东-->
            <?php if(empty($_COOKIE['status'])){?>
                <li><a href="{{url('lease')}}"><i class="fa fa-home"> </i>我要出租</a></li>
            <?php }else{?>
                <?php if($_COOKIE['status']!=2){?>
                <?php }else{?>
                <li><a href="{{url('lease')}}"><i class="fa fa-home"> </i>我要出租</a></li>
                <?php }?>
            <?php }?>
            <!--The end-->
            {{--<li><a href="{{url('gallery')}}"><i class="fa fa-picture-o"> </i>画廊</a></li>--}}
            <li><a href="{{url('contact')}}"><i class="fa fa-envelope-o"> </i>联系</a></li>
            <li><a href="{{url('about')}}"><i class="fa fa-star"> </i> 关于</a></li>
            <li><a href="{{url('personal')}}"><i class="fa fa-user"> </i>个人中心</a></li>
			<?php if(empty($_COOKIE['name'])){?>
                <li><a href="{{url('logins')}}"><i class="fa fa-user"> </i>登录</a></li>
            <?php }else{?>
                <li>
                    &nbsp;&nbsp;<img src="{{$_COOKIE['pictures']}}" style="width: 50px;height: 50px"/><br/>
                    欢迎<font color="red">{{$_COOKIE['name']}}</font>登录</li>
            <li><a href="{{url('exits')}}"><i class="fa fa-exit"> </i>退出</a></li>
            <?php }?>

            <div class="clearfix"></div>
        </ul>
