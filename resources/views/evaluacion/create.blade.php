@extends('layouts.layout')
<h2>Bienvenido a crear Evaluacion</h2>
@section('content')
	<x-guest-layout>
		<x-jet-authentication-card>
			<x-slot name="logo">
				<x-jet-authentication-card-logo />
			</x-slot>
	
			<form action="{{ route('evaluacion.store') }}" method="POST" enctype="multipart/form-data">
				@csrf
	
				<div class="mt-4">
					<x-jet-label  value="{{ __('Name') }}" />
					<x-jet-input class="block mt-1 w-full" type="text" name="namev"  />
				</div>
				<div class="mt-4">
					<x-jet-label  value="{{ __('Descripcion') }}" />
					<label>
					<textarea rows="6" cols="38" class="mt-4" name="descripcion" ></textarea>
					</label>
				</div>
				<div class="mt-4">
					<x-jet-label  value="{{ __('Usuario') }}" />
					<select name="user_id">
					<option value="">seleccione una usuario</option>
					@foreach($evaluacion as $evaluaciones)
					<option value={{$evaluaciones->user_id}}>{{$evaluaciones->name}}</option>	
					@endforeach
					</select>
				</div>
				<div class="mt-4">
					<x-jet-label  value="{{ __('Tema') }}" />
					<select name="tema_id">
					<option value="">seleccione una tema</option>
					@foreach($tema as $temas)
					<option value={{$temas->id}}>{{$temas->nametm}}</option>	
					@endforeach
					</select>
				</div>
				<div class="mt-4">
					<x-jet-label value="{{ __('Fecha') }}" />
					<x-jet-input class="block mt-1 w-full" type="date" name="fecha"  />
				</div >
				<x-jet-button class="mt-4">
						{{ __('Registro') }}
				</x-jet-button>
			</form>
		</x-jet-authentication-card>
	</x-guest-layout>
	@endsection