@extends('layouts.layout')
@section('title', 'Editar Tema')
@section('content')
	</div>
	<x-guest-layout>
		<x-jet-authentication-card>
			<x-slot name="logo">
				<x-jet-authentication-card-logo />
			</x-slot>
	
			<form action="{{ route('tema.update', $tema) }}" method="POST">
				@csrf
				@method('put')
				<div class="mt-4">
					<x-jet-label  value="{{ __('Name') }}" />
					<x-jet-input class="block mt-1 w-full" type="text" name="name" value="{{$tema->name}}" />
				</div>
				<div class="mt-4">
					<x-jet-label  value="{{ __('Descripcion') }}" />
					<label>
					<textarea rows="6" cols="38" class="block mt-1 w-full" name="descripcion" ><?php echo $tema->descripcion?></textarea>
					</label>
				</div >
				<div class="mt-4">
				<x-jet-label  value="{{ __('Materia') }}" />
				<select name="materia_id" >
						<option value="">seleccione un tema</option>
						@foreach($materia as $materias)
						<option value={{$materias->id}}>{{$materias->name}}</option>	
						@endforeach
				    </select>
			     </div>
					<x-jet-button class="mt-4">
						{{ __('Actulizar registro') }}
					</x-jet-button>
			</form>
		</x-jet-authentication-card>
	</x-guest-layout>
	@endsection