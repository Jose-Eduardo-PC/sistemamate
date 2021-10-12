<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
   
    @yield('title')
    <style>
    body{
        margin: 2%;
        padding: 2%;
        background: url(/imagenes/fondoM.jpg);   
        background-size: cover;
        background-position: center;
        font-family: sans-serif;
        font-weight: 600;
        font-size: large;
        color: aliceblue
    }
</style>
</head>
<body>
    @yield('content')
</body>
</html>