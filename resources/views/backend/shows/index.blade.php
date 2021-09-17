@extends('layouts.app')

@section('content')

    <div class="card">

        <div class="card-body">

            <a class="btn btn-primary" role="button" href="{{ route('shows.create') }}">
                Add new show
            </a>
        </div>
        <div class="card-body">

            @if (count($shows) > 0)
                <?php
                $colcount = count($shows);
                $i = 1;
                ?>
                <div id="shows">
                    <div class="row text-center">
                        @foreach ($shows as $show)
                            <div class="card mb-3">
                                <div class="card-title">
                                    <a href="{{ route('shows.show', $show->id) }}">
                                        {{ $show->date }}
                                    </a>
                                    <br>
                                    <h4>{{ $show->place_name }}</h4>
                                    @if ($i % 3 == 0)
                                </div>
                            </div>
                    </div>
                    <div class="row text-center">
                                    @else
                    </div>
                </div>
                                    @endif
                <?php $i++; ?>
                        @endforeach
        </div>
    </div>
            @else
                <p>No shows to display</p>
            @endif
        </div>
    </div>

@endsection
