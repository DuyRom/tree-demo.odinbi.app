<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>TreeGrid examples</title>
		<link href="/demo/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="/demo/dist/css/jquery.treegrid.css" rel="stylesheet">
</head>
<body>
	<table class="tree">
  <tbody>
	    <tr class="treegrid-1 expanded">
	    	<td>Root node</td>
	    	<td>Additional info</td>
	    	<td>Additional add</td>
	    </tr>
	    <tr class="treegrid-2 treegrid-parent-1">
	    	<td>Node 1-1</td>
	    	<td>Additional info</td>
	    	<td>Additional add</td>
	    </tr>
	    <tr class="treegrid-3 treegrid-parent-1">
	    	<td>Node 1-2</td>
	    	<td>Additional info</td>
	    	<td>Additional add</td>
	    </tr>
	    <tr class="treegrid-4 treegrid-parent-3">
	    	<td>Node 1-2-1</td>
	    	<td>Additional info</td>
	    	<td>Additional add</td>
	    </tr>
	    <tr class="treegrid-5 treegrid-parent-3">
	    	<td>Node 1-2-2</td>
	    	<td>Additional info</td>
	    	<td>Additional add</td>
	    </tr>
	    <tr class="treegrid-6">
	    	<td>Root node</td>
	    	<td>Additional info</td>
	    	<td>Additional add</td>
	    </tr>
	    <tr class="treegrid-7 treegrid-parent-6">
	    	<td>Node 2-1</td>
	    	<td>Additional info</td>
	    	<td>Additional add</td>
	    </tr>
	  </tbody>
</table>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="/demo/bootstrap/js/bootstrap.min.js"></script>
		<script src="/demo/dist/js/jquery.treegrid.min.js"></script>
		<script type="text/javascript">
			$(document).ready(function() {
				// $('.tree-basic').treegrid();
				$('.tree').treegrid();
				// $('.tree-load').treegrid({
				// 	source: function(id, response) {
				// 		if (id == 1) response([
				// 			'<tr class="treegrid-3"><td>Loaded node 1-1</td></tr>',
				// 			'<tr class="treegrid-4"><td>Loaded node 1-2</td></tr>'
				// 		]);
				// 		else response(['<tr class="treegrid-5"><td>Loaded node 2-1</td></tr>']);
				// 	}
				// });

				// $('.tree-add').treegrid();
				// $('.tree-add-root').click(function(e) {
				// 	e.preventDefault();
				// 	$('.tree-add').treegrid('add', ['<tr><td>Added root</td></tr>']);
				// });
				// $('.tree-add-node').click(function(e) {
				// 	e.preventDefault();
				// 	$(this).closest('tr').treegrid('add', ['<tr><td>Added node</td></tr>']);
				// });

				// $('.tree-remove').treegrid();
				// $('.tree-remove-node').click(function(e) {
				// 	e.preventDefault();
				// 	if (confirm('Remove with its children?')) $(this).closest('tr').treegrid('remove');
				// });

				// $('.tree-move').treegrid({
				// 	enableMove: true,
				// 	onMoveOver: function(item, helper, target, position) {
				// 		if (target.hasClass('treegrid-8')) return false;
				// 		return true;
				// 	}
				// });
				// $('.tree-move-node').click(function(e) {
				// 	e.preventDefault();
				// 	$('.tree-move .treegrid-8').treegrid('move', $('.tree-move .treegrid-2'), 2);
				// });
			});
		</script>
</body>
</html>