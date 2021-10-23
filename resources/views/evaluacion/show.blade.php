@extends('layouts.layout')

@section('title', 'Evaluacion ')

@section('content')

<div>
    <table id="evaluacion">
        <div>
        <thead>
        <tr>
            <th>ID</th>
            <th>Tema</th>
            <th>Evaluacion</th>
            <th>Fecha</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($evaluacion as $evaluacions)
            <tr>
               <td>{{$evaluacions->id}} </td>
               <td>{{$evaluacions->name}}</td>
               <td>{{$evaluacions->namev}}</td>
               <td>{{$evaluacions->fecha}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
    <a class="boton_personalizado" href="{{route('evaluacion.index')}}">volver</a>
    @yield('content')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function() {
        $('#evaluacion').DataTable();
    } );
    </script>
@endsection