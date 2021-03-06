<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        @include('statamic::partials.head')
    </head>
    <body class="outside @yield('body_class')" style="background-color: #00b5fa">
        <div id="statamic">
            @yield('content')
        </div>
        @include('statamic::partials.scripts')
        @yield('scripts')
    </body>
</html>
