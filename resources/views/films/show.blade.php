@extends('layouts.app')

@section('content')
    <h1>Detalle de la Película</h1>
    <h2>Título: {{ $film->name }}</h2>
    <p>Autor: {{ $film->gender }}</p>
    <p>Descripción: {{ $film->year }}</p>
    <p>Disponibilidad: {{ $film->points }}</p>
    <p>Descripción: {{ $film->description }}</p>
    <a href="{{ route('films.index') }}" class="btn btn-primary">Volver a la Lista</a>
@endsection