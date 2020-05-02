@extends ('layouts.app')
@section ('contenido')
<section class="section py-4">
    <div class="container">
        <h1 class="text-center">Asistencia de trabajadores</h1>
        <div class="row justify-content-center py-2">
            <div class="col-md-5">
                <div class="card text-center form">
                    <img src="/img/employees/{{$employee->photo}}" style="width: 5rem;" class="card-img-top mx-auto py-4" alt="foto">
                    <div class="text-center">
                        <div id="fecha"></div>
                        <div id="hora"></div>
                    </div>
                    <div class="card-body">
                        <div>
                            <p class="Dni">{{$employee->employee}}</p>
                            <p>{{$employee->name}} {{$employee->lastName}}</p>
                        </div>

                        <div>
                            <div class="alert alert-primary" role="alert">
                                Entrada: {{$employee->entry}}
                            </div>
                        <div class="alert alert-danger" role="alert">
                                Salida: {{$employee->exit ?: "--:--:--" }}
                            </div>
                        </div>
                        <div class="form-group py-1">
                            <button class="btn btn-primary" type="submit" role="link" onclick="window.location='{{ route('index') }}'">
                                Aceptar
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
