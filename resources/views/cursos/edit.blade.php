@extends('layouts.plantilla')
@section('title','Cursos Edit')
@section('content')
    <h1>En esta pagina podras Editar un curso</h1>

    <form action="{{ route('cursos.update', $curso ) }}" method="POST">
        @csrf
        @method('put')

        <label for="name">Nombre: </label>
        <input type="text" name="name" id="name" value="{{ old('name', $curso->name) }}">
        <br>
        @error('name')
            <small>*{{$message}}</small>
            <br>
        @enderror

        <label for="descripcion">Descripción: </label>
        <textarea name="descripcion" id="descripcion">{{ old('descripcion', $curso->descripcion) }}</textarea>
        <br>
        @error('descripcion')
            <small>*{{$message}}</small>
            <br>
        @enderror

        <label for="categoria">Caregoria: </label>
        <input type="text" name="categoria" id="categoria" value="{{ old('categoria', $curso->categoria) }}">
        <br>
        @error('categoria')
            <small>*{{$message}}</small>
            <br>
        @enderror

        <button type="submit">Actualizar formulario</button>

    </form>
@endsection