<!DOCTYPE html>
@extends('layouts.app')

@section('content')
    <h1>Editar Alumno</h1>
    <form action="{{ route('alumnos.update', $alumno) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" value="{{ $alumno->nombre }}">
        <label for="apellidos">Apellidos:</label>
        <input type="text" name="ap
