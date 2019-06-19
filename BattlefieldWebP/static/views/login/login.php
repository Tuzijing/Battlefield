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
				<form class="bs-example bs-example-form" role="form">
					<div id="login_user" class="input-group">
						<span  class="input-group-addon">USERNAME</span>
						<input type="text" class="form-control" placeholder="username"
						maxlength="10"/>
					</div>
					<div id="login_password" class="input-group">
						<span class="input-group-addon">PASSWORD</span>
						<input type="password" class="form-control" placeholder="password"
						maxlength="20"/>
					</div>
					<div id="login_btn_div">
						<button type="button" id="login_btn" class="btn btn-success">登陆</button>
					</div>
<!-- 					<div id="login_msg"> -->
<!-- 						<div id="myAlert" class="alert alert-success"> -->
<!-- 	<a href="#" class="close" data-dismiss="alert">&times;</a> -->
<!-- 	<strong>成功！</strong>结果是成功的。 -->
<!-- </div> -->
<!-- <div id="myAlert" class="alert alert-warning"> -->
<!-- 	<a href="#" class="close" data-dismiss="alert">&times;</a> -->
<!-- 	<strong>警告！</strong>您的网络连接有问题。 -->
<!-- </div> -->
					</div>
				</form>
			</div>
		</div> 
	</body>
	
		
		
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
</html>
