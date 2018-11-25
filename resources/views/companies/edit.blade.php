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
	  <span class="text-muted">Company - Actions</span>
	  {{-- <span class="badge badge-secondary badge-pill">3</span> --}}
	</h4>
	<hr>
	 <ul class="list-group list-group-flush">
	  <a href="{{route('companies.index')}}" class="list-group-item"> List companies</a>
	  <a href="{{route('companies.destroy', $company)}}" class="list-group-item" data-method="DELETE" data-confirm="Êtes-vous sur de vouloir supprimer cet évènement?"> Delete</a>
	</ul> 
	<h4 class="d-flex justify-content-between align-items-center mb-3">
	  <span class="text-muted">Company - Members</span>
	  {{-- <span class="badge badge-secondary badge-pill">3</span> --}}
	</h4>
@stop