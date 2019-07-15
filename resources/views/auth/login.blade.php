@extends('../master')

@section('main')
  {{-- <header class="header-login row">
     <nav class="cont-logo col-lg-7 col-md-6">
       <img src="img/logo-verde-g.png" alt="">
       <h1 class="titulo"><a class="a-reg" href="/home">Booky</a></h1>
      </nav>
     <p class="col-lg-5 col-md-6">¿No estás registrado? <a class="a-reg" href="/register"> Crea una cuenta</a></p>
  </header> --}}
  <div class="container">
    <div class="row cont-form">
        <div class="col-sm-12 panel-cont">
            <div class="panel panel-defaut offset-lg-6">
                <div class="panel-body">
                    <form class="form-horizontal form-login col-md-12" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                          <h2>Ingresa</h2>
                        <div class="datos form-group row{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-form-label d-none d-md-block"><i class="fas fa-user"></i></label>

                            <div class="col-md-11 col-sm-12 pl-0 pr-0">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="ingresa tu email" autofocus>

                                @if ($errors->has('email'))
                                  <p>
                                    <span class="help-block errores">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                  </p>
                                @endif
                            </div>
                        </div>

                        <div class="datos form-group row{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-form-label d-none d-md-block"><i class="fas fa-lock"></i></label>

                            <div class="col-md-11 col-sm-12 pl-0 pr-0">
                                <input id="password" type="password" class="form-control " name="password" placeholder="ingresa tu contraseña">

                                @if ($errors->has('password'))
                                  <p class="">
                                    <span class="help-block errores">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    </p>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4 mx-auto">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Recordarme
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group recover">
                            <div class="col-md-8 mx-auto">
                                <button type="submit" class="btn btn-primary btn-login w-75">
                                    Ingresa
                                </button>

                                <a class="btn btn-link" href="/register">
                                    ¿Olvidaste tu contraseña?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
