<!DOCTYPE html>
<html lang="en">
    <head>
       <style>
            h3 {
            color: white;
            font-weight: normal;
            font-size: 30px;
            font-family: Arial;
            }
       </style>
        @yield('title')
    </head>
    <body>
    <style>
        body{
                margin: 2%;
                padding: 2%;
                background: url(/imagenes/fondo1.jpg);   
                background-size: cover;
                background-position: center;
                font-family: sans-serif;
                font-weight: 600;
                font-size: large;
                color: white;
                }   
</style>
@yield('content')
</body>
</html>