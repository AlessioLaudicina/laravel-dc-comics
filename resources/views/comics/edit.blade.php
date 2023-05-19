@extends('layouts.app')

@section('content')
  <div class="container">
    <h1>Modifica info</h1>


    <form action="{{ route('comics.update', ['comic' => $comics->id])}}" method="POST">
    @csrf
    @method('PUT') 

    <div class="mb-3">
        <label for="title" class="form-label">Titolo</label>
        <input type="text" class="form-control" name="title" id="title"  value="{{ old('title', $comics->title) }}"
           placeholder="Add title">
      </div>
      
      <div class="mb-3">
        <label for="title" class="form-label">Url dell' immagine di copertina</label>
        <input type="text" class="form-control" name="thumb" id="thumb"  value="{{ old('thumb', $comics->thumb) }}"
           placeholder="Add image">
      </div>


      <div class="mb-3">
        <label for="title" class="form-label">Serie</label>
        <input type="text" class="form-control"  name="series" id="series" value="{{ old('series', $comics->series) }}" placeholder="Add series">
      </div>

      <div class="mb-3">
        <label for="title" class="form-label">Data di uscita</label>
        <input type="text" class="form-control"  name="sale_date" id="sale_date" value="{{ old('sale_date', $comics->sale_date) }}" placeholder="Add series">
      </div>

      <div class="mb-3">
        <label for="title" class="form-label">Prezzo</label>
        <input type="text" class="form-control"  name="price" id="price" value="{{ old('price', $comics->price) }}" placeholder="Add price">
      </div>
      <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description"
          rows="3">{{ old('description', $comics->description) }}</textarea>
        @error('series')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
      </div>


      
      <button type="submit" class="btn btn-primary mb-5">Modifica</button>

    </form>
  </div>
@endsection