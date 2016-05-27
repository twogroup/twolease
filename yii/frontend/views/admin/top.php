<div class="navbar-header pull-left">
	<a href="#" class="navbar-brand">
		<small>
			<i class="icon-leaf"></i>
			异家人后台管理系统
		</small>
	</a><!-- /.brand -->
</div><!-- /.navbar-header -->
<div class="navbar-header pull-right" role="navigation">
	<ul class="nav ace-nav">
		<li class="light-blue">
			<a data-toggle="dropdown" href="#" class="dropdown-toggle">
				<img class="nav-user-photo" src="assets/avatars/user.jpg" alt="Jason's Photo" />
				<span class="user-info">
					<small>欢迎光临,</small>
					<?php
						$session = Yii::$app->session;
    					$session->open();
    					echo $session['name'];
					?>
				</span>

				<i class="icon-caret-down"></i>
			</a>
			<ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
				<li>
					<a href="?r=admin/exits">
						<i class="icon-off"></i>
						退出
					</a>
				</li>
			</ul>
		</li>
	</ul><!-- /.ace-nav -->
</div><!-- /.navbar-header -->