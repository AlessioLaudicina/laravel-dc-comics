@extends('layouts.app')

@section('content')
  <div class="container">
    <h1>Add a new comic</h1>


    <form action="{{ route('comics.update', ['comic' => $comics->id])}}" method="POST">
    @csrf
    @method('PUT') 
      
      <div class="mb-3">
        <label for="title" class="form-label">Url dell' immagine di copertina</label>
        <input type="text" class="form-control" name="thumb" id="thumb" value="{{$comics->thumb}}"
           placeholder="Add image">
      </div>

      <div class="mb-3">
        <label for="title" class="form-label">Titolo</label>
        <input type="text" class="form-control" name="title" id="title" value="{{$comics->title}}"
           placeholder="Add title">
      </div>

      <div class="mb-3">
        <label for="title" class="form-label">Serie</label>
        <input type="text" class="form-control"  name="series" id="series" value="{{$comics->series}}" placeholder="Add series">
      </div>

      <div class="mb-3">
        <label for="title" class="form-label">Data di uscita</label>
        <input type="text" class="form-control"  name="sale_date" id="sale_date" value="{{$comics->sale_date}}" placeholder="Add series">
      </div>

      <div class="mb-3">
        <label for="title" class="form-label">Prezzo</label>
        <input type="text" class="form-control"  name="price" id="price" value="{{$comics->price}}" placeholder="Add price">
      </div>


      
      <button type="submit" class="btn btn-primary mb-5">Modifica</button>

    </form>
  </div>
@endsection