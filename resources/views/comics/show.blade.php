@extends('layouts.app')

@section('content')
 <div class="container p-4">
  <h1>{{ $comics->title }}</h1>
  <div>Series: <strong>{{ $comics->series }}</strong></div>
  <div>Type: <strong>{{ $comics->type }}</strong></div>
  <div>Release date: <strong>{{ $comics->sale_date }}</strong></div>
  <div>Price: <strong>{{ $comics->price }}</strong></div>
  <div class="text-center my-4">
   <img src="" alt="">
  </div>
  <p>{!! $comics->description !!}</p>
  <a class="btn btn-primary" href="{{ route('comics.index') }}">Go back to list</a>
 </div>
@endsection