<!DOCTYPE html>
@extends('layouts.app')

@section('content')
    <h1>Alumnos</h1>
    <a href="{{ route('alumnos.create') }}">Crear Alumno</a>
    <ul>
        @foreach($alumnos as $alumno)
            <li>{{ $alumno->nombre }} {{ $alumno->apellidos }}
                <a href="{{ route('alumnos.edit', $alumno) }}">Editar</a>
                <form action="{{ route('alumnos.destroy', $alumno) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection

