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
         h1{
        font-family: "Avant Garde", Avantgarde, "Century Gothic", CenturyGothic, "AppleGothic", sans-serif;
        font-size: 92px;
        padding: 80px 50px;
        text-align: center;
        margin-top: 150px;
        text-transform: uppercase;
        text-rendering: optimizeLegibility;
          }
          .deepshadow {
    color: #e0dfdc;
    background-color: #333;
    letter-spacing: .1em;
    text-shadow: 
      0 -1px 0 #fff, 
      0 1px 0 #2e2e2e, 
      0 2px 0 #2c2c2c, 
      0 3px 0 #2a2a2a, 
      0 4px 0 #282828, 
      0 5px 0 #262626, 
      0 6px 0 #242424, 
      0 7px 0 #222, 
      0 8px 0 #202020, 
      0 9px 0 #1e1e1e, 
      0 10px 0 #1c1c1c, 
      0 11px 0 #1a1a1a, 
      0 12px 0 #181818, 
      0 13px 0 #161616, 
      0 14px 0 #141414, 
      0 15px 0 #121212, 
      0 22px 30px rgba(0, 0, 0, 0.9);
  }
    </style>

</body>

@yield('content')
</hTml>