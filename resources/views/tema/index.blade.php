@extends('layouts.layout')
<h2>Bienvenido a la seccion de Temas </h2>
@yield('title')
<table id="tema">
    <a class="boton_personalizado" href="{{route('tema.create')}}">Nueva tema</a>
        <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Descripcion</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($tema as $temas)
            <tr>
               <td>{{$temas->id}} </td>
               <td><a href="{{route('tema.show', $temas->id)}}">{{$temas->name}}</a></td>
               <td>{{$temas->descripcion}} </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function() {
        $('#tema').DataTable();
    } );
    </script>
    @section('content')
@endsection