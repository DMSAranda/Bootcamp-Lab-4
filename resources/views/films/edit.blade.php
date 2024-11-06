@extends('layouts.app')

@section('content')
    <h1>Editar Película</h1>

    <form method="POST" action="{{ route('films.update', ['film' => $film->id]) }}">
        @csrf <!-- Agregar el token CSRF para proteger el formulario -->
        @method('PUT') <!-- Indicar que esta es una solicitud PUT para actualizar el libro -->

        <div class="form-group">
            <label for="name">Título</label>
            <input type="text" name="name" class="form-control" disabled value="{{ $film->name }}" required>
        </div>

        <div class="form-group">
            <label for="gender">Género</label>
            <input type="text" name="gender" class="form-control" value="{{ $film->gender }}" required>
        </div>

        <div class="form-group">
            <label for="year">Año</label>
            <input type="number" name="year" class="form-control" value="{{ $film->year }}" required>
        </div>

        <div class="form-group">
            <label for="points">Puntos</label>
            <input type="number" name="points" class="form-control" value="{{ $film->points }}" required>
        </div>

        <div class="form-group">
            <label for="description">Descripción</label>
            <textarea name="description" class="form-control" required>{{ $film->description }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
        <a href="{{ route('films.show', ['film' => $film->id]) }}" class="btn btn-secondary">Cancelar</a>
    </form>
@endsection