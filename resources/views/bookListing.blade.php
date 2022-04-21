<!DOCTYPE html>
<html>
    <head>
        @include("includes.head")
        @section('title', 'Dashboard')
    </head>
    <body >
        <header style= "margin-left:200px">
           @include("customer.customerHeader")
        </header>
        <main >
                @include("includes.bookTable")
        </main>
    @include("includes.footer")
    @include("includes.scripts")
    </body>
</html>
