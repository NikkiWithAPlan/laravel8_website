@extends('layouts.app')

@section('content')

    <h3>Edit Band text</h3>

    <div class="row">
        <div class="col-sm-10">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('band_details.update', $bandText->id) }}">
                        @method('PUT')
                        @csrf

                        <textarea id="text" name="text">
                            {!! $bandText->text !!}
                        </textarea>
                        <br>
                        <input class="btn btn-primary" type="submit" name="submit" value="SUBMIT">
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

@include('backend.editor.editor')
