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
			var grid = $("#fields_grid").bootgrid({
				ajax: true,
				post: function ()
				{
					return {
						id: "b0df282a-0d67-40e5-8558-c9e93b7befed"
					};
				},
				url: "http://localhost/kids/index.php/fields/ajax_response",
				formatters: {
					"commands": function(column, row)
					{
						return "<button type=\"button\" class=\"btn btn-xs btn-default command-edit\" data-row-id=\"" + row.id + "\">编辑</button> " +
							"<button type=\"button\" class=\"btn btn-xs btn-default command-delete\" data-row-id=\"" + row.id + "\">删除</button>";
					}
				}
			}).on("loaded.rs.jquery.bootgrid", function()
			{
				/* Executes after data is loaded and rendered */
				grid.find(".command-edit").on("click", function(e)
				{
					alert("You pressed edit on row: " + $(this).data("row-id"));
				}).end().find(".command-delete").on("click", function(e)
				{
					alert("You pressed delete on row: " + $(this).data("row-id"));
				});
			});

		})

	</script>

</head>

<body>

<div class="container" >

	<table id="fields_grid" class="table table-condensed table-hover table-striped" width="100%" cellspacing="0" data-toggle="bootgrid">
		<thead>
		<tr>
			<!--
			<th data-column-id="id" data-type="numeric">ID</th>
			<th data-column-id="userName">UserName</th>
			-->
			<th data-column-id="pointID" data-type="numeric">字段ID</th>
			<th data-column-id="pointName">字段名</th>
			<th data-column-id="commands" data-formatter="commands" data-sortable="false">操作</th>

		</tr>
		</thead>
	</table>

</div>

</body>

</html>
