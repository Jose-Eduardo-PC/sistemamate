@extends('layouts.layout')

@section('title', 'Cursos')

@section('content')
<div>
    <table id="usercurso">
        <div>
        <thead>
        <tr>
            <th>ID</th>
            <th>Nombre Usuario</th>
            <th>Curso</th>
            <th>Estado</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($usercur as $users)
            <tr>
               <td>{{$users->id}} </td>
               <td>{{$users->name}}</td>
               <td>{{$users->name}} </td>
               <td>{{$users->estado}} </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
    <a class="boton_personalizado" href="{{route('usercurso.index')}}" >Volver</a>
    @yield('content')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function() {
        $('#usercurso').DataTable();
    } );
    </script>

@endsection