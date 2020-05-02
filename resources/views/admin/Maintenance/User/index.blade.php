@extends ('layouts.app')
@section ('contenido')
    <section class="section py-5">
        <div class="container py-5 form">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                    <h1>Lista de Usuarios <a href="{{ route('users.create') }}"><button class="btn btn-success">Nuevo</button></a></h1>

                </div>
            </div>

            <table class="table table-hover ">
                <thead class="thead-light">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Email</th>

                </tr>
                </thead>
                <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id}}</td>
                        <td>{{ $user->name}}</td>
                        <td>{{ $user->email}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{ $users->links() }}
        </div>

    </section>

@endsection
