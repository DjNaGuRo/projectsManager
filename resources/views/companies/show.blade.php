@extends('layouts.bodyStructure')

@section('main-content')
	<!-- Jumbotron -->
	   <div class="jumbotron">
	     <h1>{{$company->name}}</h1>
	     <p class="lead">{{$company->description}}</p>
	     <p><a class="btn btn-lg btn-success" href="{{route('companies.edit', $company)}}" role="button">Edit &raquo;</a></p>
	   </div>

	   <!-- Example row of columns -->
	   <div class="row">
	       @foreach($company->projects as $project)
	       	<div class="col-md">
	       		<h2>{{$project->name}}</h2>
	       		<p class="text-justify">{{$project->description}}</p>
	       		<p><a class="btn btn-primary" href="{{route('projects.show', $project)}}" role="button">View project details &raquo;</a></p>
	       	</div>
	       @endforeach
	   </div>
@endsection

@section('nav-sidebar')
	<h4 class="d-flex justify-content-between align-items-center mb-3">
	  <span class="text-muted">Company - Actions</span>
	  {{-- <span class="badge badge-secondary badge-pill">3</span> --}}
	</h4>
	<hr>
	 <ul class="list-group list-group-flush">
	  <a href="{{route('companies.edit', $company)}}" class="list-group-item"> Edit</a>
	  <a href="{{route('companies.destroy', $company)}}" class="list-group-item" data-method="DELETE" data-confirm="Êtes-vous sur de vouloir supprimer cet évènement?"> Delete</a>
	  <a href="#" class="list-group-item"> Add new member</a>
	</ul> 
@stop