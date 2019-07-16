@extends('master')
@section('custom-style')
  <link rel="stylesheet" href="/css/follow.css">
@endsection
@section('main')
  <div class="fondo paral">
 <div class="fondoProfile">
  <div class="container header-profile" style="background-color:rgba(245,245,245,0.7)">
  <div class="row profileImage jumbotron">
  <div class="col-sm-6">

    <form class="" action="/profile" method="post" enctype="multipart/form-data" class="">
        {{csrf_field()}}


          @if(Auth::user()->image)
          <div class="circle" style="display:flex;justify-content:flex-end">
            <img src="/storage/{{$usuarioLog->image}}" width=  "100%";>
          </div>

          @else
          <div class="circle">
            <img src="/images/fotoPerfil.jpg" alt="">
          </div>
          @endif
          <input type="file" onchange="previewFile()" name="image" class="image_select form-control-file mx-auto text-center" style="color:#18867a">
            <button style="display:none" type="submit" class="btn btn-success agregImage confirm_image">Confirmar imagen</button>
        </div>
      </form>


  <div class="col-sm-6 profile-info">
    <div class="user-info text-center">

     <div class="row user-data user-follow">

       <button id="myBtn"> <span  class="p-2"> {{count($follow)}} seguidores</span> </button>


       <div id="myModal" class="modal">


         <div class="modal-content">
           <h1> <span class="close">&times;</span> Lista de seguidores</h1>

           @forelse ($follow as $follower)
         <p> <a style="color:black; font-weight:bolder"  href="/normalProfile/{{$follower->user->id}}">{{$follower->user->name}}</a></p>
           @empty
           <p> No tienes ningún seguidor</p>
           @endforelse
         </div>

       </div>

       <button id="myBtn1" style="border-radius:5px;color:#18867a;background-color:white;margin-left:5%">      <span  class="col-sm-5 p-2">{{count($following)}} seguidos  </span></button>


<div id="myModal1" class="modal1">

 <div class="modal-content1">
   <span class="close1">&times;</span>
   <h1>lista de seguidos</h1>

   @forelse ($following as $following_user)

   <p> <a style="color:black; font-weight:bolder"  href="/normalProfile/{{$follower->user->id}}">{{$follower->user->name}}</a></p>

   @empty
   <p> No sigues a nadie</p>
   @endforelse
 </div>

</div>



    </div>
      </div>
    <div class="row user-data book-button">
    <button type="submit" name="button" class="col-sm-5 btn btn-success"><a href="/agregarLibros">Cargar libro</a></button>
    {{-- <button type="submit" name="button" class="col-sm-5 btn btn-success"><a href="#">Pedir libro</a></button> --}}
    <a class= "col-sm-5 btn btn-light p-2 edit text-center" href="/editProfile" style="margin:auto"> Editar perfil</a>
   </div>
  </div>
  </div>
      <div class="container profile" style="background-color:rgba(245,245,245,0.8)">
      <div class="row py-2">
      <div class="">
        <div class="librosInfo row">
          <div class="librosAPrestar col-12 row w-100 mx-auto">
            <h1 class="text-center col-sm-12">Libros para prestar</h1>
            @forelse ($myBooks as $book)
                @if ($book->state_id == 1)
                <div class="card col-md-3 mx-auto text-center" style="width: 18rem;">
                <img class="card-img-top mx-auto mt-1" src="/storage/{{$book->image}}" alt="Imagen del libro">
                <div class="card-body">
                  <h5 class="card-title">{{$book->title->name}}</h5>
                  <a href="/bookPost/{{$book->id}}" class="btn btn-success">Ver detalle</a>
                </div>
              </div>
                @endif
              @empty
                <p class="pl-3">Por el momento no hay libros cargados</p>
              @endforelse
          </div>
          <div class="librosLeyendo col-12 row w-100 mx-auto">
            <h1 class="text-center col-sm-12">Libros solicitados</h1>
            @forelse ($myBooks as $book)
              @if ($book->state_id == 2)
                <div class="card col-md-3 mx-auto text-center" style="width: 18rem;">
                <img class="card-img-top mx-auto mt-1" src="/storage/{{$book->image}}" alt="Imagen del libro">
                <div class="card-body">
                  <h5 class="card-title">{{$book->title->name}}</h5>
                  <a href="/bookPost/{{$book->id}}" class="btn btn-success">Ver detalle</a>
                </div>
              </div>
              @endif
              @empty
                <p class="pl-3">Por el momento no hay libros cargados</p>
              @endforelse
          </div>
          <div class="librosPrestados col-12 row w-100 mx-auto">
            <h1 class="text-center col-sm-12">Libros prestados</h1>
            @forelse ($myBooks as $book)
              @if ($book->state_id == 3)
                <div class="card col-md-3 mx-auto text-center" style="width: 18rem;">
                <img class="card-img-top mx-auto mt-1" src="/storage/{{$book->image}}" alt="Imagen del libro">
                <div class="card-body">
                  <h5 class="card-title">{{$book->title->name}}</h5>
                  <a href="/bookPost/{{$book->id}}" class="btn btn-success">Ver detalle</a>
                </div>
              </div>
              @endif
              @empty
                <p class="pl-3">Por el momento no hay libros cargados</p>
              @endforelse
          </div>
        </div>
      </div>
    </div>




        </div>

  </div>

  </div>
  </div>
</div>
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
<script src="/js/follow.js">

</script>
@endsection
