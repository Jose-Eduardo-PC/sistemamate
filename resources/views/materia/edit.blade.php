@extends('layouts.layout')
@section('title', 'Materia edit')
@section('content')
	<x-guest-layout>
		<x-jet-authentication-card>
			<x-slot name="logo">
				<x-jet-authentication-card-logo />
			</x-slot>
	
			<form action="{{ route('materia.update', $materia) }}" method="POST">
				@csrf
				@method('put')
	
				<div class="mt-4">
					<x-jet-label  value="{{ __('Name') }}" />
					<x-jet-input class="block mt-1 w-full" type="text" name="namemat" value="{{$materia->namemat}}" />
				</div>
				<div class="mt-4">
					<x-jet-label  value="{{ __('Contenido') }}" />
					<x-jet-input class="block mt-1 w-full" type="text" name="contenido" value="{{$materia->contenido}}" />
				</div>
				<div class="mt-4">
					<x-jet-label  value="{{ __('Descripcion') }}" />
					<label>
					<textarea rows="6" cols="20" class="block mt-1 w-full" name="descripcion" ><?php echo $materia->descripcion?></textarea>
					</label>
				</div>
				<div class="mt-4">
				<x-jet-label  value="{{ __('Curso') }}" />
				<select name="curso_id">
						@foreach($curso as $cursos)
						<option value={{$cursos->id}}>{{$cursos->namecur}}</option>	
						@endforeach
				</select>
			    </div>
					<x-jet-button class="mt-4">
							<br>
						{{ __('Actulizar registro') }}
					</x-jet-button>
			</form>
		</x-jet-authentication-card>
	</x-guest-layout>
	@endsection