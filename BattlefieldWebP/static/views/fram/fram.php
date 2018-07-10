<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
		<?php
			try{
				include "test.php";
			}catch(Exception $e){
				//不做任何处理
			}
		?>
	</head>
	<body>
		<?php 
			echo "你好";
		?>
	</body>
</html>
