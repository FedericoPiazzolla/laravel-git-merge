<header class="px-5">
  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <div class="px-5">
        <img src="{{ Vite::asset('resources/img/cocktail-logo.png') }}" alt="Logo Cocktail">
      </div>
      <div class="collapse navbar-collapse h-100" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href=" {{route('welcome')}}">Home</a>
          </li>

          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('cocktails.index')}}">Cocktails List</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>