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
	<h2><?php echo $title; ?></h2>

	<div class="table-responsive">
		<table class="table table-striped table-bordered">
			<thead>
			<tr>
				<th>ID</th>
				<th>Nickname</th>
				<th>Avatar</th>
				<th>Age</th>
				<th>Sex</th>
				<th>Memo</th>
				<th>CreateTime</th>
				<th>UpdateTime</th>
			</tr>
			</thead>

			<tbody>
			<?php foreach($profiles as $row) : ?>
				<tr>
					<td><?php echo $row['id'] ?> </td>
					<td><?php echo $row['nickname'] ?> </td>
					<td><?php echo $row['avatar'] ?> </td>
					<td><?php echo $row['age'] ?> </td>
					<td><?php echo $row['sex'] ?> </td>
					<td><?php echo $row['memo'] ?> </td>
					<td><?php echo mdate('%Y-%m-%d %h:%i:%s', $row['createTime']) ?> </td>
					<td><?php echo mdate('%Y-%m-%d %h:%i:%s', $row['updateTime']) ?> </td>

				</tr>
			<?php endforeach; ?>
			</tbody>
		</table>
	</div>
</div>

<!-- JavaScript 放置在文档最后面可以使页面加载速度更快 -->
<!-- 可选: 包含 jQuery 库 -->
<script src="http://apps.bdimg.com/libs/jquery/2.1.1/jquery.min.js"></script>
<!-- 可选: 合并了 Bootstrap JavaScript 插件 -->
<script src="http://apps.bdimg.com/libs/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>

</html>
