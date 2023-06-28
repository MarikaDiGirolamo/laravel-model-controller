@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="card">
                    @foreach ($movies as $movie)
                        <div class="card-body">
                            <h2 class="card-title">{{ $movie->title }}</h2>
                            <h3 class="card-text">{{ $movie->original_title }}</h3>
                            <h4>{{ $movie->date }}</h4>
                            <h5>Language: {{ $movie->nationality }}</h5>
                            <h5>Rating: {{ $movie->vote }}</h5>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endsection
