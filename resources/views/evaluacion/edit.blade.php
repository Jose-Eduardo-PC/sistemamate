@extends('layouts.layout')

@section('title', 'Materia edit')

@section('content')

<h1><a class="block mt-1 text-lg leading-tight font-medium text-black hover:underline">Bienvenido en esta pagina podras editar una materia</a></h1>
<br>

	</div>
	<x-guest-layout>
		<x-jet-authentication-card>
			<x-slot name="logo">
				<x-jet-authentication-card-logo />
			</x-slot>
	
			<form action="{{ route('evaluacion.update', $evaluacion) }}" method="POST">
				@csrf
				@method('put')
	
				<div>
					<x-jet-label  value="{{ __('Name') }}" />
					<x-jet-input class="block mt-1 w-full" type="text" name="namev" value="{{$evaluacion->name}}" />
				</div>
				<div>
					<x-jet-label  value="{{ __('Descripcion') }}" />
					<x-jet-input class="block mt-1 w-full" type="text" name="descripcion" value="{{$evaluacion->descripcion}}" />
				</div>
					<div>
						<x-jet-label  value="{{ __('Usuario') }}" />
						<select name="user_id">
						<option value="">seleccione una usuario</option>
						@foreach($evaluacion as $evaluaciones)
						<option value={{$evaluaciones->user_id}}>{{$evaluaciones->nameus}}</option>	
						@endforeach
						</select>
					</div>
					<div>
						<x-jet-label  value="{{ __('Tema') }}" />
						<select name="tema_id">
						<option value="">seleccione una tema</option>
						@foreach($tema as $temas)
						<option value={{$temas->id}}>{{$temas->name}}</option>	
						@endforeach
						</select>
					</div>
	
					<x-jet-button class="ml-4">
							<br>
						{{ __('Actulizar registro') }}
					</x-jet-button>
				</div>
			</form>
		</x-jet-authentication-card>
	</x-guest-layout>