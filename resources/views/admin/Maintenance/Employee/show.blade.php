@extends ('layouts.app')
@section ('contenido')

<section class="section py-4">
    <div class="container py-5">
        <div class="row ">
            <div class="col-8 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title mb-4">
                            <div class="d-flex justify-content-start">
                                <h2 class="col-8 align-self-center">Codigo # {{$emp->id}}</h2>
                                <div class="image-container">
                                    <img src="http://placehold.it/150x150" id="imgProfile" style="width: 150px; height: 150px" class="img-thumbnail" />
                                </div>
                            </div>
                            <hr />

                            <div class="row">
                                <div class="col-12">
                                    <div class="tab-content ml-1" id="myTabContent">
                                        <div class="tab-pane fade show active" id="basicInfo" role="tabpanel" aria-labelledby="basicInfo-tab">

                                            <div class="row">
                                                <div class="col-sm-3 col-md-3 col-5">
                                                    <label style="font-weight:bold;">DNI</label>
                                                </div>
                                                <div class="col-md-8 col-6">
                                                    {{ $emp->dni }}
                                                </div>
                                            </div>
                                            <hr />

                                            <div class="row">
                                                <div class="col-sm-3 col-md-3 col-5">
                                                    <label style="font-weight:bold;">Nombre completo</label>
                                                </div>
                                                <div class="col-md-8 col-6">
                                                    {{ $emp->name }} {{$emp->lastName}}
                                                </div>
                                            </div>
                                            <hr />

                                            <div class="row">
                                                <div class="col-sm-3 col-md-3 col-5">
                                                    <label style="font-weight:bold;">Correo personal</label>
                                                </div>
                                                <div class="col-md-8 col-6">
                                                    {{ $emp->email }}
                                                </div>
                                            </div>
                                            <hr />

                                            <div class="row">
                                                <div class="col-sm-3 col-md-3 col-5">
                                                    <label style="font-weight:bold;">Numero de celular</label>
                                                </div>
                                                <div class="col-md-8 col-6">
                                                    {{ $emp->cellPhone }}
                                                </div>
                                            </div>
                                            <hr />

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="text-center">
                            <a href="{{ route('employees.edit',$emp->dni) }}">
                                <button class="btn btn-info">Editar</button>
                            </a>

                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#staticBackdrop">
                                Eliminar
                            </button>
                        </div>

                        @include('partials.modal')

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
