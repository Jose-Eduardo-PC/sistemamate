<!DOCTYPE html>
<html lang="en">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">
    <head>
       <style>
            h2 {
            color: white;
            font-weight: normal;
            font-size: 30px;
            font-family: Arial;
            }
            .boton_personalizado{
            padding: 8px;
            font-weight: 200;
            font-size: 10px;
            color: #ffffff;
            background-color: #1883ba;
            border-radius: 6px;
            border: 2px solid #0016b0;
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
        #main-container{
            margin: 100px auto;
            width: 200px;
        }
        table{
            background-color:#33beff;
            width: 100%;
            font-family: Arial;
            font-weight: 550;
            border-collapse: collapse;
           
        }
        th,td{
        padding: 5px;
        }
        thead {
            background-color: blue;
            border-bottom: solid 10px #33ffff;
        }
        tr:nth-child(even){
            background-color: #33e3ff;
        }
        .boton_personalizado{
            display: inline-block;
            border-radius: 4px;
            border: none;
            color: #FFFFFF;
            text-align: center;
            font-size: 18px;
            padding: 12px;
            width: 160px;
            cursor: pointer;
            margin: auto;
          }
          .botones {
          text-align: left;
          margin:auto;
          cursor: pointer;
          transition: 0.5s;
          }
</style>
@yield('content')
</body>
</html>