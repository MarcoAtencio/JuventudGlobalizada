@extends ('layouts.app')
@section ('contenido')
    <section class="section py-5">
        <div class="container py-5 form">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                    <h1>Lista de Empleados <a href="{{ route('employees.create') }}"><button class="btn btn-success">Nuevo</button></a></h1>
                    @include('partials.auth.search')
                </div>
            </div>

            <table class="table table-hover ">
                <thead class="thead-light">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">DNI</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($employees as $emp)
                    <tr onclick="window.location='{{ route('employees.show',$emp->dni) }}'" >
                        <td>{{ $emp->id}}</td>
                        <td>{{ $emp->dni}}</td>
                        <td>{{ $emp->name}}</td>
                        <td>{{ $emp->lastName}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{ $employees->links() }}
        </div>

    </section>

@endsection
