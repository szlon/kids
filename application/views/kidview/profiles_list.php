<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title; ?></title>
	<!-- ����ͷ����Ϣ������Ӧ��ͬ�豸 -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- ���� bootstrap ��ʽ�� -->
	<link rel="stylesheet" href="http://apps.bdimg.com/libs/bootstrap/3.2.0/css/bootstrap.min.css">
</head>

<body>

<div class="container">
	<div class="panel panel-primary">
		<div class="panel-heading active"><?php echo $title; ?></div>
		<div class="panel-body">

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
	</div>
</div>

<!-- JavaScript �������ĵ���������ʹҳ������ٶȸ��� -->
<!-- ��ѡ: ���� jQuery �� -->
<script src="http://apps.bdimg.com/libs/jquery/2.1.1/jquery.min.js"></script>
<!-- ��ѡ: �ϲ��� Bootstrap JavaScript ��� -->
<script src="http://apps.bdimg.com/libs/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>

</html>
