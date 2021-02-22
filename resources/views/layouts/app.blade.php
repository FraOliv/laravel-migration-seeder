<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Boolean Seeder @yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">

    </head>
    <body>
 
        <nav class="navbar">
              <div class="links">
                    <a href="{{route('home')}}"> Home</a>
                    <a href="{{route('about')}}">About</a>
                    <a href="{{route('product')}}">Product</a>
                    
                    
                </div>
        </nav>

        <main>
            @yield('main_content')
        </main>
        
    </body>
</html>
