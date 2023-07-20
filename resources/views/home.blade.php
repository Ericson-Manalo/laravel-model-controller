@extends('layouts.app')


@section('title', 'Checking if it works!')


@section('main-content')
@dump($movies)
    <h1>
        Congratulation, it works!
    </h1>

    <div>
        @foreach($movies as $movie)
            <article>
                <img src="" alt="">
                <h1>
                    {{ $movie->title }}
                </h1>
            </article>
        @endforeach
    </div>
@endsection