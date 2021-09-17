@extends('layouts.app')

@section('content')

	<p>Create Contact details</p>

	<div class="row">
		<div class="col-sm-6">
			<div class="card">
				<div class="card-body">
					<form method="post" action="{{ route('contacts.store') }}">
						@csrf
	
						<label for="title" class="form-label">Title</label>
						<input type="text" id="title" name="title" class="form-control">
						<br>

						<label for="mobile" class="form-label">Mobile</label>
						<input type="text" id="mobile" name="mobile" class="form-control">
						<br>

						<label for="email" class="form-label">Email</label>
						<input type="text" id="email" name="email" class="form-control">
						<br>
						<input class="btn btn-primary" type="submit" name="submit" value="Create">
	
					</form>
				</div>
			</div>
		</div>
	</div>

@endsection