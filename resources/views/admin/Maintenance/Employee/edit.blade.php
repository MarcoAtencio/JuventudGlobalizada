@extends ('layouts.app')
@section ('contenido')
<section class="section py-5">
    <div class="container py-5 form">
        <h2>
            Modificar empleado
        </h2>

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
            <form enctype="multipart/form-data" action="{{ route('employees.update',$emp->dni)}}" method="POST">
                @csrf
                @method('patch')
                @include('partials.auth.formEmployee')
            </form>
        </div>

    </div>
</section>

@endsection
