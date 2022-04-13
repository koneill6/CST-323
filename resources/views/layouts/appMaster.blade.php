<!DOCTYPE html>
<html lang="en" style="height: 110%;margin: 50px;">
    <head>
        @include('includes.head')
        <title>{{ config('app.name', 'CST 323 Milestone') }}</title>
    </head>
    <body>
        <header>
            @include('includes.header')
        </header>
        @yield('content')
        <footer style="margin: 50px;">
            @include('includes.footer')
        </footer>>
        @include("includes.scripts")
    </body>
</html>
