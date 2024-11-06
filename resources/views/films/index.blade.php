@extends('layouts.app')

@section('content')
    <h1>Lista de Películas </h1>
    <table class="table">
        <thead>
            <tr>
                <th>Título</th>
                <th>Gender</th>
                <th>Year</th>
            </tr>
        </thead>
        <tbody>
            @foreach($films as $film)
                <tr>
                    <td>{{ $film->name }}</td>
                    <td>{{ $film->gender }}</td>
                    <td>{{ $film->year }}</td>
                    <td>
                        <a href="{{ route('films.show', $film->id) }}" class="btn btn-success">Ver</a>
                        <a href="{{ route('films.edit', $film->id) }}" class="btn btn-default">Editar</a>
                        <form action="{{ route('films.destroy', ['film' => $film->id]) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('¿Seguro que deseas eliminar esta película?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('films.create') }}" class="btn btn-success">Agregar Película</a>
@endsection