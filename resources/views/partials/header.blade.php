<header class="py-3">
  <div class="container text-center">
    <a href="">
      <img src="{{ Vite::asset('resources/images/dc-logo.png') }}" alt="Logo">
    </a>
  </div>
  <div class="container">
    <a href="{{route('home')}}">Home</a>
    <a href="{{route('comics.index')}}">Comics</a>
    <a class="btn btn-success" href="">Add a new comic</a>
  </div>
</header>