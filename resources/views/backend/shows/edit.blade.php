@extends('layouts.app')

@section('content')

    <div class="container">
        <h3>Edit {{ $show->date }}</h3>

        <form method="post" action="{{ route('shows.update', $show->id) }}">
            <div class="row justify-content-start">
                @method('PUT')
                @csrf
                <div class="col-4">
                    <div class="card">
                        <div class="card-body">
                            <label for="title" class="form-label">Title of the Show - required</label>
                            <input type="text" name="title" id="title" class="form-control"
                                value="{{ $show->title }}" required>
                            <br>

                            <label for="date" class="form-label">Date of the Show - required</label>
                            <input type="text" name="date" id="date" class="form-control" value="{{ $show->date }}"
                                required>
                            <br>

                            <label for="address" class="form-label">Address of the Show - required</label>
                            <input type="text" name="address" id="address" class="form-control"
                            value="{{ $show->address }}" required>
                            <br>

                            <label for="place_name" class="form-label">Pub/festival/building of the Show -
                                required</label>
                            <input type="text" name="place_name" id="place_name" class="form-control"
                            value="{{ $show->place_name }}" required>
                            <br>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        <div class="card-body">
                            <label for="link" class="form-label">Link for the location's website</label>
                            <input type="text" name="link" id="link" class="form-control"
                            value="{{ $show->link }}" placeholder="Link for the location's website">
                            <br>

                            <label for="ticket" class="form-label">Where to buy tickets to the Show</label>
                            <input type="text" name="ticket" id="ticket" class="form-control"
                            value="{{ $show->ticket }}" placeholder="Where to buy tickets to the Show">
                            <br>

                            <label for="start_time" class="form-label">Start time of the Show</label>
                            <input type="text" name="start_time" id="start_time" class="form-control" 
                                value="{{ $show->start_time }}" placeholder="Start time of the Show">
                            <br>

                            <label for="additional_info" class="form-label">Additional info for the Show</label>
                            <input type="text" name="additional_info" id="additional_info" class="form-control"
                            value="{{ $show->additional_info }}" placeholder="Additional info for the Show">
                            <br>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="col-2">
                <button type="submit" name="submit" class="btn btn-large btn-primary openbutton">Update</button>
            </div>
        </form>
    </div>

@endsection
