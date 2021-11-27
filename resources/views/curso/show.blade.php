@extends('layouts.showlayout')

@section('content')
<form id="eliminar" class="formulario-eliminar" action="{{route('curso.destroy',$curso)}}" method="POST">
    @csrf
    @method('delete')
</form>
<div class="mt-4 prin">
    <div class="card">
        <div class="card-body sec">
            <h4> Este es el curso {{$curso->namecur}} </h4>
            <p>Grado:{{$curso->grado}}</p>
            <div class="botones mt-4">
            <a class="boton_personalizado " href="{{route('curso.edit', $curso)}}">Editar</a>
            <button class="boton_personalizado" type="submit" form="eliminar">Eliminar</button>
            <a class="boton_personalizado " href="{{route('curso.index')}}" >Volver</a>
            </div>
        </div>
    </div>  
@endsection
@section('js')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
     $('.formulario-eliminar').submit(function(e){
        e.preventDefault();
        Swal.fire({
  title: 'Estas seguro?',
  text: "¡No podrás revertir esto!",
  icon: 'Peligro',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: '¡Sí, bórralo!',
  cancelButtonText: '¡cancelar!'
}).then((result) => {
  if (result.isConfirmed) {
    this.submit();
    Swal.fire(
      '¡Eliminado!',
      'Tu archivo ha sido eliminado.',
      'éxito'
    )
  }
})
        });
</script>
@endsection