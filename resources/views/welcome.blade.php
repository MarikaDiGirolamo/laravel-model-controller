@extends('layouts.app')

@section('content')
    <div class="container-fluid">

        <div class="row flex-wrap">
            @foreach ($movies as $movie)
                <div class="col-4 p-3 mb-5">
                    <div class="card">
                        <div class="card-body">
                            @if (!$movie->poster)
                                <img src="https://media.istockphoto.com/id/1147544807/it/vettoriale/la-commissione-per-la-immagine-di-anteprima-grafica-vettoriale.jpg?s=612x612&w=0&k=20&c=gsxHNYV71DzPuhyg-btvo-QhhTwWY0z4SGCSe44rvg4="
                                    alt="">
                            @else
                                <img src="{{ $movie->poster }}" alt="">
                            @endif

                            <h2 class="card-title pt-3">{{ $movie->title }}</h2>
                            <h3 class="card-text">{{ $movie->original_title }}</h3>
                            <h4>{{ $movie->date }}</h4>
                            <h5>Language: {{ $movie->nationality }}</h5>
                            <h5>Rating: ⭐ {{ $movie->vote }}</h5>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
