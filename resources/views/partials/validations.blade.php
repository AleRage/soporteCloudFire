<div class="container mt-4">

    <div class="row justify-content-center">

        <div class="col-md-6 ">

            @if (count($errors))

                <div class="alert alert-danger alert-dismissible fade show" role="alert">

                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>

                    <strong>Whoops!</strong> Hubo algunos problemas con los datos:
                    
                    <br/>

                    <ul>

                        @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>  
            @endif

            @if ( session('status') )
                
                @include('partials/alertSuccess')

                {{ session('status') }}
            @elseif ( session('success') )

                @include('partials/alertSuccess')

                {{ session('success') }}
            @elseif ( session('notification') )

                @include('partials/alertSuccess')

                <h4 class="alert-heading">Bienvenido!!!</h4>

                {{ session('notification') }}

                <hr>

                <p class="mb-0">Ahora puedes ver y compartir contenido.</p>
                
            @endif
        </div>
    </div>
</div>