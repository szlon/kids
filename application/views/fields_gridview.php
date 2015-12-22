<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	
	<title>字段编辑</title>

	<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.6/css/bootstrap.min.css" type="text/css" media="all">
	<link href="http://cdn.bootcss.com/jquery-bootgrid/1.3.1/jquery.bootgrid.css" rel="stylesheet" />
	<script src="http://cdn.bootcss.com/jquery/2.1.4/jquery.min.js"></script>
	<script src="http://cdn.bootcss.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<script src="http://cdn.bootcss.com/jquery-bootgrid/1.3.1/jquery.bootgrid.min.js"></script>

	<script type="text/javascript">
		$( document ).ready(function() {
			$("#employee_grid").bootgrid({
				ajax: true,
				post: function ()
				{
					/* To accumulate custom parameter with the request object */
					return {
						id: "b0df282a-0d67-40e5-8558-c9e93b7befed"
					};
				},
				url: "http://localhost/kids/index.php/fields/ajax_response",
				formatters: {

				}
			});
		});
	</script>

</head>

<body>

<div class="container" width = "80%">

	<table id="employee_grid" class="table table-condensed table-hover table-striped" width="100%" cellspacing="0" data-toggle="bootgrid">
		<thead>
		<tr>
			<th data-column-id="id" data-type="numeric">ID</th>
			<th data-column-id="userName">UserName</th>
			<th data-column-id="pointID" data-type="numeric">PointID</th>
			<th data-column-id="pointName">PointName</th>
		</tr>
		</thead>
	</table>

</div>

</body>

</html>
