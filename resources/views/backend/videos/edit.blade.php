@extends('layouts.app')

@section('content')

    <h3>Edit {{ $video->title }}</h3>

    <div class="row">
        <div class="col-sm-6">
            <div class="card bg-transparent">
                <div class="card-body">
                    <form method="POST" action="{{ route('videos.update', $video->id) }}">
                        @method('PUT')
                        @csrf

                        <label for="title" class="form-label">Title</label>
                        <input type="text" id="title" name="title" class="form-control"
                            value="{{ $video->title }}">
                        <br>

                        <label for="url" class="form-label">Link</label>
                        <input type="text" id="url" name="url" class="form-control" value="{{ $video->url }}">
                        <br>

                        <input class="btn btn-primary" type="submit" name="submit" value="Update">

                    </form>
                    <form method="post" action="{{ route('videos.destroy', $video->id) }}">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-outline-danger">
                            Delete - {{ $video->title }}
                        </button>
                    </form>
                </div>
            </div>
        </div>


		{{-- Instructions how to find the embed video link --}}
		<div class="col-sm-6">
			<div class="card bg-transparent">
				<div class="card-body">
					<h3 class="card-title">How to find the video Link on YouTube</h3>
					<ol class="list-group list-group-numbered">
						<li class="list-group-item">Open the video</li>
						<li class="list-group-item">Right click on the video</li>
						<li class="list-group-item">Copy video URL</li>
						<li class="list-group-item">Paste the video URL (eg: <b>https://youtu.be/lw48GOEKqVA</b>) to the Link field (Right click -> Paste OR CTRL+V)</li>
						<li class="list-group-item">Change <b>https://youtu.be/ </b> to <b>https://youtube.com/ </b></li>
						<li class="list-group-item">Add <b>embed/</b> after <b>https://youtu.be/</b> and before the last identifier (eg: lw48GOEKqVA)</li>
					</ol>
				</div>
			</div>
		</div>
    </div>

@endsection
