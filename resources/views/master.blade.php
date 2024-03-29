
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/styles.css">


    {{-- <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/> --}}
    @yield('custom-style')
    <title>@yield('title')</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-md navbar-light shadow-sm">
      @guest
        <a class="navbar-brand a-blanco" href="/home_general"><h1>Booky</h1></a>
        @else
        <a class="navbar-brand a-blanco" href="/home"><h1>Booky</h1> </a>
      @endguest
     <?php $host =$_SERVER['REQUEST_URI'];?>
      <div class="container cont-menu ml-0">
          <ul class="navbar-nav mr-auto">
            @if ($host=="/home_general" || $host=="/")
            <li class="nav-item">
              <a class="nav-link a-blanco" href="#conocenos">Nosotros</a>
            </li>
            <li class="nav-item">
              <a class="nav-link a-blanco" href="#libros-recomendados" class="libros-recomendados">Libros recomendados</a>
            </li>
            @endif
          </ul>


          <div class="" id="navbarSupportedContent">
              <!-- Left Side Of Navbar -->
              <ul class="navbar-nav mr-auto">

              </ul>

              <!-- Right Side Of Navbar -->
              <ul class="navbar-nav ml-auto">
                  <!-- Authentication Links -->
                  @guest
                      <li class="nav-item">
                          <a class="nav-link a-blanco" href="{{ route('login') }}">{{ __('Ingresa') }}</a>
                      </li>
                      @if (Route::has('register'))
                          <li class="nav-item">
                              <a class="nav-link a-blanco" href="{{ route('register') }}">{{ __('Registrate') }}</a>
                          </li>
                      @endif
                  @else
                      <li class="nav-item dropdown">
                          <a id="navbarDropdown" class="nav-link dropdown-toggle a-blanco" href="" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                              {{ Auth::user()->name }}</a> <span class="caret"></span>
                          </a>

                          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="/home">
                                Inicio
                            </a>
                            <a class="dropdown-item" href="/profile">
                                Mi perfil
                            </a>
                            <a class="dropdown-item" href="/agregarLibros">
                                Agregar mi libro
                            </a>
                              <a class="dropdown-item" href="{{ route('logout') }}"
                                 onclick="event.preventDefault();
                                               document.getElementById('logout-form').submit();">
                                  {{ __('Logout') }}
                              </a>

                              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                  {{csrf_field ()}}
                              </form>
                          </div>
                      </li>
                  @endguest
              </ul>
          </div>
      </div>
  </nav>
    @yield ('main')





    @yield('jsextra')
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
     <script type="js/owl.carousel.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
