@extends('../master')

@section('main')

<div class="fondo paral">
    <div class="row container mx-auto transparent" style="min-height:52vw">
        <div class="col-sm-10 panel-cont mx-auto">
            <div class="panel panel-default offset-lg-6 mx-auto">
                <div class="panel-body">

                    <form class="form-horizontal col-md-12 header-profile" method="POST" action="/editProfile">
                      {{csrf_field()}}
                        <h2>Ingresa tus nuevos datos</h2>
                        <div class="form-group row{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-form-label d-none d-md-block"><i class="fas fa-user"></i></label>

                            <div class="col-md-11 col-sm-12 pl-0 pr-0 ml-2">
                                <input id="name" type="text" class="form-control input-register" name="name" value="{{ old('name') }}" placeholder="ingresa tu nuevo nombre" autofocus>

                                @if ($errors->has('name'))
                                  <p>
                                    <span class="help-block errores">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    </p>
                                @endif
                            </div>
                        </div>

                        {{-- <div class="form-group row{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-form-label d-none d-md-block"><i class="far fa-envelope-open"></i></label>

                            <div class="col-md-11 col-sm-12 pl-0 pr-0 ml-2">
                                <input id="email" type="email" class="form-control input-register" name="email" value="{{ old('email') }}" placeholder="ingresa tu nuevo email">

                                @if ($errors->has('email'))
                                  <p>
                                    <span class="help-block errores">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                  </p>
                                @endif
                            </div>
                        </div> --}}

                        <div class="form-group row{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-form-label d-none d-md-block"><i class="fas fa-lock"></i></label>

                            <div class="col-md-11 col-sm-12 pl-0 pr-0 ml-2">
                                <input id="password" type="password" class="form-control input-register" name="password" placeholder="ingresa tu nueva contraseña">

                                @if ($errors->has('password'))
                                  <p>
                                    <span class="help-block errores">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                  </p>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-form-label d-none d-md-block"><i class="fas fa-lock"></i></label>

                            <div class="col-md-11 col-sm-12 pl-0 pr-0 ml-2">
                                <input id="password-confirm" type="password" class="form-control input-register" name="password-confirm" placeholder="confirma tu contraseña">
                            </div>
                        </div>


                        <div class="form-group my-4">
                            <div class="col-md-8 mx-auto">
                                <button type="submit" class="btn-login btn-register w-100">
                                Guardar cambios
                                </button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
