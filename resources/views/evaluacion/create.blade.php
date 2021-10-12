@extends('layouts.layout')

@section('title', 'Materia')

@section('content')

<h1><a class="block mt-1 text-lg leading-tight font-medium text-black hover:underline">Bienvenido a crear cursos</a></h1>
<br>

	</div>
	<x-guest-layout>
		<x-jet-authentication-card>
			<x-slot name="logo">
				<x-jet-authentication-card-logo />
			</x-slot>
	
			<form action="{{ route('evaluacion.store') }}" method="POST">
				@csrf
	
				<div>
					<x-jet-label  value="{{ __('Name') }}" />
					<x-jet-input class="block mt-1 w-full" type="text" name="name"  />
				</div>
				<div>
					<x-jet-label  value="{{ __('Descripcion') }}" />
					<x-jet-input class="block mt-1 w-full" type="text" name="descripcion"  />
				</div>
				<div>
					<br>
				<select name="tema_id" >
					<option value="1"> 1 </option>
					<option value="2"> 2  </option>
					<option value="3"> 3  </option>
					<option value="4"> 4 </option>
					<option value="5"> 5  </option>
					<option value="6"> 6  </option>
				</select>
			
				</div>
				<br>
					<x-jet-button class="ml-4">
							<br>
						{{ __('Registro') }}
					</x-jet-button>
				</div>
			</form>
		</x-jet-authentication-card>
	</x-guest-layout>