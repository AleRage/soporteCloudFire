@extends('layouts.app')

@section('content')
<div class="container mt-4">

    <div class="row justify-content-center">

        <div class="col-md-5 ">

            <div class="card">

                <div class="card-header">

                    <h4>Registro</h4>
                </div>

                <div class="card-body">

                    <form class="form" method="POST" action="{{ route('register') }}" novalidate>

                        {{ csrf_field() }}

                        <div class="form-group">

                            <label for="first_name" class="control-label">Nombre</label>

                            <input id="first_name" type="text" class="form-control {{ $errors->has('first_name') ? 'is-invalid' : '' }}" name="first_name" value="{{ old('first_name') }}" required autofocus>

                            <span class="invalid-feedback">{{ $errors->first('first_name') }}</span>
                        </div>

                        <div class="form-group">

                            <label for="last_name" class="control-label">Apellido</label>

                       
                            <input id="last_name" type="text" class="form-control {{ $errors->has('last_name') ? 'is-invalid' : '' }}" name="last_name" value="{{ old('last_name') }}" required autofocus>

                            <span class="invalid-feedback">{{ $errors->first('last_name') }}</span>
                        </div>

                        <div class="form-group">

                            <label for="email" class="control-label">Correo electrónico</label>

                       
                            <input id="email" type="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                            <span class="invalid-feedback">{{ $errors->first('email') }}</span>
                        </div>

                        <div class="form-group">

                            <label for="password" class="control-label">Contraseña</label>

                       
                            <input id="password" type="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" name="password" required>

                            <span class="invalid-feedback">{{ $errors->first('password') }}</span>
                        </div>

                        <div class="form-group">

                            <label for="password-confirm" class="control-label">Confirmar contraseña</label>

                       
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                        </div>
                        
                        <div class="form-group">
                            
                            <button type="submit" class="btn btn-primary btn-block">

                                Registrar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<br>

@endsection
