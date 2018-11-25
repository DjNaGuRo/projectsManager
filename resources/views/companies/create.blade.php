@extends('layouts.app')

@section('content')
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-8 offset-sm-2">
				<form action="{{route('companies.store')}}" method="POST">
					<legend><h2>Company Form - Create</h2></legend>
					@csrf
					<div class="form-group">
					  <label for="user_id" class="control-label sr-only">Company user_id:</label>
					  <input type="hidden" class="form-control" id="user_id" name="user_id" placeholder="Company User Id" value="{{Auth::user()->id}}">
					</div>
					@include('partials._companyForm', ['btn_value' => 'Create'])
				</form>
			</div>
		</div>
	</div>
@endsection