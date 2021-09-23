@extends('welcome')

@section('content')

    <div class="container">
        <div class="row justify-content-center">

            @include('frontend.showTables.upcomingShows')

            @include('frontend.showTables.pastShows')

        </div>
    </div>

@endsection
