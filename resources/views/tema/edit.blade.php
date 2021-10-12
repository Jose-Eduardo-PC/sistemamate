@extends('layouts.layout')

@section('title', 'Tema edit')

@section('content')

<h1><a class="block mt-1 text-lg leading-tight font-medium text-black hover:underline">Bienvenido en esta pagina podras editar un tema</a></h1>
<br>

	</div>
	<x-guest-layout>
		<x-jet-authentication-card>
			<x-slot name="logo">
				<x-jet-authentication-card-logo />
			</x-slot>
	
			<form action="{{ route('tema.update', $tema) }}" method="POST">
				@csrf
				@method('put')
	
				<div>
					<x-jet-label  value="{{ __('Name') }}" />
					<x-jet-input class="block mt-1 w-full" type="text" name="name" value="{{$tema->name}}" />
				</div>
				<div>
					<x-jet-label  value="{{ __('Descripcion') }}" />
					<x-jet-input class="block mt-1 w-full" type="text" name="descripcion" value="{{$tema->descripcion}}" />
				</div>
				<div>
					<br>
				<x-jet-label  value="{{ __('materia_id') }}" />
				<select name="materia_id" >
					<option value="1"> 1 </option>
					<option value="2"> 2  </option>
					<option value="3"> 3  </option>
					<option value="4"> 4 </option>
					<option value="5"> 5  </option>
					<option value="6"> 6  </option>
					<option value="7"> 7 </option>
					<option value="8"> 8 </option>
					<option value="9"> 9 </option>
				</select>
	
				<br>
					<x-jet-button class="ml-4">
							<br>
						{{ __('Actulizar registro') }}
					</x-jet-button>
				</div>
			</form>
		</x-jet-authentication-card>
	</x-guest-layout>