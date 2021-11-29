@extends('layouts.inicioly')
<header class="header">
    <div class="container logo-nav-container">
        <a href="#" class="logo">Logo</a>
   <nav class="navigation">
    <ul class="menu">
<li><a href="home">Home</a></li> 
<li><a href="admin">login</a></li> 
<li><a href="acercade">aserca de</a></li>
<li><a href="{{route('contactanos.index')}}">contactanos</a></li>
<li><a href="#">listas de registros  </a>
 <ul class="submenu">
    <li><a href="user">usuarios</a></li> 
    <li><a href="materia">materias</a></li>
    <li><a href="evaluacion">evaluaciones</a></li>
    <li><a href="asistencia">asistencias</a></li>
    <li><a href="actividad">actividades</a></li>
    <li><a href="curso">curso</a></li>
    <li><a href="usercurso">curso-user</a></li>
    <li><a href="tema">tema</a></li>
 </ul>
</li>
 </ul>
</nav>
</div>
</header>
<body>
    <h1 class="deepshadow">Sistema Multimedia de Matematicas</h1>
    <style>
        body{
            background: url(/imagenes/fondo3.jpg);
        }
    </style>
</body>
@section('cotent')

@endsection

