<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<head>
<style>
</style>
</head>
@yield('title')
<body>
    <style>
        *{
         margin: 0;
         padding: 0;
         box-sizing: border-box;   
        }
        .galeria{
            font-family: 'open sans';

        }
        .galeria h1{
            text-align: center;
            margin: 20px 0 15px 0;
            font-weight: 300;
        }
        .linea{
            border-top: 5px solid black;
        }
        .contenedor-imagenes{
            display: flex;
            margin: auto;
            justify-content: space-around;
            flex-wrap: wrap;
            border-radius: 3px;
        }
        .contenedor-imagenes .imagen{
            position: relative;
            box-shadow: 0px 0px 3px 0px rgba(0, 0, 0, 75)
        }
         body{
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
            width: 100%;
            visibility: hidden;
            opacity: ;
            transition: opacity 1.5s;
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
    </style>
    </body>
</hTml>