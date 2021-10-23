@extends('layouts.layout')
@section('title', 'Actividad')
@section('content')
<div class="botones">
    <a class="boton_personalizado" href="{{route('actividad.create')}}">Nuevo</a>
</div>
    <table id="actividad">
        <div>
        <thead>
        <tr>
            <th>ID</th>
            <th>Actividad</th>
            <th>Descripcion</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($actividad as $actividades)
            <tr>
               <td>{{$actividades->id}} </td>
               <td><a href="{{route('actividad.show', $actividades->id)}}">{{$actividades->name}}</a></td>
               <td>{{$actividades->descripcion}} </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function() {
        $('#actividad').DataTable();
    } );
    </script>
@endsection