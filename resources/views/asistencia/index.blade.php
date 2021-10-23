@extends('layouts.layout')
<h2> Bienvenido a la seccion de Asistencia </h2>
@yield('title')
<div class="botones">
<a class="boton_personalizado" href="{{route('asistencia.create')}}">Nuevo</a>
<div>
<table id="user">
    <div>
    <thead>
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Genero</th>
        <th>Email</th>
    </tr>
    </thead>
    <tbody>
        @foreach ($user as $users)
        <tr>
           <td>{{$users->id}} </td>
           <td><a href="{{route('asistencia.show', $users->id)}}">{{$users->nameus}}</a></td>
           <td>{{$users->genero}} </td>
           <td>{{$users->email}} </td>
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
    $('#user').DataTable();
} );
</script>
