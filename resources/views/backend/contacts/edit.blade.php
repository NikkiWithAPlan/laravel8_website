@extends('layouts.app')

@section('content')

    <div class="container">
        <h3>Edit {{ $contact->title }}</h3>

        <form method="post" action="{{ route('contacts.update', $contact->id) }}">
            <div class="row justify-content-start">
                @method('PUT')
                @csrf
                <div class="col-4">
                    <div class="card">
                        <div class="card-body">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" name="title" id="title" class="form-control"
                            value="{{ $contact->title }}" placeholder="Title">
                            <br>

                            <label for="mobile" class="form-label">Mobile</label>
                            <input type="text" name="mobile" id="mobile" class="form-control"
                            value="{{ $contact->mobile }}" placeholder="Mobile">
                            <br>

                            <label for="email" class="form-label">Email</label>
                            <input type="text" name="email" id="email" class="form-control" 
                                value="{{ $contact->email }}" placeholder="Email">
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
