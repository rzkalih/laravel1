<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Unique;

class GenreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $genres = genre::all();
        return view('genre.index', compact('genres'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('genre.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|unique:genres,nama|min:5',
        ], [
            'nama.required' => 'Nama harus di isi!!',
            'nama.unique' => 'nama sudah pernah di gunakan',
            'nama.min' => 'nama harus  lebih dari 5 karakter',
        ]);

        $genre = new Genre;
        $genre->nama = $request->nama;
        $genre->save();

        return redirect()->route('genre.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Genre $genre)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Genre $genre)
    {
        return view('genre.edit', compact('genre'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Genre $genre)
    {
        $request->validate([
            'nama' => 'required|unique:genres,nama|min:5',
        ], [
            'nama.required' => 'Nama harus di isi!!',
            'nama.unique' => 'nama sudah pernah di gunakan',
            'nama.min' => 'nama harus  lebih dari 5 karakter',
        ]);
        $genre->update($request->all());
        return redirect()->route('genre.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Genre $genre)
    {
        $genre = Genre::where('id', $genre->id)->delete();
        return redirect()->route('genre.index');
    }
}
