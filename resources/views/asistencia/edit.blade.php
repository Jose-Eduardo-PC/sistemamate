@extends('layouts.layout')

@section('title', 'Asistencia Edit')

@section('content')

<h1><a class="block mt-1 text-lg leading-tight font-medium text-black hover:underline">Bienvenido a crear cursos</a></h1>
<br>

	</div>
	<x-guest-layout>
		<x-jet-authentication-card>
			<x-slot name="logo">
				<x-jet-authentication-card-logo />
			</x-slot>
	
			<form action="{{ route('asistencia.update',$asistencia) }}" method="POST">
				@csrf
				@method('put')

				<x-jet-label  value="{{ __('user_id') }}" />
				<select name="user_id" >
					<option value="1"> 1 </option>
					<option value="2"> 2  </option>
					<option value="3"> 3  </option>
					<option value="4"> 4 </option>
					<option value="5"> 5  </option>
					<option value="6"> 6  </option>
					<option value="7"> 7 </option>
					<option value="8"> 8  </option>
					<option value="9"> 9  </option>
				</select>
				<div>
					<x-jet-label value="{{ __('Estado') }}" />
					<x-jet-input class="block mt-1 w-full" type="text" name="estado"  value="{{$asistencia->estado}}"/>
				</div>
				<div>
					<x-jet-label value="{{ __('Fecha') }}" />
					<x-jet-input class="block mt-1 w-full" type="date" name="fecha"  value="{{$asistencia->fecha}}"/>
				</div>
	
	
					<x-jet-button class="ml-4">
						{{ __('Actualizar Registro') }}
					</x-jet-button>
				</div>
			</form>
		</x-jet-authentication-card>
	</x-guest-layout>