@extends('layouts.Listalayout')
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
<div class="mt-4">
<h2> Bienvenido a la seccion de Materias </h2>
</div>
@section('content')
<div class="botones mt-4">
<a class="boton_personalizado" href="{{route('materia.create')}}">Nueva Materia</a>
<a class="boton_personalizado" href="{{route('materia.index')}}">volver</a>
<div>
    <div class="mt-4">
        <div class="card">
            <div class="card-body">
<table id="materia" class="table table-striped table-bordered">
    <div>
        <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Cotenido</th>
            <th>Descripcion</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($materia as $materias)
            <tr>
            <td>{{$materias->id}} </td>
            <td><a href="{{route('materia.show', $materias->id)}}">{{$materias->name}}</a></td>
            <td>{{$materias->contenido}} </td>
            <td>{{$materias->descripcion}} </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
</div>
</div>
    
@section('js')
<script>
    $('#materia').DataTable({
        "language": {
            "lengthMenu": "Mostrar _MENU_ Registros de pagina",
            "zeroRecords": "Nada encontrado - disculpa",
            "info": "Mostrando la pagina _PAGE_ de _PAGES_",
            "infoEmpty": "No hay registros disponibles",
            "infoFiltered": "(filtrado de _MAX_ registros totales)",
            "search" : "Buscar",
            "paginate" :{
                "next" : "Siguiente",
                "previous" : "Anterior"
            }
            }
    });
</script>
@endsection