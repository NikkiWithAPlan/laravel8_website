@extends('layouts.app')

@section('content')
	<h3>Create Sponsor</h3>

	<div class="row">
		<div class="col-sm-6">
			<div class="card bg-transparent">
				<div class="card-body">
					<form method="post" action="{{ route('sponsors.store') }}" enctype="multipart/form-data">
						@csrf
	
						<label for="title" class="form-label">Sponsor Name</label>
						<input type="text" id="title" name="title" class="form-control" placeholder="Sponsor Name" required>
						<br>
						
						<label for="url" class="form-label">Sponsor Link</label>
						<input type="text" id="url" name="url" class="form-control" placeholder="Sponsor Link" required>
						<br>

						<label for="logo" class="form-label">Sponsor image</label>
						<input type="file" id="logo" name="logo" accept="image/png, image/jpeg" class="form-control" required>
						<br>

						<input class="btn btn-primary" type="submit" name="submit" value="Create">
	
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection