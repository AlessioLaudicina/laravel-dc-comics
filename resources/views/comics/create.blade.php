@extends('layouts.app')

@section('content')
  <div class="container">
    <h1>Add a new comic</h1>
    @if ($errors->any())
      <div class="alert alert-danger" role="alert">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif


    <form action="{{ route('comics.store') }}" method="POST">
    @csrf 
      
    <div class="mb-3">
        <label for="title" class="form-label">Titolo</label>
        <input type="text" class="form-control @error('title') is-invalid @enderror"  name="title" id="title" value="{{ old('title') }}"  placeholder="Add title">
        @error('title')
        <div class="invalid-feedback">
          {{$message}} 
        </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="thumb" class="form-label">Url dell' immagine di copertina</label>
        <input type="text" class="form-control @error('thumb') is-invalid @enderror" name="thumb" id="thumb" value="{{ old('thumb') }}" 
           placeholder="Add image">
           @error('thumb')
        <div class="invalid-feedback">
          {{$message}} 
        </div>
        @enderror
      </div>


      <div class="mb-3">
        <label for="series" class="form-label">Serie</label>
        <input type="text" class="form-control @error('series') is-invalid @enderror"  name="series" id="series" value="{{ old('series') }}" placeholder="Add series">
        @error('series')
        <div class="invalid-feedback">
          {{$message}} 
        </div>
        @enderror
      </div>

      <div class="mb-3">
        <label for="price" class="form-label">Prezzo</label>
        <input type="text" class="form-control @error('price') is-invalid @enderror"  name="price" id="price"  value="{{ old('price') }}" placeholder="Add price">
        @error('price')
        <div class="invalid-feedback">
          {{$message}} 
        </div>
        @enderror
      </div>

      <div class="mb-3">
        <label for="sale_date" class="form-label">Data di uscita</label>
        <input type="text" class="form-control @error('sale_date') is-invalid @enderror"  name="sale_date" id="sale_date" value="{{ old('sale_date') }}" placeholder="Add series">
        @error('sale_date')
        <div class="invalid-feedback">
          {{$message}} 
        </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description"
          value="{{ old('description') }}" rows="3"></textarea>
        @error('description')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
      </div>





      
      <button type="submit" class="btn btn-primary mb-5">Aggiungi</button>

    </form>
  </div>
@endsection