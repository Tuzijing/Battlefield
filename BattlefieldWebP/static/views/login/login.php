<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>登陆</title>
		<!--
        	作者：offline
        	时间：2018-07-10
        	描述：引入公共前端配置文件
        -->
		<?php
			include "../common/encoding.php";
			include "../common/main_header.php";	
		?>
		<!--
        	作者：offline
        	时间：2018-07-10
        	描述：引入login.js文件
        -->
		<script type="text/javascript" src="../../common/js/login/login.js" ></script>
		<!--
        	作者：offline
        	时间：2018-07-10
        	描述：引入login.css的布局文件
        -->
		<link rel="stylesheet" href="../../common/css/login/login.css" />
	</head>
	<body>
		<div id="login_container">
			<div id="login_title"><span>BATTLEFIELD</span></div>
			<div id="login_content">
				<div class="input-group">
					<span id="login_user">USERNAME</span>
					<input type="text" class="form-control" placeholder="username"/>
				</div>
			</div>
		</div>
		
		
		<!--
        	作者：offline
        	时间：2018-07-10
        	描述：加载js的操作
        -->
		<script>
			window.onload = setLoginContainer("login_container");
			window.onresize = function(){
					setLoginContainer("login_container");
				}
		</script>
	</body>
</html>
