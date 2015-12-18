<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<!-- 包含头部信息用于适应不同设备 -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- 包含 bootstrap 样式表 -->
	<link rel="stylesheet" href="http://apps.bdimg.com/libs/bootstrap/3.2.0/css/bootstrap.min.css">
</head>

<body>

<div class="container">
	<div class="panel panel-primary">
		<div class="panel-heading active">Login</div>
		<div class="panel-body">

			<form class="form-horizontal" action="<?php echo site_url('userlogin/Login_Post') ?>" method="post">
				<fieldset>
					<div class="control-group">
						<!-- Text input-->
						<label class="control-label" for="input01">用户名</label>
						<div class="controls">
							<input type="text" class="input-xlarge" name="userName">
						</div>
					</div>

					<div class="control-group">
						<!-- Text input-->
						<label class="control-label" for="input01">密  码</label>
						<div class="controls">
							<input type="text" class="input-xlarge" name="password">
						</div>
					</div>

					<div class="control-group">
						<label class="control-label"></label>
						<!-- Button -->
						<div class="controls">
							<button type="submit" class="btn btn-success" name="typeName" value="login">登录</button>
							<button type="submit" class="btn btn-success" name="typeName" value="register">注册</button>
						</div>
					</div>

				</fieldset>
			</form>

		</div>
	</div>
</div>

<!-- JavaScript 放置在文档最后面可以使页面加载速度更快 -->
<!-- 可选: 包含 jQuery 库 -->
<script src="http://apps.bdimg.com/libs/jquery/2.1.1/jquery.min.js"></script>
<!-- 可选: 合并了 Bootstrap JavaScript 插件 -->
<script src="http://apps.bdimg.com/libs/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>

</html>




