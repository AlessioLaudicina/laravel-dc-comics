<header class="py-3">
  <div class="container d-flex justify-content-center">
    <a href="">
      <img src="{{ Vite::asset('resources/images/dc-logo.png') }}" alt="Logo">
    </a>
  </div>
  <div class="container d-flex justify-content-center py-3">
    <a href="{{route('home')}}" class="px-2">Home</a>
    <a href="{{route('comics.index')}}" class="px-2">Comics</a>
    <a class=" px-2" href="{{ route('comics.create') }}">Aggiungi comic</a>
  </div>
</header>