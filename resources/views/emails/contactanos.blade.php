
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        h1{
            color: blue;
            font-family: sans-serif;
            font-weight:bold;
            font-style:italic;
            letter-spacing:5px;
            text-decoration:underline;
        }
        p{
            color: rgb(62, 62, 151);
            font-family: sans-serif;
            font-weight:bold;
            font-style:italic;
            letter-spacing:5px;
            text-decoration:underline;
        }
    </style>
</head>
<body>
    <h1>Correo Electronico</h1>
    <p>Correo De Prueva</p>
    <p><strong>Nombre :</strong>{{$contacto['namem']}}</p>
    <p><strong>Email :</strong>{{$contacto['email']}}</p>
    <p><strong>Mensaje :</strong>{{$contacto['mensaje']}}</p>
 
</body>
</html>