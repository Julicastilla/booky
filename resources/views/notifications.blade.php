

@extends('master');

@section('main')
<div class="fondo paral">
<div class="container">
<div class="row p-4">
      <h2 class="col-12 form-title pb-4">Encontramos estos libros</h2>
      <h3 style="display:none"> hay nuevos libros disponibles, hace click <strong>acá</strong> </h3>
      @forelse ($books as $book)
        <div class="card col-lg-8 p-4 my-3 mx-auto">
          <div class="card-body row">
            <div class="col-lg-3 miniatura">
              <img src="/storage/{{$book->image}}" alt="" class="img-thumbnail">
            </div>
            <ul class="col-lg-9">
              <h5>{{$book->title->name}}</h5>
              <li class="list-group-item">  Autor: {{$book->author->name}} </li>
              <li class="list-group-item">Estado de este ejemplar: {{$book->state->name}}</li>
              <p>{{$book->id}}</p>
              <a href="/bookPost/{{$book->id}}" class="btn btn-success mt-3">Ver más</a>
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
<script src="js/notifications.js"></script>
@endsection
