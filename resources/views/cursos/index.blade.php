@extends('layouts.plantilla')
@section('title','Cursos')

@section('content')
    <h1>Pagina de cursos con VISTA</h1>
    <a href="{{ route('cursos.create') }}">Crear Curso</a>
    <ul>
		@foreach ($cursos as $curso)
			<li>
                <a href="{{ route('cursos.show', $curso) }}">{{$curso->name}}</a>
            </li>
		@endforeach
	</ul>
    {{$cursos->links()}}
@endsection