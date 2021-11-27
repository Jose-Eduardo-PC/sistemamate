@extends('layouts.registroly')
<h1><a>Bienvenido a crear un Tema<a></h1>
@section('title', 'Tema')
@section('content')
	<x-guest-layout>
		<x-jet-authentication-card>
			<x-slot name="logo">
				<x-jet-authentication-card-logo />
			</x-slot>
			<form action="{{ route('tema.store') }}" method="POST">
				@csrf
				<div class="mt-4">
					<x-jet-label  value="{{ __('Name') }}" />
					<x-jet-input class="block mt-1 w-full" type="text" name="nametm"  />
				</div>
				<div class="mt-4">
					<x-jet-label  value="{{ __('Descripcion') }}" />
					<label>
				<textarea rows="6" cols="20" class="block mt-1 w-full" name="descripcion" ></textarea>
					</label>
				</div>
				<div class="mt-4">
					<x-jet-label  value="{{ __('Materia') }}" />
					<select name="materia_id">
					<option value="">seleccione una materia</option>
					@foreach($materia as $materias)
					<option value={{$materias->id}}>{{$materias->namemat}}</option>	
					@endforeach
					</select>
				</div>
					<x-jet-button class="mt-4">
						{{ __('Registro') }}
					</x-jet-button>
			</form>
		</x-jet-authentication-card>
	</x-guest-layout>