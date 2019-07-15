

@extends('master')
@section('main')

<div class="fondo paral">
    <form class="form-group row my-0 p-0" id="search" action="/buscarLibros" method="get">
      <div class="col-lg-8">
        <input class="form-control col-md-10 mx-auto mt-3" name="search" type="text" placeholder="Busca tu libro" required>
      </div>
      <div class="btn-group btn-group-toggle col-5 row mx-auto" data-toggle="buttons">
          <label class="btn btn-secondary active my-1">
            <input type="radio" class="col-3 d-block" name="busqueda" id="option1" value="1" autocomplete="off" checked> Por título
          </label>
          <label class="btn btn-secondary my-1">
            <input type="radio" class="col-3 d-block" name="busqueda" id="option2" value="2" autocomplete="off"> Por autor
          </label>
      </div>
      <div class="mx-auto col-12 text-center mb-4">
          <span><button type="submit" class="btn btn-success btn-lg">Buscar</button></span>
      </div>
    </form>
<div class="jumbotron jumbotron-fluid col-xl-9">
    <h1 class="display-4">Somos una comunidad lectora</h1>
    <p class="lead">¿Tenés libros que amaste leer apilados en tu casa? En Booky creemos que ese libro quiere ser compartido con muchas personas más. Dejalo ir y que se sume a nuestra comunidad de libros viajeros!</p>
</div>
  <div class="container">
  <div class="row pasos">
    <div class="col-lg-4 col-md-4 col-sm-12 d-sm-block paso">
      <h3 class="pasos">Paso 1</h3>
      <p class="text-center">¿Qué libros querés compartir? Agregalos en tu perfil</p>

    </div>
    <div class="col-lg-4 col-md-4 col-sm-12 d-sm-block paso">
      <h3 class="pasos">Paso 2</h3>
      <p class="text-center">Recibí pedidos de lectores de la comunidad y compartilos con ellos!</p>

    </div>
    <div class="col-lg-4 col-md-4 col-sm-12 d-sm-block paso">
      <h3 class="pasos">Paso 3</h3>
      <p class="text-center">Buscá los libros que vos querés leer, pedilos y hacé nuevos amigos!</p>
    </div>
  </div>
  </div>
</div>
                     {{-- carrousel mobile --}}
<div class="d-block d-sm-block d-md-none">
  <div class="carousel slide" data-ride="carousel">
    <h1 class="m-4">Libros recomendados</h1>
   <!-- Indicators -->
    <ul class="carousel-indicators">
      <li data-target="#demo" data-slide-to="0" class="active"></li>
      <li data-target="#demo" data-slide-to="1"></li>
      <li data-target="#demo" data-slide-to="2"></li>
    </ul>
   <!-- The slideshow -->
    <div class="carousel-inner">
      <div class="carousel-item active mx-auto"> <a href="/login">
        <img src="images/libros/adorno.jpeg" class="d-block w-100 img-fluid"> </a>
      </div>
      <div class="carousel-item"> <a href="/login">
        <img src="images/libros/bartok.png" class="d-block w-100 img-fluid"></a>
      </div>
      <div class="carousel-item"> <a href="/login">
        <img src="images//libros/benjamin.png" class="d-block w-100 img-fluid"> </a>
      </div>
      <div class="carousel-item"> <a href="/login">
        <img src="images/libros/chomsky.jpeg" class="d-block w-100 img-fluid"></a>
      </div>
      <div class="carousel-item"> <a href="/login">
        <img src="images/libros/fundacion.jpeg" class="d-block w-100 img-fluid"></a>
      </div>
      <div class="carousel-item"> <a href="/login">
        <img src="images/libros/doerr.jpg" class="d-block w-100 img-fluid"></a>
      </div>
    </div>
  </div>
</div>


                  {{-- carrousel desktop --}}

<div class="d-none d-sm-none d-md-block">
  <div class="container">
  <div class="destacado">
    <h2 id="libros-recomendados">Libros recomendados </h2>
  </div>



    <div id="librosRecomendados" name="carouselExampleControls" class="carousel slide libros-carrusel" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="row libros-carouseles">
            <div class="col-2"><a href="/login"><img src="images/libros/adorno.jpeg" class="d-block w-100"></a></div>
            <div class="col-2"><a href="/login"><img src="images/libros/bartok.png" class="d-block w-100"></a></div>
            <div class="col-2"><a href="/login"><img src="images/libros/benjamin.png" class="d-block w-100"></a></div>
            <div class="col-2"><a href="/login"><img src="images/libros/chomsky.jpeg" class="d-block w-100"></a></div>
            <div class="col-2"><a href="/login"><img src="images/libros/fundacion.jpeg" class="d-block w-100"></a></div>
            <div class="col-2"><a href="/login"><img src="images/libros/doerr.jpg" class="d-block w-100"></a></div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="row">
            <div class="col-2"><a href="/login"><img src="images/libros/benjamin2.jpeg" class="d-block w-100"></a></div>
            <div class="col-2"><a href="/login"><img src="images/libros/benjamin3.jpeg" class="d-block w-100"></a></div>
            <div class="col-2"><a href="/login"><img src="images/libros/hemingway.jpeg" class="d-block w-100"></a></div>
            <div class="col-2"><a href="/login"><img src="images/libros/herzog.jpeg" class="d-block w-100"></a> </div>
            <div class="col-2"><a href="/login"><img src="images/libros/homo.jpg" class="d-block w-100"> </a></div>
            <div class="col-2"><a href="/login"><img src="images/libros/lolita.jpeg" class="d-block w-100"> </a></div>
          </div>
        </div>
      </div>
        <a class="carousel-control-prev" href="#librosRecomendados" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#librosRecomendados" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
    </div>
    </div>
    <div class="container">
      <div class="destacado">
        <h2 class="my-4" >Autores Latinoamericanos</h2>
      </div>
      <div id="autoresLatam" name="carouselExampleControls2" class="carousel slide libros-carrusel" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="row libros-carouseles">
              <div class="col-2 libros-carouseles"><a href="/login"> <img src="images/libros/garcia-marquez.jpg" class="d-block w-100" alt="..."> </a> </div>
              <div class="col-2 libros-carouseles "> <a href="/login"> <img src="images/libros/bogado.jpeg" class="d-block w-100" alt="..."> </a> </div>
              <div class="col-2 libros-carouseles"> <a href="/login"> <img src="images/libros/borges.jpeg" class="d-block w-100" alt="..."> </a> </div>
              <div class="col-2 libros-carouseles"> <a href="/login"> <img src="images/libros/ciempies.jpg" class="d-block w-100" alt="..."> </a> </div>
              <div class="col-2 libros-carouseles"> <a href="/login"> <img src="images/libros/detectives.jpg" class="d-block w-100" alt="..."> </a> </div>
              <div class="col-2 libros-carouseles"> <a href="/login"> <img src="images/libros/jazmin-paraguayo.jpeg" class="d-block w-100" alt="..."> </a> </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row">
              <div class="col-2 libros-carouseles"> <a href="/login"> <img src="images/libros/levrero2.jpeg" class="d-block w-100" alt="..."> </a> </div>
              <div class="col-2 libros-carouseles "> <a href="/login"> <img src="images/libros/levrero3.jpeg" class="d-block w-100" alt="..."> </a> </div>
              <div class="col-2 libros-carouseles"> <a href="/login"> <img src="images/libros/pichiciegos.jpeg" class="d-block w-100" alt="..."> </a> </div>
              <div class="col-2 libros-carouseles"> <a href="/login"> <img src="images/libros/punk.jpeg" class="d-block w-100" alt="..."> </a> </div>
              <div class="col-2 libros-carouseles"> <a href="/login"> <img src="images/libros/sklar.jpg" class="d-block w-100" alt="..."> </a> </div>
              <div class="col-2 libros-carouseles"> <a href="/login"> <img src="images/libros/putas-asesinas.jpeg" class="d-block w-100" alt="..."> </a> </div>
            </div>
          </div>
        </div>
          <a class="carousel-control-prev" href="#autoresLatam" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#autoresLatam" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
  </div>
</div>
</div>

@if (!Auth::user())
  <div class="conocenos row mt-4">
    <div class="text-conocenos col-xl-6">
      <div class="card conocenos">
        <div class="card-body conocenos">
          <h1 class="card-title" id="conocenos">Conocenos</h1>
          <p class="card-text conocenos">Seguramente te pasó mil veces: terminaste de leer un libro que te encantó y tuviste unas ganas irresistibles de compartirlo con alguien, ¡pero no sabías con quien! A nosotros nos pasó también, y por eso creamos esta comunidad. Tal vez 1984 de Orwell te haya volado la cabeza, o el último de Harry Potter. Sea cual sea tu libro, alguien lo quiere leer. Y alguien tiene el libro que vos buscás. Sumate!</p>
        </div>
      </div>
    </div>
  <div class="img-conocenos col-xl-6 conocenos pt-4">
      <div class="card conocenos">

          <img src="images/libros-y-risas2.jpg" alt="">
        </div>
      </div>
  </div>
  </div>
@endif

  <div id="carouselContent" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active text-center p-4">
             <p>"Que otros se enorgullezcan por lo que han escrito, yo me enorgullezco por lo que he leído"<br> Jorge Luis Borges</p>
        </div>
        <div class="carousel-item text-center p-4">
            <p>"Un libro debe ser el hacha que rompa el mar helado que hay dentro de nosotros" <br>Franz Kafka</p>
        </div>
        <div class="carousel-item text-center p-4">
            <p>"El que lee mucho y anda mucho, ve mucho y sabe mucho" <br>Miguel de Cervantes Saavedra</p>
        </div>
    </div>
      <a class="carousel-control-prev" href="#carouselContent" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselContent" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <footer class="col-lg-12 footer-home">
      <ul class="navbar-nav pt-4 m-0 text-center">
        <li class="nav-item active">
          @guest
            <a class="navbar-brand a-blanco" href="/home_general"><h1>Booky</h1></a>
            @else
            <a class="navbar-brand a-blanco" href="/home"><h1>Booky</h1> </a>
          @endguest
        </li>
        <ul class="navbar-nav text-center mb-1">
          @if (!Auth::user())
          <li class="nav-item">
            <a class="nav-link a-blanco" href="#conocenos">Nosotros</a>
          </li>
          <li class="nav-item">
            <a class="nav-link a-blanco" href="#libros-recomendados" class="libros-recomendados">Libros recomendados</a>
          </li>
          @endif
          <li>Digital House - 2019</li>
        </ul>
      </ul>
    </footer>

  @endsection
