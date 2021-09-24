@extends('layouts.app')

@section('content')

    <h3>Edit Sponsor</h3>

    <div class="row">
        <div class="col-sm-10">
            <div class="card bg-transparent">
                <div class="card-body">

                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-2">
                                <a class="btn btn-outline-primary" href="{{ route('sponsors.index') }}">Go back</a>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>

                <div class="card-body">
                    <form method="POST" action="{{ route('sponsors.update', $sponsor->id) }}"  enctype="multipart/form-data">
                        @method('PUT')
                        @csrf

                        <label for="title" class="form-label">Sponsor title</label>
                        <input type="text" id="title" name="title" class="form-control" value="{{ $sponsor->title }}">
                        <br>

                        <label for="url" class="form-label">Sponsor Link</label>
                        <input type="text" id="url" name="url" class="form-control" value="{{ $sponsor->url }}">
                        <br>

                        <label for="logo" class="form-label">Sponsor image</label>
						<input type="file" id="logo" name="logo" accept="image/png, image/jpeg" class="form-control" required>
                        <br>
                        
                        <input class="btn btn-primary" type="submit" name="submit" value="Update">
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
