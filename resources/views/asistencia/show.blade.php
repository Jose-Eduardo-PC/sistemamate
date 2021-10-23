@extends('layouts.layout')

@section('title', 'Asistencia')

@section('content')

<div>
    <table id="asistencia">
        <div>
        <thead>
        <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Estado</th>
        <th>Email</th>

        </tr>
        </thead>
        <tbody>
            @foreach ($asistencia as $asistencias)
            <tr>
           <td>{{$asistencias->user_id}} </td>
           <td>{{$asistencias->nameus}}</a></td>
           <td>{{$asistencias->estado}} </td>
           <td>{{$asistencias->email}} </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
    <a class="boton_personalizado" href="{{route('asistencia.index')}}">volver</a>
    @yield('content')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function() {
        $('#asistencia').DataTable();
    } );
    </script>
@endsection