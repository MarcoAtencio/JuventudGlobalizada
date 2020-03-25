@extends ('layouts.app')
@section ('contenido')
<section class="section py-4">
    <div class="container">
        <h1 class="text-center">Asistencia de trabajadores</h1>
        <div class="row justify-content-center py-2">
            <div class="col-md-5">
                <div class="card ">
                    <img src="img/reloj4.png" style="width: 15rem;" class="card-img-top mx-auto py-4" alt="...">
                    <div class="text-center">
                        <div id="fecha"></div>
                        <div id="hora"></div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('store') }}">
                            @csrf

                            <div class="form-group ">
                                <input type="text" name="dni" class="form-control" placeholder="Ingrese su dni...">
                            </div>

                            <div class="form-group text-center">
                                <button class="btn btn-primary" type="submit">Marcar asistencia</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>

</section>

@endsection
