@extends('layouts.plantilla')
@section('title','Create')
@section('content')
    <h1>En esta pagina crearas un curso con VISTA</h1>

    <form action="{{ route('cursos.store' ) }}" method="POST">

        @csrf

        <label for="name">Nombre: </label>
        <input type="text" name="name" id="name" value="{{ old('name') }}">
        <br>
        @error('name')
            <small>*{{$message}}</small>
            <br>
        @enderror

        <label for="descripcion">Descripción: </label>
        <textarea name="descripcion" id="descripcion">{{old('descripcion')}}</textarea>
        <br>
        @error('descripcion')
            <small>*{{$message}}</small>
            <br>
        @enderror

        <label for="categoria">Categoria: </label>
        <input type="text" name="categoria" id="categoria" value="{{old('categoria')}}">
        <br>
        @error('categoria')
            <small>*{{$message}}</small>
            <br>
        @enderror

        <button type="submit">Enviar formulario</button>

    </form>
@endsection