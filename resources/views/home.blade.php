

@extends('master')
@section('main')

<div class="fondo paral">
  @if (Auth::user())
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
      <div class="mx-auto col-12 text-center">
          <span><button type="submit" class="btn btn-success btn-lg">Buscar</button></span>
      </div>
    </form>
  @endif
<div class="">
  <div class="card col-lg-8 p-4 m-3 mx-auto" style="background-color:rgba(255,255,255,0.5)">
    <h2 class="mb-2">Libros disponibless</h2>
    @forelse ($books as $book)
      <div class="card col-lg-10 mx-auto row pt-2 pb-4 my-2 post">
        <div class="card-body col-12 row pb-3">
          <div class="col-lg-3 miniatura mx-auto">
            <img src="/storage/{{$book->image}}" alt="" class="img-thumbnail img-fluid">
          </div>
          <ul class="col-lg-9">
            <h5 class="card-title col-12 m-4">¡Nuevo libro disponible!</h5>

            <li class="card-text pt-4 list-group-item"> <a href="/normalProfile/{{$book->user->id}}">{{$book->user->name}}</a> agregó
               "<a href="/bookPost/{{$book->id}}">{{$book->title->name}}</a>"</li>

            @if (Auth::user()->id !== $book->user->id)
                <li class="list-group-item"> ¿Te interesa? <a href="/solicitar/{{$book->id}}" class="btn btn-success m-4">¡Solicitalo!</a> </li>
            @else
                <li class="list-group-item">Gracias por compartir este libro!</li>
            @endif

          </ul>
        </div>
      </div>
    @empty
        <div class="altura minima">
          No hay libros disponibles
        </div>
    @endforelse
  </div>
</div>

</div>

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
