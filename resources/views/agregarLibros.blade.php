@extends('master')

@section('main')


  <div class="container1 fondo paral altura-minima">
    <div class="wrap-container container altura-minima mx-auto" style="background-color:rgba(245,245,245,0.8)">
      <div class="row py-4 mx-auto">
      <h2 class="col-12 my-4 mx-auto">Datos del libro</h2>
      <form class="" action="/agregarLibros" method="post" enctype="multipart/form-data" class="">
        {{csrf_field()}}
        <div class="row col-md-11 mx-auto">
          <div class="row p-0 col-sm-4 mx-auto">
                <h6 class="my-2 mx-auto text-center">Agregá la imagen del libro</h6>
                <div class="mx-auto py-4 mb-1">
                  <img class="img-fluid miniatura img-thumbnail" src="images/libros-prueba-1.jpeg" alt="IMG">
                </div>
                <div class="form-group text-center mb-3">
                  <input type="file" onchange="previewFile()" name="book_cover" class="form-control-file mx-auto"  style="font-size:15px">
                <small>{{$errors->first('book_cover')}}</small>
                </div>
          </div>
          {{-- <div class="container-form-btn">
            <input type="file" onchange="previewFile()" name="book_cover" class="btn btn-success d-inline" ><br>
          </div> --}}
      <div class="col-sm-8 p-0">
          <div class="form-group">
            <input type="text" class="form-control agregar" name="name" placeholder="Título del libro" value="{{old("name")}}">
            <small>{{$errors->first('name')}}</small>
          </div>

          <div class="form-group">
            <input type="text" class="form-control agregar" name="author" placeholder="Nombre completo del autor" value="{{old("author")}}">
            <small>{{$errors->first('author')}}</small>
          </div>

          <div class="form-group">
            <select name="book_action" class="form-control select100" id="exampleFormControlSelect1">
            <option>Disponible para:</option>

              <option value="1">Prestar</option>

            </select>
          </div>

          <div class="form-group">
            <textarea class="form-control" name="review" placeholder="Agrega un comentario sobre este libro "rows="4" value="{{old("description")}}"></textarea>
            <small>{{$errors->first('description')}}</small>
          </div>
          <div class="container-form-btn">
            <button type="submit" class="form-btn btn btn-success ml-4 px-4">
              Cargar al perfil
            </button>
          </div>
        </form>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="js/addImg.js">

</script>

@endsection
