@extends('layouts.app')

@section('main_content')
    <div class="card m-3" style="width: 20rem;">
        <img src="{{$comic->thumb}}" style="width: 100%;" class="card-img-top" alt="{{$comic->title}}">  
        <div class="card-body">
            <h5 class="card-title">{{$comic->title}}</h5>
            <p class="card-text">{{$comic->description}}</p>
            <a class="btn btn-primary" href="{{ route('comics.edit' , ['comic' => $comic->id]) }}">Edit Card</a>

            <form action="{{ route('comics.destroy' , ['comic' => $comic->id]) }}" method="post">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger my-2">Delete Card</button>
            </form>
        </div>

    </div>
@endsection