<!-- 

Tela de login do usuario;

-->

@extends('auth.loginscreen')

@section('htmlheader_title', 'Login')
@section('contentheader_title', 'Login')

@section('links_adicionais')  

  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
  <!-- Google Font: Source Sans Pro -->

@endsection

@section('conteudo')
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="" class="h1"><b>Treinamento</b>Amós</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Entre para iniciar a sessão</p>

      <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="input-group mb-3">
              <input type="email" class="form-control  @error('email') is-invalid @enderror" placeholder="E-mail" name="email" value="{{old('email')}}">
              <div class="input-group-append">
                  <div class="input-group-text">
                      <span class="fas fa-envelope"></span>
                  </div>
              </div>
              @error('email')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>

                    <div class="input-group mb-3">
                        <input type="password" class="form-control  @error('password') is-invalid @enderror" placeholder="Senha" name='password'>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        
                    </div>

        <div class="row">
        <div class="col-8">
              <div class="icheck-primary">
                  <input type="checkbox" id="remember" {{ old('remember') ? 'checked' : '' }}>
                  <label for="remember">
                      Lembre-se
                  </label>
              </div>
          </div>

          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

    

      @if (Route::has('password.request'))
            <a class="btn btn-link" href="{{ route('password.request') }}">
                {{ __('Forgot Your Password?') }}
            </a>
        @endif

        <a href="register.html"  class="btn btn-link" >Register a new membership</a>

    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->
@endsection

@section('scripts_adicionais') 
@endsection


