@extends('layouts.Listalayout')
@section('header')
@endsection
@section('content')
<div class="mt-4">
    <h2>Bienvenido a la seccion asistencia</h2>
    </div>
<div class="botones mt-4">
<a class="boton_personalizado" href="{{route('actividad.create')}}">Nueva Actividad</a>
<a class="boton_personalizado" href="{{route('actividad.index')}}">volver</a>
</div>
<div class="mt-4">
    <div class="card">
        <div class="card-body">
                <table id="actividad" class="table table-striped table-bordered">
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
                        <td><a href="{{route('actividad.show', $actividades->id)}}">{{$actividades->nameac}}</a></td>
                        <td>{{$actividades->descripcion}} </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>
        $('#actividad').DataTable({
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