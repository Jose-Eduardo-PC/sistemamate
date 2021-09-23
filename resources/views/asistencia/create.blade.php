@extends('layouts.layout')

@section('title', 'Asistencia')

@section('content')

<h1><a class="block mt-1 text-lg leading-tight font-medium text-black hover:underline">Bienvenido a crear cursos</a></h1>
<br>

	</div>
	<x-guest-layout>
		<x-jet-authentication-card>
			<x-slot name="logo">
				<x-jet-authentication-card-logo />
			</x-slot>
	
			<form action="{{ route('curso.store') }}" method="POST">
				@csrf
	
				<div>
					<x-jet-label  value="{{ __('Id_Usuario') }}" />
					<x-jet-input class="block mt-1 w-full" type="biginteger" name="name"  />
				</div>
				<div>
					<x-jet-label value="{{ __('Estado') }}" />
					<x-jet-input class="block mt-1 w-full" type="text" name="estado"  />
				</div>
				<div>
					<x-jet-label value="{{ __('Fecha') }}" />
					<x-jet-input class="block mt-1 w-full" type="date" name="fecha"  />
				</div>
	
	
					<x-jet-button class="ml-4">
						{{ __('Registro') }}
					</x-jet-button>
				</div>
			</form>
		</x-jet-authentication-card>
	</x-guest-layout>