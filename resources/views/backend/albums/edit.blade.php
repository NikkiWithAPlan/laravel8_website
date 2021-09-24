@extends('layouts.app')

@section('content')

    <h3>Edit Album</h3>

    <div class="row">
        <div class="col-sm-10">
            <div class="card bg-transparent">
                <div class="card-body">
                    <form method="POST" action="{{ route('albums.update', $album->id) }}" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf

                        <label for="name" class="form-label">Album Name</label>
                        <input type="text" id="name" name="name" class="form-control" value="{{ $album->name }}">
                        <br>

                        <label for="cover_image" class="form-label">Cover image</label>
                        <input type="file" id="cover_image" name="cover_image" accept="image/png, image/jpeg"
                            class="form-control" required>
                        <br>
                        <input class="btn btn-primary" type="submit" name="submit" value="Update">
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

@include('backend.editor.editor')
