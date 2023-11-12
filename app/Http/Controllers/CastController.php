<?php

namespace App\Http\Controllers;

use App\Models\Cast;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CastController extends Controller
{
    /**
     * Display a listing of the resource.   
     */
    public function index()
    {
        $cast = Cast::all();
        return view('cast.index', compact('cast'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cast.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Cast $cast)
    {
        $request->validate([
            'nama' => 'required',
            'umur' => 'required',
            'bio' => 'required',
        ]);


        $cast = new Cast;
        $cast->nama = $request->nama;
        $cast->umur = $request->umur;
        $cast->bio = $request->bio;
        $cast->save();

        return redirect()->route('cast.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('cast.show', compact('cast'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('cast.edit', compact('cast'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cast $cast)
    {
        $request->validate([
            'nama' => 'required',
            'umur' => 'required|numeric',
            'bio' => 'required',
        ]);
        $cast->update($request->all());
        return redirect()->route('cast.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
    }
}
