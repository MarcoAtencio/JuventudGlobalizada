@extends ('layouts.app')
@section ('contenido')
    <section class="section py-5">
        <div class="container py-5 form">
            <h1>
                Registrar Usuario
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

            <div class="col-11 mx-auto py-4">
                <form enctype="multipart/form-data" action="{{ route('users.store')}}" method="POST">
                    @csrf
                    @include('partials.auth.formUser')
                </form>
            </div>

        </div>
    </section>

@endsection
