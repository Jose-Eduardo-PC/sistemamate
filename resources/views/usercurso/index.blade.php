@extends('layouts.layout')

@section('title', 'Usuarios Curso')

@section('content')
<div>
    <table id="usercurso">
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
               <td><a href="{{route('usercurso.show', $users->id)}}">{{$users->nameus}}</a></td>
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
        $('#usercurso').DataTable();
    } );
    </script>
@endsection