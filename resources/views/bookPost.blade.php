@extends('master')
@section('custom-style')
{{-- <link rel="stylesheet" href="/css/agregarLibros.css"> --}}
@endsection

@section('main')


<div class="container1" style="background-image: url('images/bg-01.jpg');">
  <div class="container2 fondo paral altura-minima">
    <div class="wrap-container container altura-minima" style="
    background-color: rgba(245,245,245,0.8)">
        <div class="row p-4">
        <h2 class="form-title col-12">Detalle de este libro</h2>{{-- si existe un titulo resultado, falta si existe un autor resultado --}}
        <div class="row col-12 mx-auto">
          <div class="col-lg-8">
            <div class="card my-4">
              <div class="card-body">
                <h5 class="card-title">{{$book->title->name}}</h5>
                <p class="card-text">{{$book->review}}</p>



                <ul class="list-group list-group-flush">

                  @if($usuarioLog->id !== $book->user_id)
                  <li class="list-group-item">Compartido por:<a style="color:#18867a; font-weight:bolder"  href="/profile"> {{$book->user->name}} </a> </li>
                @endif
            @if (Auth::User()->id !== $book->user_id)
                @if ($book->state_id == 1)
                <li class="list-group-item"> ¡Disponible! <a href="/solicitar/{{$book->id}}" class="btn btn-success m-2">Solicitar</a></li>
              @elseif ($book->state_id == 2)
                <li class="list-group-item pl-4">Libro solicitado</li>
                @elseif ($book->state_id == 3)
                <li class="list-group-item3 pl-4">Libro prestado</li>
                @endif
            @else
                @if ($book->state_id == 1)
                <li class="list-group-item pl-4">Disponible para prestar</li>
                @elseif ($book->state_id == 2)
                <li class="list-group-item">Tu libro fue solicitado por <a style="color:#18867a" href="/normalProfile/{{$userInteresado->id}}">{{$userInteresado->name}}</a><a href="/confirmar/{{$book->id}}" class="btn btn-success m-2">Confirmar préstamo</a></li>
                @elseif ($book->state_id == 3)
                <li class="list-group-item">¿<a style="color:#18867a" href="/normalProfile/{{$userInteresado->id}}">{{$userInteresado->name}}</a> te devolvió el libro? <a href="/devolver/{{$book->id}}" class="btn btn-success m-2">Confirmar devolución</a></li>
                @endif
            @endif
               </ul>
               @if (Auth::User()->id == $book->user_id)
               <form  class="mt-4" action="/borrarPost" method="post" style="float:right">
             {{csrf_field()}}
               <input type="hidden" name="id" value="{{$book->id}}">
               <input type="submit" name="" value="Eliminar publicación" style="color:#18867a">
               </form>
               @endif
              </div>
            </div>
          </div>

        <div class="container-image col-lg-4">
          <div class="container-image-in text-center">
              <img class="mt-4 img-fluid"src="/storage/{{$book->image}}" alt="IMG">
          </div>
        </div>

    </div>

    </div>
  </div>
</div>



@endsection
