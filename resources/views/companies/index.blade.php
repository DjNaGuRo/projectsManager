@extends('layouts.app')

@section('content')
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-8 offset-md-2">
				<div class="card">
				  {{-- <img class="card-img-top" src=".../100px180/" alt="Card image cap"> --}}
				  {{-- <h5 class="card-title bg-secondary">List of companies</h5> --}}
				  <div class="card-header bg-light">
				  	<h3 class="d-inline-block">List of companies</h3>
				  	<p class="d-inline-block float-right">
				  		<a href="{{route('companies.create')}}" class="btn btn-primary">Create a new project</a>
				  	</p>
				  </div>
				  <!-- List group -->
				  <ul class="list-group list-group-flush">
				    @foreach($companies as $company)
				    	<li class="list-group-item">
				    		<a href="{{route('companies.show', $company)}}">{{$company->name}}</a>
				    	</li>
				    @endforeach
				  </ul>
				</div>
			</div>
		</div>
	</div>
@endsection