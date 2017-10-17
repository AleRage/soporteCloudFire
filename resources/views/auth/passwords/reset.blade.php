@extends('layouts.app')

@section('content')
<div class="container mt-4">

    <div class="row justify-content-center">

        <div class="col-md-5">

            <div class="card">

                <div class="card-header">

                    <h4>Cambiar contraseña</h4>
                </div>

                <div class="card-body">

                    <form class="form" method="POST" action="{{ route('password.request') }}" novalidate>

                        {{ csrf_field() }}

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group">

                            <label for="email" class="control-label">Correo electrónico</label>

                            <input id="email" type="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" name="email" value="{{ $email or old('email') }}" required autofocus>

                            @if ($errors->has('email'))

                                <span class="invalid-feedback">

                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group">

                            <label for="password" class="control-label">Contraseña</label>

                            <input id="password" type="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" name="password" required>

                            @if ($errors->has('password'))

                                <span class="invalid-feedback">

                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group">

                            <label for="password-confirm" class="control-label">Confirmar contraseña</label>

                            <input id="password-confirm" type="password" class="form-control {{ $errors->has('password_confirmation') ? 'is-invalid' : '' }}" name="password_confirmation" required>

                            @if ($errors->has('password_confirmation'))

                                <span class="invalid-feedbackk">

                                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                                </span>
                            @endif
                        </div>
                        
                        <div class="form-group">

                            <button type="submit" class="btn btn-primary btn-block">

                                Guardar cambio
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
