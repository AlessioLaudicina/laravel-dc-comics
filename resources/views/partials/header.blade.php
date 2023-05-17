<header class="py-3">
  <div class="container text-center">
    <a href="">
      <img src="{{ Vite::asset('resources/images/dc-logo.png') }}" alt="Logo">
    </a>
  </div>
  <div class="container text-center m-4">
    <a href="{{route('home')}}" class="px-2">Home</a>
    <a href="{{route('comics.index')}}" class="px-2">Comics</a>
    <a class="btn btn-primary px-2" href="{{ route('comics.create') }}">Add a new comic</a>
  </div>
</header>