<?php

namespace App\Http\Controllers;

use App\Models\Film;
use App\Models\User;
use App\Models\Kritik;
use Illuminate\Http\Request;

class KritikController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(User $user, Film $films)
    {
        $user = user::all();
        $films = Film::select('id', 'judul')->get();
        return view('kritik.create', compact('films', 'user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Kritik $kritik, $id)
    {
        $request->validate([
            'content' => 'required',
            'point' => 'required',
        ]);

        $kritik = new Kritik;
        $kritik->user_id = $request->user_id;
        $kritik->film_id = $request->film_id;
        $kritik->content = $request->content;
        $kritik->point = $request->point;
        $kritik->save();

        return redirect()->route('film.show', $id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Kritik $kritik)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kritik $kritik)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kritik $kritik)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kritik $kritik)
    {
        //
    }
}
