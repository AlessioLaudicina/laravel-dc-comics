@extends('layouts.app')
@section('content')
<div style="display:flex; flex-wrap:wrap;">
@foreach ($comics as $comic)
<div class="card m-2 " style="width: 18rem;">
  <img class="card-img-top" src="{{$comic->thumb}}" alt="Card image cap" href="{{route('comics.show', ['comic'=> $comic->id])}}">
  <div class="card-body">
    <h5 class="card-title">Titolo: {{$comic->title}}</h5>
    <p class="card-text">Serie: {{$comic->series}}</p>
    <span>Prezzo: {{$comic->price}}</span>

  </div>
  <div class="d-flex justify-content-center my-4">
  <a class="btn btn-primary" href="{{route('comics.show', ['comic'=> $comic->id])}}">Info</a>
  <a class="btn btn-warning mx-2" href="{{route('comics.edit', ['comic'=> $comic->id])}}">Modifica</a>
  <form action="{{route('comics.destroy', ['comic'=> $comic->id])}}" method="POST">
  @csrf 
  <a class="btn btn-danger">Elimina</a>
  </form>
  

  </div>

</div>
@endforeach

</div>


@endsection