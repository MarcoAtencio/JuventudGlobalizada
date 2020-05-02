<nav class="navbar navbar-expand-lg navbar-dark nav">
    <a class="navbar-brand" href="{{ route('admin') }}"><img src="{{asset('img/resource/logo.png')}}" alt="logo" class="logo-auth"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor02">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('employees.index') }}">Empleados <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="#">Informe de asistencias</a>
            </li>
            @if(auth()->user()->hasRole('SuperAdmin'))
                <li class="nav-item">
                    <a class="nav-link " href="{{ route('users.index') }}">Usuarios</a>
                </li>
            @endif
        </ul>
        <ul class="navbar-nav mr-5">
            <li class="nav-item dropdown ">
                <a class="nav-link dropdown-toggle text-white h3" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{ auth()->user()->name}}
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#"><i class="fas fa-cog"></i> Ajustes</a>
                    <a class="dropdown-item" href="#"><i class="fas fa-id-card"></i> Perfil</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                        <i class="fas fa-power-off"></i> Cerrar sesion
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
        </ul>
    </div>

</nav>
