@extends('layouts.Listalayout')

@section('content')
<div class="mt-4">
    <div class="card">
        <div class="card-body">
    <table id="evaluacion" class="table table-striped table-bordered">
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
</div>
</div>
<div class="botones mt-4">
    <a class="boton_personalizado" href="{{route('evaluacion.index')}}">volver</a>
    </div>
  @section('js')

    <script>
        $('#evaluacion').DataTable();
    </script>
@endsection