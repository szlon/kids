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

			<form class="form-horizontal" action="<?php echo site_url('points/Add_Post') ?>" method="post">
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
						<label class="control-label" for="input01">字段</label>
						<div class="controls">
							<!-- <input type="text" class="input-xlarge" name="pointID"> -->

							<select class="combobox" name="pointID">
								<?php foreach($fields as $row) : ?>
									<option value="<?php echo $row['pointID'] ?>">
										<?php echo $row['pointName'] ?>
									</option>
								<?php endforeach; ?>
							</select>


						</div>

					</div>

					<!--
					<div class="btn-group">
						<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
							选择字段
							<span class="caret"></span>
						</button>
						<ul class="dropdown-menu">
							<li><a href="#">项目 1</a></li>
							<li><a href="#">项目 2</a></li>
						</ul>
					</div>
					-->
					
					<div class="control-group">
						<!-- Text input-->
						<label class="control-label" for="input01">数值</label>
						<div class="controls">
							<input type="text" class="input" name="pointValue">
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




