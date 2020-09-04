<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>@yield('page_title')</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
        @include('movies.partials.header')

        <main>
            <div class="container">
                @yield('main_content')
            </div>
        </main>
    </body>
</html>
