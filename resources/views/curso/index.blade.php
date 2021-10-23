@extends('layouts.layout')
<h2>Bienvenido a la seccion de cursos </h2>
@yield('title')
@section('content')
<div class="botones">
    <a class="boton_personalizado" href="{{route('curso.create')}}">Nuevo Curso</a>
    <div>
    <table id="curso">
        <div>
        <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Grado</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($curso as $cursos)
            <tr>
               <td>{{$cursos->id}} </td>
               <td><a href="{{route('curso.show', $cursos->id)}}">{{$cursos->name}}</a></td>
               <td>{{$cursos->grado}} </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
    @yield('content')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function() {
        $('#curso').DataTable();
    } );
    </script>
@endsection