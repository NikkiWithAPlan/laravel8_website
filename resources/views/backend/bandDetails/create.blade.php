@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-sm-10">
            <div class="card bg-transparent">
                <div class="card-body">

                    <p>Create Band text</p>

                    <form method="post" action="{{ route('band_details.store') }}">
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
