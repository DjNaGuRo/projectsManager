@extends('layouts.bodyStructure')

@section('main-content')
	<h2>Edit - Company #{{$company->id}}</h2>
	<form action="{{route('companies.update', $company)}}" method="POST">
		@csrf
		@method('PUT')
		@include('partials._companyForm', ['btn_value' => 'Update'])
	</form>
@endsection

@section('nav-sidebar')
	<h4 class="d-flex justify-content-between align-items-center mb-3">
	  <span class="text-muted">Action</span>
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
@stop