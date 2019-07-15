@extends('master')
@section('custom-style')
  <link rel="stylesheet" href="/css/follow.css">
@endsection
@section('main')
<div class="fondo paral">
<div class="container" style="background-color:rgba(255,255,255,0.5)">
<div class="row p-4">
      <h2 class="col-12 form-title pb-4">Encontramos estos libros</h2>
      @forelse ($librosFinales as $libro)
        <div class="card col-lg-8 p-4 my-3 mx-auto post" >
          <div class="card-body row">
            <div class="col-lg-3 miniatura mx-auto">
              <img src="/storage/{{$libro->image}}" alt="" class="img-thumbnail">
            </div>
            <ul class="col-lg-9">
              <h5 class="pl-2">{{$libro->title->name}}</h5>
              <li class="list-group-item">  Autor: {{$libro->author->name}} </li>
              <li class="list-group-item">Estado de este ejemplar: {{$libro->state->name}}</li>


             @if (!AUTH::user())
              <a class="btn btn-success mt-3 myBtn2">Ver más</a>


              <div class="modal2 myModal">


                <div class="modal-content2" style="text-align:center">


                  <h1> <span class="close2">&times;</span> Para ver los detalles del libro debes estar logueado.</h1>
                  <h3>Haz click <a style="color: blue" href="/login">aquí </a> si tienes una cuenta o <a style="color: blue" href="/register"> aquí</a>  para registrarte</h3>


              </div>

        </ul>


          </div>
        </div>

          @else

          <a href="bookPost/{{$libro->id}}"   class="btn btn-success mt-3 myBtn2">Ver más</a>
         </ul>
       </div>
     </div>


        @endif
      @empty
          <div class="altura minima">
            No hay libros disponibles
          </div>
      @endforelse

</div>
</div>
</div>

<script src="/js/agregarLibros.js">

</script>

@endsection
