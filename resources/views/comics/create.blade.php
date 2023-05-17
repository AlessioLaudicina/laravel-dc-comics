@extends('layouts.app')

@section('content')
  <div class="container">
    <h1>Add a new comic</h1>


    <form action="{{ route('comics.store') }}" method="POST">
      
      <div class="mb-3">
        <label for="title" class="form-label">Title*</label>
        <input type="text" class="form-control" name="title" id="title"
           placeholder="Add title">
      </div>

      <div class="mb-3">
        <label for="title" class="form-label">Title*</label>
        <input type="text" class="form-control" name="title" id="title"
           placeholder="Add title">
      </div>

      <div class="mb-3">
        <label for="title" class="form-label">Title*</label>
        <input type="text" class="form-control" name="title" id="title"
           placeholder="Add title">
      </div>


      
      <button type="submit" class="btn btn-primary mb-5">Add</button>

    </form>
  </div>
@endsection