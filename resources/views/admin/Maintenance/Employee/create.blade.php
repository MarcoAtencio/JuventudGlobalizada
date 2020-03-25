@extends ('layouts.app')
@section ('contenido')
<section class="section">
    <div class="container py-4">
        <h1>
            Registrar empleado
        </h1>

        @if (count($errors)>0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="col-11 mx-auto py-3">
            <form enctype="multipart/form-data" action="{{ route('employees.store')}}" method="POST">
                @csrf
                @include('partials.auth.formEmployee')
            </form>
        </div>

    </div>
</section>

@endsection
