<nav class="nav">

        <div class="container-fluid">

            <div class="row">
                <div class="col-12 col-sm-3 box-logo">
                    <div class="media">
                        @if (Request::url() != route('index'))
                        <a href="{{ route('index') }}"><img src="https://juventudglobalizada.herokuapp.com/img/resource/logo.png" alt="logo" class="logo"></a>
                        @else
                        <img src="https://juventudglobalizada.herokuapp.com/img/resource/logo.png" alt="logo" class="logo">
                        @endif
                    </div>
                </div>


                <div class="col-12 col-sm-9 box-options align-self-center">
                    @if (Request::url() != route('login'))
                        <div class="row row-options">
                            <div class="col-10">
                    </div>

                            <div class="col-2 option-4">
                                <a id="navbarDropdown" style="margin-bottom: 0px" class="nav-link dropdown-toggle h3" href="#"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('login') }}"><i class="fas fa-user-circle"></i>{{ __(' Login') }}</a>
                                </div>
                            </div>

                        </div>
                    @endif
                </div>

            </div>

        </div>

</nav>
