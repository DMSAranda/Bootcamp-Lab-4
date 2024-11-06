@extends('layouts.app')

@section('content')
    <h1>Buscar Películas</h1>
    <form action="{{ route('films.search') }}" method="GET">
        <div class="form-group">
            <input type="text" name="search" class="form-control" placeholder="Título">
        </div>
        <button type="submit" class="btn btn-primary">Buscar</button>
    </form>
    <a href="{{ route('films.index') }}" class="btn btn-secondary">Volver a la Lista</a>
@endsection