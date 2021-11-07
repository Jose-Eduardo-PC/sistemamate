@extends('layouts.galerialy')
<header class="header">
    <div class="container logo-nav-container">
        <a href="#" class="logo">Logo</a>
   <nav class="navigation">
       <ul class="menu">
   <li><a href="inicio">Home</a></li> 
   <li><a href="acercade">aserca de</a></li>
   <li><a href="#">listas de registros  </a>
    <ul class="submenu">
            <li><a href="user">usuarios</a></li> 
            <li><a href="materia">materias</a></li>
            <li><a href="evaluacion">evaluaciones</a></li>
            <li><a href="asistencia">asistencias</a></li>
            <li><a href="curso">curso</a></li>
            <li><a href="cursouser">curso-user</a></li>
            <li><a href="tema">tema</a></li>
    </ul>
   </li>
    </ul>
   </nav>
</div>
</header>
<body>
<div class="galeria" >
<h1>aserca de</h1>
   <div class="linea">
        <div class="contenedor-imagenes">
             <div class="card">
                 <div class="card-body">
                 <h5>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Suscipit eos assumenda error corrupti, accusamus eaque in voluptatum fugit officiis voluptatem eum, aliquam excepturi delectus vitae. Voluptatibus minus quo nihil odio.</h5>
                </div>
               </div>
            <div class="imagen">
                <img src="/imagenes/fondo8.jpg" alt="">
            </div>
            <div class="imagen">
                <img src="/imagenes/fondo5.jpg" alt="">
            </div>
            <div class="imagen">
                <img src="/imagenes/fondo6.jpg" alt="">
            </div>
            <div class="imagen">
                <img src="/imagenes/fondo7.jpg" alt="">
            </div>

            </div>
        </div>
</div>
</body>
@section('cotent')

@endsection

