<!DOCTYPE html>
@extends('layouts.app')

@section('content')
    <h1>Crear Alumno</h1>
    <form action="{{ route('alumnos.store') }}" method="POST">
        @csrf
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre">
        <label for="apellidos">Apellidos:</label>
        <input type="text" name="apellidos" id="apellidos">
        <button type="submit">Guardar</button>
    </form>
@endsection