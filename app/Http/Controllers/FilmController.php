<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    public function index()
    {
        // Obtener una lista de libros disponibles en la biblioteca
        $films = Film::all();

        // Pasar los libros a la vista y mostrarlos en una tabla
        return view('films.index', ['films' => $films]);
    }

    public function create() {
        return view('films.create');
    }

    public function store(Request $request) {
        // Valida los datos ingresados en el formulario
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'gender' => 'required|string|max:255',
            'year' => 'required|integer|min:1',
            'points' => 'required|integer|min:1',
            'description' => 'required|string|max:255'
        ]);

        // Crea un nuevo libro en la base de datos
        $film = Film::create($validatedData);

        // Redirige a la página de detalles del libro recién creado
        return redirect()->route('films.show', ['film' => $film->id])->with('success', 'Película creada con éxito.');
    }

    public function show($id) {
        // Obtén el libro específico de la base de datos
        $film = Film::findOrFail($id);

        // Muestra los detalles del libro en la vista
        return view('films.show', ['film' => $film]);
    }

    public function edit($id)
    {
        // Obtén el libro específico de la base de datos
        $film = Film::findOrFail($id);

        // Muestra el formulario de edición con los detalles del libro
        return view('films.edit', ['film' => $film]);
    }

    public function update(Request $request, $id)
    {
        // Valida los datos ingresados en el formulario
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'gender' => 'required|string|max:255',
            'year' => 'required|integer|min:1',
            'points' => 'required|integer|min:1',
            'description' => 'required|string|max:255'
        ]);

        // Obtiene el libro específico de la base de datos
        $film = Film::findOrFail($id);

        // Actualiza los datos del libro con los nuevos valores
        $film->update($validatedData);

        // Redirige a la página de detalles del libro actualizado
        return redirect()->route('films.show', ['film' => $film->id])->with('success', 'Película actualizada con éxito.');
    }

    public function destroy($id)
    {
        // Obtiene el libro específico de la base de datos
        $film = Film::findOrFail($id);

        // Elimina el libro de la base de datos
        $film->delete();

        // Redirige al usuario a la lista de libros o a otra página deseada
        return redirect()->route('films.index')->with('success', 'Película eliminada con éxito.');
    }
}
