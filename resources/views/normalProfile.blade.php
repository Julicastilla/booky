
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


    @if($user->image)
    <div class="circle" style="display:flex;justify-content:flex-end">

      <img src="/storage/{{$usuarioLog->image}}" width= "100%";>
    </div>
    @else
    <div class="circle">
      <img src="/images/fotoPerfil.jpg" alt="">
    </div>
    @endif

      <button type="button" class="btn btn-success agregImage"><i class="fas fa-pen-square"></i></button>
  </div>
  <div class="col-sm-6 profile-info">
    <div class="user-info">
    <div class="row">
      <h4 class="userName">{{$user->name}}</h4>
    </div>
     <div class="row user-data user-follow">

       <button id="myBtn" style="border-radius:5px;color:#18867a;background-color:white"><span class="col-sm-5 p-2"> {{count($follow)}} seguidores</span></button>


   <div id="myModal" class="modal">


     <div class="modal-content">
       <h1>lista de seguidores <span style"display:inline-block" class="close">&times;</span></h1>

       @forelse ($follow as $follower)
       @if ($usuarioLog->id!=$follower->user->id)
       <p> <a style="color:black; font-weight:bolder"  href="/normalProfile/{{$follower->user->id}}">{{$follower->user->name}}</a></p>
       @else
       <p> <a style="color:black; font-weight:bolder"  href="/profile">{{$follower->user->name}}</a></p>
      @endif
       @empty
       <p> No tiene ningún seguidor</p>
       @endforelse
     </div>

   </div>

   <button id="myBtn1" style="border-radius:5px;color:#18867a;background-color:white;margin-left:5%">      <span class="col-sm-5 p-2">{{count($following)}} seguidos  </span></button>


<div id="myModal1" class="modal1">


  <div class="modal-content1">
    <span class="close1">&times;</span>
    <h1>lista de seguidos</h1>

    @forelse ($following as $following_user)
    @if ($usuarioLog->id!=$following_user->user->id)
    <p> <a style="color:black; font-weight:bolder"  href="/normalProfile/{{$following_user->user->id}}">{{$following_user->user->name}}</a></p>
    @else
    <p> <a style="color:black; font-weight:bolder"  href="/profile">{{$following_user->user->name}}</a></p>
   @endif
    @empty
    <p> Este usuario no sigue a nadie</p>
    @endforelse
  </div>

</div>



    </div>
    @if (Auth::User()->isFollowing($user->id))

<form action="{{url('unfollow/' . $user->id)}}" method="POST" style="text-align:left;margin-top:5%">
{{ csrf_field() }}
{{ method_field('DELETE') }}

<button type="submit" id="delete-follow-{{ $user->target_id }}" class="btn btn-danger">
<i class="fa fa-btn fa-trash"></i>Dejar de seguir
</button>
</form>

@else

<form action="{{url('follow/' . $user->id)}}" method="POST" style="text-align:left;margin-top:5%">
{{ csrf_field() }}

<button type="submit" id="follow-user-{{ $user->id }}" class="btn btn-success">
<i class="fa fa-btn fa-user"></i>Seguir
</button>
</form>

@endif
      </div>
    <div class="row user-data book-button">
    <!-- <button type="submit" name="button" class="col-sm-4 btn btn-success p-1"><a href="/agregarLibros">Seguir</a></button> -->
    {{-- <button type="submit" name="button" class="col-sm-5 btn btn-success"><a href="#">Pedir libro</a></button> --}}

   </div>
  </div>
  </div>
      <div class="container profile" style="background-color:rgba(245,245,245,0.8)">
      <div class="row py-2">
      <div class="">
        <div class="librosInfo row">
          <div class="librosAPrestar col-12 row w-100 mx-auto">
            <h1 class="text-center col-sm-12">Libros para prestar</h1>
            @forelse ($userBooks as $book)
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
                <p>Por el momento no hay libros cargados</p>
              @endforelse
          </div>
          <div class="librosLeyendo col-12 row w-100 mx-auto">
            <h1 class="text-center col-sm-12">Libros solicitados</h1>
            @forelse ($userBooks as $book)
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
                <p>Por el momento no hay libros cargados</p>
              @endforelse
          </div>
          <div class="librosPrestados col-12 row w-100 mx-auto">
            <h1 class="text-center col-sm-12">Libros prestados</h1>
            @forelse ($userBooks as $book)
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
                <p>Por el momento no hay libros cargados</p>
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
