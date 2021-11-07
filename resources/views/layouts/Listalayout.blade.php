<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">
<head>
<style>
</style>
</head>
@yield('title')
<body>
    <style>
        body{
           background: #c5d2d8;
        }
        div{
            padding: 8px;
        }
        .header{
        background: #007bff;
        color: white;
        padding: 2rem 0;
        font-size: 20px;
        }
        .header a {
            color: white;
            text-decoration: none;
            
        }
        .logo-nav-container{
            display: flex;
            justify-content: space-between;
            align-items: center;
            
        }
        .submenu{
            position: absolute;
            background: black;
            border: 5px solid rgb(21, 23, 121);
            border-radius:10px;
            width: 100%;
            text-align: center;
            visibility: hidden;
            opacity: ;
            transition: opacity 0.4s;
            z-index: 999;
        }
         
        .submenu li a{
        display:block; 
        padding: 15px;
        color: white;
        }
        .menu li:hover .submenu{
            visibility: visible;
            opacity: 1;
        }
        .navigation ul{
        margin: 0;
        padding: 0;
        list-style: none;
        }
        .navigation ul li{
            display: inline-block;
            position: relative;
        }
        .navigation ul li a{
            display: block;
            padding: 0.5rem 1rem; 
            transition: all 0.4s linear;
            border-radius: 5px;
        }
        .navigation ul li a:hover{
            background: #1883ba;

        }
        .logo{
            letter-spacing: 10px;
            font-size: 1.2em;
        }
        .boton_personalizado{
            text-decoration: none;
            padding: 10px;
            font-weight: 600;
            font-size: 20px;
            color: #ffffff;
            background-color: #007bff;
            border-radius: 6px;
            border: 2px solid #00299e;
          }
          .botones {
          text-align: left;
          margin:auto;
          cursor: pointer;
          }
          .boton_personalizado:hover{
          color: #1883ba;
          background-color: #ffffff;
         }
    </style>
</body>

@yield('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
@yield('js')
</hTml>