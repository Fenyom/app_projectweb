<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title') - {{ env('APP_NAME') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet">

    </head>
    <body>
        <div class="flex-center position-ref full-height">
        

            <div class="content">
                @yield('content')

                <div class="links">
                    <a href="{{ route('home') }}">Home</a>
                    <a href="{{ route('create_product') }}">Create product</a>
                </div>
            </div>
        </div>

        <script src="{{ URL::asset('js/app.js') }}"></script>
    </body>
</html>
