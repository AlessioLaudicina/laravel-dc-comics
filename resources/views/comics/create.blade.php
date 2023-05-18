@extends('layouts.app')

@section('content')
  <div class="container">
    <h1>Add a new comic</h1>


    <form action="{{ route('comics.store') }}" method="POST">
    @csrf 
      
    <div class="mb-3">
        <label for="title" class="form-label">Titolo</label>
        <input type="text" class="form-control" name="title" id="title"
           placeholder="Add title">
      </div>
      <div class="mb-3">
        <label for="thumb" class="form-label">Url dell' immagine di copertina</label>
        <input type="text" class="form-control" name="thumb" id="thumb"
           placeholder="Add image">
      </div>

      <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <input type="text" class="form-control" name="description" id="description"
           placeholder="Add description">
      </div>

      <div class="mb-3">
        <label for="series" class="form-label">Serie</label>
        <input type="text" class="form-control"  name="series" id="series" placeholder="Add series">
      </div>

      <div class="mb-3">
        <label for="price" class="form-label">Prezzo</label>
        <input type="text" class="form-control"  name="price" id="price" placeholder="Add price">
      </div>

      <div class="mb-3">
        <label for="sale_date" class="form-label">Data di uscita</label>
        <input type="text" class="form-control"  name="sale_date" id="sale_date" placeholder="Add series">
      </div>

      <div class="mb-3">
        <label for="sale_date" class="form-label">Data di uscita</label>
        <input type="text" class="form-control"  name="sale_date" id="sale_date" placeholder="Add series">
      </div>





      
      <button type="submit" class="btn btn-primary mb-5">Aggiungi</button>

    </form>
  </div>
@endsection