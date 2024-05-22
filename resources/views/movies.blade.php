@extends('layouts.app')

@section('content') 
    <div class="container d-flex flex-wrap justify-content-between ">
        @foreach ($movies as $movie)
        <div class="card my-3" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">{{ $movie->title }}</h5>
                <h6 class="card-subtitle mb-2 text-muted">{{ $movie->original_title }}</h6>
                <p class="card-text">Lingua: {{ $movie->nationality }}</p>
                <div>
                    <span  class="card-text">{{ $movie->date }}</span>
                    <span  class="card-text ms-5">Voto: {{ $movie->vote }}</span>
                </div>
            </div>
        </div>
        @endforeach
    </div>
@endsection