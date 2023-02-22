@extends('main')
@section('title','Home page')
@push('pageCss')
	<link href="/demo/dist/css/jquery.treegrid.css" rel="stylesheet">
@endpush
@section('content')
	<div class="content-header row">
        <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h2 class="content-header-title float-left mb-0">Bootstrap Tables</h2>
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a>
                            </li>
                            <li class="breadcrumb-item active">Table
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
            <div class="form-group breadcrum-right">
                <div class="dropdown">
                    <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle waves-effect waves-light" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-settings"></i></button>
                    <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">Chat</a><a class="dropdown-item" href="#">Email</a><a class="dropdown-item" href="#">Calendar</a></div>
                </div>
            </div>
        </div>
    </div>
    <div class="content-body">
        <!-- Basic Tables start -->
        <div class="row" id="basic-table">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Basic Tables</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <!-- Table with outer spacing -->
                            <div class="table-responsive">
                                <table class="table tree">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Add</th>
                                        </tr>
                                    </thead>
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Basic Tables end -->
    </div>
@endsection
@push('pageJS')
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
@endpush
@section('scripts')
