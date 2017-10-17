@extends('layouts.app')

@section('content')
<div class="container mt-4">

    <div class="row justify-content-center">

        <div class="col-md-5">

            <div class="card">

                <div class="card-header">

                    <h4>Restablecer contraseña</h4>
                </div>

                <div class="card-body">

                    <form class="form" method="POST" action="{{ route('password.email') }}" novalidate>

                        {{ csrf_field() }}

                        <div class="form-group">

                            <label for="email" class="control-label">Correo electrónico</label>

                            <input id="email" type="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                            @if ($errors->has('email'))

                                <span class="invalid-feedback">

                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                        
                        <div class="form-group">

                            <button type="submit" class="btn btn-primary btn-block">

                                Enviar enlace
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
