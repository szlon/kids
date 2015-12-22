<!DOCTYPE html>
<html>
<head>
	<title>KIDS</title>
	<!-- 包含头部信息用于适应不同设备 -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.6/css/bootstrap.min.css">


</head>

<body>

<div class="container">

	<div class="panel panel-primary">
		<div class="panel-heading active">KIDS</div>

		<div class="list-group">

			<a class="list-group-item" href="<?php echo site_url('users') ?>">用户列表</a>
			<a class="list-group-item" href="<?php echo site_url('users/add') ?>">添加用户</a>

			<a  class="list-group-item" href="<?php echo site_url('profiles') ?>">详情列表</a>
			<a  class="list-group-item" href="<?php echo site_url('profiles/add') ?>">添加详情</a>

			<a  class="list-group-item" href="<?php echo site_url('fields') ?>">字段列表</a>
			<a  class="list-group-item" href="<?php echo site_url('fields/add') ?>">添加字段</a>

			<a  class="list-group-item" href="<?php echo site_url('points') ?>">积分列表</a>
			<a  class="list-group-item" href="<?php echo site_url('points/add') ?>">添加积分</a>

		</div>

	</div>

</div>


<!-- JavaScript 放置在文档最后面可以使页面加载速度更快 -->
<script src="http://cdn.bootcss.com/jquery/2.1.4/jquery.min.js"></script>
<script src="http://cdn.bootcss.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>



</body>

</html>
