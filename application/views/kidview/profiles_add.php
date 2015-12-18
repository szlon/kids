<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title; ?></title>
	<!-- 包含头部信息用于适应不同设备 -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- 包含 bootstrap 样式表 -->
	<link rel="stylesheet" href="http://apps.bdimg.com/libs/bootstrap/3.2.0/css/bootstrap.min.css">
</head>

<body>

<div class="container">
	<div class="panel panel-primary">
		<div class="panel-heading active"><?php echo $title; ?></div>
		<div class="panel-body">

			<form class="form-horizontal" action="<?php echo site_url('profiles/Add_Post') ?>" method="post">
				<fieldset>
					<div class="control-group hide">
						<!-- Text input-->
						<label class="control-label" for="input01">用户编号</label>
						<div class="controls">
							<input type="text" class="input-xlarge" name="id" value="<?php echo $userID; ?>">
						</div>
					</div>

					<div class="control-group">
						<!-- Text input-->
						<label class="control-label" for="input01">用户昵称</label>
						<div class="controls">
							<input type="text" class="input-xlarge" name="nickname">
						</div>
					</div>

					<div class="control-group">
						<!-- Text input-->
						<label class="control-label" for="input01">头像图片</label>
						<div class="controls">
							<input type="text" class="input-xlarge" name="avatar">
						</div>
					</div>

					<div class="control-group">
						<!-- Text input-->
						<label class="control-label" for="input01">性别</label>
						<div class="controls">
							<input type="text" class="input-xlarge" name="sex">
						</div>
					</div>

					<div class="control-group">
						<!-- Text input-->
						<label class="control-label" for="input01">年龄</label>
						<div class="controls">
							<input type="text" class="input-xlarge" name="age">
						</div>
					</div>


					<div class="control-group">
						<!-- Textarea -->
						<label class="control-label">备注</label>
						<div class="controls">
							<div class="textarea">
								<textarea type="" class="" name="memo"> </textarea>
							</div>
						</div>
					</div>

					<div class="control-group">
						<label class="control-label"></label>
						<!-- Button -->
						<div class="controls">
							<button type="submit" class="btn btn-success" >添加</button>
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