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
	  <span class="text-muted">Your cart</span>
	  <span class="badge badge-secondary badge-pill">3</span>
	</h4>
	<ul class="list-group mb-3">
	  <li class="list-group-item d-flex justify-content-between lh-condensed">
	    <div>
	      <h6 class="my-0">Product name</h6>
	      <small class="text-muted">Brief description</small>
	    </div>
	    <span class="text-muted">$12</span>
	  </li>
	  <li class="list-group-item d-flex justify-content-between lh-condensed">
	    <div>
	      <h6 class="my-0">Second product</h6>
	      <small class="text-muted">Brief description</small>
	    </div>
	    <span class="text-muted">$8</span>
	  </li>
	  <li class="list-group-item d-flex justify-content-between lh-condensed">
	    <div>
	      <h6 class="my-0">Third item</h6>
	      <small class="text-muted">Brief description</small>
	    </div>
	    <span class="text-muted">$5</span>
	  </li>
	  <li class="list-group-item d-flex justify-content-between bg-light">
	    <div class="text-success">
	      <h6 class="my-0">Promo code</h6>
	      <small>EXAMPLECODE</small>
	    </div>
	    <span class="text-success">-$5</span>
	  </li>
	  <li class="list-group-item d-flex justify-content-between">
	    <span>Total (USD)</span>
	    <strong>$20</strong>
	  </li>
	</ul>

	<form class="card p-2">
	  <div class="input-group">
	    <input type="text" class="form-control" placeholder="Promo code">
	    <div class="input-group-append">
	      <button type="submit" class="btn btn-secondary">Redeem</button>
	    </div>
	  </div>
	</form>
@stop