@extends('layouts.app')
@section('content')
<div style="display:flex; flex-wrap:wrap;">
@foreach ($comics as $comic)
<div class="card m-2" style="width: 18rem;">
  <img class="card-img-top" src="{{$comic->thumb}}" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Titolo: {{$comic->title}}</h5>
    <p class="card-text">Trama: {{$comic->description}}</p>
    <span>Prezzo: {{$comic->price}}</span>

  </div>
</div>
@endforeach

</div>


@endsection