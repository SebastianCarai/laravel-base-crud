@extends('layouts.app')

@section('main_content')
    <div class="container d-flex flex-wrap">
        @forelse ($comics as $comic)
            <div class="card m-3" style="width: 18rem;">
                <a href="#">
                    <img src="{{$comic->thumb}}" class="card-img-top" alt="{{$comic->title}}">  
                </a>
                <div class="card-body">
                    <h5 class="card-title">{{$comic->title}}</h5>
                    <p class="card-text">{{$comic->description}}</p>
                </div>
            </div>
        @empty
            <h1>Non ci sono comics disponibili</h1>
        @endforelse
    </div>
@endsection