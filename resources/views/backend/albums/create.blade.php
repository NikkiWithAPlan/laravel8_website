@extends('layouts.app')

@section('content')
	<h3>Create Album</h3>

	<div class="row">
		<div class="col-sm-6">
			<div class="card">
				<div class="card-body">
					<form method="post" action="{{ route('albums.store') }}" enctype="multipart/form-data">
						@csrf
	
						<label for="name" class="form-label">Album Name</label>
						<input type="text" id="name" name="name" class="form-control" placeholder="Album Name" required>
						<br>

						<label for="cover_image" class="form-label">Cover image</label>
						<input type="file" id="cover_image" name="cover_image" accept="image/png, image/jpeg" class="form-control" required>
						<br>

						<input class="btn btn-primary" type="submit" name="submit" value="Create">
	
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection