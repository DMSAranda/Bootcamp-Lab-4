@extends('layouts.app')

@section('content')
    <h1>{{ isset($film) ? 'Editar Película' : 'Agregar Película' }}</h1>
    <form action="{{ isset($film) ? route('films.update', $film->id) : route('films.store') }}" method="POST">
        @csrf
        @if (isset($film))
            @method('PUT')
        @endif
        <div class="form-group">
            <label for="name">Título</label>
            <input type="text" name="name" class="form-control" value="{{ isset($film) ? $film->name : '' }}">
        </div>
        <div class="form-group">
            <label for="gender">Autor</label>
            <input type="text" name="gender" class="form-control" value="{{ isset($film) ? $film->gender : '' }}">
        </div>
        <div class="form-group">
            <label for="year">Year</label>
            <input type="number" name="year" class="form-control" value="{{ isset($film) ? $film->year : '' }}">
        </div>
        <button type="submit" class="btn btn-primary">{{ isset($film) ? 'Actualizar' : 'Guardar' }}</button>
    </form>
@endsection