@extends('layouts.app')

@section('content')

	<p>Create Band member</p>

	<div class="row">
		<div class="col-sm-6">
			<div class="card">
				<div class="card-body">
					<form method="post" action="{{ route('band.store') }}">
						@csrf
	
						<label for="member_name">Member Name</label>
						<input type="text" id="member_name" name="member_name">

						<label for="instrument">Instrument</label>
						<input type="text" id="instrument" name="instrument">
						<br>
						<input class="btn btn-primary" type="submit" name="submit" value="Create">
	
					</form>
				</div>
			</div>
		</div>
	</div>

@endsection