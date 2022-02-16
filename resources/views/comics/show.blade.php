@extends('layouts.app')

@section('main_content')
    <div class="card m-3" style="width: 20rem;">
        <img src="{{$comic->thumb}}" style="width: 100%;" class="card-img-top" alt="{{$comic->title}}">  
        <div class="card-body">
            <h5 class="card-title">{{$comic->title}}</h5>
            <p class="card-text">{{$comic->description}}</p>
        </div>
    </div>
@endsection