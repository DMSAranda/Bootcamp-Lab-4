@extends('layouts.app')

@section('content')
    <h1>Crear Película</h1>

    <form method="POST" action="{{ route('films.store') }}">
        @csrf <!-- Agregar el token CSRF para proteger el formulario -->

        <div class="form-group">
            <label for="name">Título</label>
            <input type="text" name="name" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="gender">Género</label>
            <input type="text" name="gender" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="year">Año</label>
            <input type="number" name="year" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="points">Puntos</label>
            <input type="number" name="points" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="description">Descripción</label>
            <textarea name="description" class="form-control" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="{{ route('films.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
@endsection
