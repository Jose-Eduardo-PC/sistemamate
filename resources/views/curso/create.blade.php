@extends('layouts.layout')

@section('title', 'Curso')

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
					<x-jet-label  value="{{ __('Name') }}" />
					<x-jet-input class="block mt-1 w-full" type="text" name="name"  />
				</div>
				
				<div>
					<br>
				<select name="grado" >
					<option value="1er grado"> 1er grado  </option>
					<option value="2do grado"> 2do grado  </option>
					<option value="3er grado"> 3er grado  </option>
				</select>
				</div>
					<x-jet-button class="mt-4">
							<br>
						{{ __('Registro') }}
					</x-jet-button>
			</form>
		</x-jet-authentication-card>
	</x-guest-layout>