@extends('layouts.Listalayout')
@section('header') 
@endsection
@section('content')
<div class="mt-4">
    <h2>Bienvenido a la seccion de Temas </h2>
    </div>
<div class="botones mt-4">
<a class="boton_personalizado" href="{{route('tema.create')}}">Nueva tema</a>
<a class="boton_personalizado" href="{{route('tema.index')}}">volver</a>
</div>
    <div class="mt-4">
        <div class="card">
            <div class="card-body">
                <table id="tema" class="table table-striped table-bordered">
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
               <td><a href="{{route('tema.show', $temas->id)}}">{{$temas->nametm}}</a></td>
               <td>{{$temas->descripcion}} </td>
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
        $('#tema').DataTable({
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