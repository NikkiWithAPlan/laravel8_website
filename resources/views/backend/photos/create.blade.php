@extends('layouts.app')

@section('content')

    <p>Upload photo</p>

    <div class="row">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <form method="post" action="{{ route('photos.store') }}" enctype="multipart/form-data">
                        @csrf

                        <label .visually-hidden for="album_id" class="form-label"></label>
                        <input type="hidden" id="album_id" name="album_id" class="form-control" value="{{ $album_id }}">

                        <label for="photo" class="form-label">Photo</label>
                        <input type="file" id="photo" name="photo" accept="image/png, image/jpeg" class="form-control"
                            required>
                        <br>

                        <input class="btn btn-primary" type="submit" name="submit" value="Add photo">

                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
