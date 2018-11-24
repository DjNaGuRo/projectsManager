@extends('layouts.app')

@section('content')
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-8 offset-md-1">
				@yield('main-content')
			</div>
			<div class="col-md-3">
				@yield('nav-sidebar')
			</div>
		</div>
	</div>
@endsection