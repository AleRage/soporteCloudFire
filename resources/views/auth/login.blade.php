@extends('layouts.app')

@section('content')

<div class="container mt-4">

    <div class="row justify-content-center">

        <div class="col-md-5 ">

            <div class="card">

                <div class="card-header">
                    
                    <h4>Login</h4>
                </div>

                <div class="card-body">

                    <div class="col-md-12 align-self-center">

                        <form class="form" method="POST" action="{{ route('login') }}" novalidate>

                            {{ csrf_field() }}

                            <div class="form-group">

                                <label for="email" class="control-label">Correo electrónico</label>

                                <input id="email" type="email" class="form-control col-md-12 {{ $errors->has('email') ? 'is-invalid' :'' }}" name="email" value="{{ old('email') }}" required autofocus>

                                <span class="invalid-feedback">{{ $errors->first('email') }}</span>
                            </div>

                            <div class="form-group">

                                <label for="password" class="control-label">Contraseña</label>

                                <input id="password" type="password" class="form-control col-md-12 {{ $errors->has('password') ? 'is-invalid' :'' }}" name="password" required>

                                <span class="invalid-feedback">{{ $errors->first('password') }}</span>
                            </div>

                            <div class="form-group">

                                <div class="checkbox">

                                    <label> 

                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Recuérdame
                                    </label>
                                </div>
                            </div>

                            <div class="form-group">

                                <button type="submit" class="btn btn-primary btn-block ">

                                    Iniciar sesión 
                                </button>

                                <a class="btn btn-link btn-block" href="{{ route('password.request') }}">

                                    ¿Olvidaste tu contraseña?
                                </a>   
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
@endsection
