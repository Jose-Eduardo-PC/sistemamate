<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <head>
        
        <style>
          h4 {
          color: white;
          font-weight: normal;
          font-size: 24px;
          font-family: Arial;
          }
          .boton_personalizado{
            display: inline-block;
            border-radius: 4px;
            border: none;
            color: #FFFFFF;
            text-align: center;
            font-size: 28px;
            padding: 20px;
            width: 200px;
            transition: all 0.5s;
            cursor: pointer;
            margin: 5px;
          }
          .botones {
          text-align: left;
          margin:auto;
          cursor: pointer;
          }
     </style>
     @yield('title')
    </head>
    <body>
        <style>
        .boton_personalizado{
        text-decoration: none;
        padding: 8px;
        font-weight: 200;
        font-size: 16px;
        color: #ffffff;
        background-color: #1883ba;
        border-radius: 6px;
        border: 2px solid #0016b0;
        cursor: pointer;
        margin:auto;
        }
        body{
        margin: 2%;
        padding: 2%;
        background: url(/imagenes/fondo1.jpg);   
        background-size: cover;
        background-position: center;
        font-family: sans-serif;
        font-weight: 650;
        font-size: large;
        color:white;
        }
       p {
       color: white;
       font-size: 2rem;
       text-align: left;
       } 
       .botones {
          text-align: left;
          margin:auto;
          }
       </style>
        @yield('content')
       </body>
       