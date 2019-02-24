@extends('admin.admin-common')
@php
	$title = 'Thống kê số lượng học sinh tham gia ở ' . $prov_name;
@endphp
@section('title-page')
	{!! $title !!}
@endsection
@section('page-name')
	{!! $prov_name !!}
@stop
@section('breadcrumb')
	<li><a href="{!! url('admin/statistic/province') !!}">Tất cả tỉnh</a></li>
	<li class="active">{!! $prov_name !!}</li>
@endsection
@section('stylesheets')
<link href="{!! asset('public/bootstrap/dist/css/bootstrap.min.css') !!}" rel="stylesheet">
<link href="{!! asset('plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css') !!}" rel="stylesheet">
<link href="{!! asset('public/css/animate.css') !!}" rel="stylesheet">
<link href="{!! asset('public/css/style.css') !!}" rel="stylesheet">
<link href="{!! asset('public/css/colors/default.css') !!}" id="theme" rel="stylesheet">
@stop
@section('scripts')
<script src="{!! asset('plugins/bower_components/jquery/dist/jquery.min.js') !!}"></script>
<script src="{!! asset('public/bootstrap/dist/js/bootstrap.min.js') !!}"></script>
<script src="{!! asset('plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js') !!}"></script>
<script src="{!! asset('public/js/jquery.slimscroll.js') !!}"></script>
<script src="{!! asset('public/js/waves.js') !!}"></script>
<script src="{!! asset('public/js/custom.min.js') !!}"></script>
@stop
@section('page-content')
<div class="row">
	<div class="col-sm-12">
		<div class="white-box">
			<p class="text-muted">Số lượng học sinh tham gia <code>.Luolympic</code> ở {!! $prov_name !!}</p>
			<!-- <p class="text-muted">Add class <code>.table</code></p> -->
			<div class="table-responsive full-width">
				<table class="table">
					<thead>
						<tr>
							<th>#</th>
							<th>Quận, huyện</th>
							<th>Số lượng</th>
							<th>Chi tiết</th>
						</tr>
					</thead>
					<tbody>
						@php 
							$i = 1;
						@endphp
						@foreach( $data as $dist )
							@php 
								$route = 'admin/statistic/province/' . $prov_id . '/' . $dist->id;
								$url = url($route);
							@endphp
							{!! '<tr>' !!}
								{!! '<td>' . $i . '</td><td>' . $dist->dist_name . '</td><td>' . $dist->nums . '</td><td><a href="' . $url . '">Chi tiết</a></td>' !!}
							{!! '</tr>' !!}
							@php
								$i++;
							@endphp
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
@stop
