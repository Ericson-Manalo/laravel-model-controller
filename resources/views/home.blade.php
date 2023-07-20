@extends('layouts.app')


@section('title', 'Movies!')


@section('main-content')
@dump($movies)
<h1>
    Movies
</h1>

<div class="main-container">
        <div class="card-container flex">
            @foreach($movies as $movie)
                <article>
                    <h1>
                        {{$movie->id}}
                    </h1>
                    <h2>
                        {{ $movie->title }}
                    </h2>
                    <h4>
                        {{$movie->original_title}} - {{$movie->nationality}}
                    </h4>
                    <p>
                        {{$movie->date}} 
                    </p>
                    <p>
                        {{$movie->vote}}
                    </p>
                </article>
            @endforeach
        </div>
</div>
@endsection