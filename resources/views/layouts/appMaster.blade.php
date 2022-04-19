<!DOCTYPE html>
<html>
    <head>
        @include('includes.head')
    </head>
    <body  min-height="100vh" style="position: relative;">
        <header>
            @include('includes.header')
        </header>
        <main style="margin-top:50px; padding-bottom: 5rem;min-height:800px" >
            @yield('content')
        </main>
        <footer class="page-footer dark">
            @include('includes.footer')
        </footer>
        @include("includes.scripts")
    </body>
</html>
