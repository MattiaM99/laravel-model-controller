<header class="container py-5">
  <ul class="nav nav-pills">
     <li class="nav-item">
       <a class="nav-link {{ (Route::currentRouteName() === 'home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
     </li>
     <li class="nav-item">
       <a class="nav-link {{ (Route::currentRouteName() === 'actors') ? 'active' : '' }}" href="{{ route('actors') }}">Attori</a>
     </li>
     <li class="nav-item">
       <a class="nav-link {{ (Route::currentRouteName() === 'movies') ? 'active' : '' }}" href="{{ route('movies') }}">Movies</a>
     </li>
  </ul>
</header> 