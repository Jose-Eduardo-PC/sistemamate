@extends('layouts.layout')

@section('title', 'Lista Estudiante Evaluaciones')

@section('content')
<div class="mt-4">
<a class="boton_personalizado" href="{{route('evaluacion.create')}}">Nuevo</a>
</div>
<div>
    <table id="evaluacion">
        <div class="mt-4">
        <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Email</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($user as $users)
            <tr>
               <td>{{$users->id}} </td>
               <td><a href="{{route('evaluacion.show', $users->id)}}">{{$users->nameus}}</a></td>
               <td>{{$users->email}} </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
   
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function() {
        $('#evaluacion').DataTable();
    } );
    </script>
    
@endsection