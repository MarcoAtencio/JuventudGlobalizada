<!doctype html>
<html lang="en">

    @include('partials.head')

    <body>

        @auth
            @include('partials.auth.navAuth')
        @endauth

        @guest
            @include('partials.auth.nav')
        @endguest

        @yield('contenido')

        @include('partials.footer')


        @include('partials.dependencies')
    </body>
</html>
