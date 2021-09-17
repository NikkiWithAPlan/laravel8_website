@extends('layouts.app')

@section('content')

	<p>Create Band member</p>

	<div class="row">
		<div class="col-sm-6">
			<div class="card">
				<div class="card-body">
					<form method="post" action="{{ route('band.store') }}">
						@csrf
	
						<label for="member_name" class="form-label">Member Name</label>
						<input type="text" id="member_name" name="member_name" class="form-control">

						<label for="instrument" class="form-label">Instrument</label>
						<input type="text" id="instrument" name="instrument" class="form-control">
						<br>
						<input class="btn btn-primary" type="submit" name="submit" value="Create">
	
					</form>
				</div>
			</div>
		</div>
	</div>

@endsection