<?php

namespace App\Http\Controllers;

use App\Models\Cast;
use App\Models\Peran;
use App\Models\Film;
use Illuminate\Http\Request;

class PeranController extends Controller
{
    //
    public function create(Film $films, Cast $cast)
    {
        $casts = Cast::select('id', 'nama')->get();
        return view('peran.create', compact('films', 'casts'));
    }

    public function store(Request $request, Film $films)
    {
        $request->validate([
            'cast_id' => 'required',
            'nama' => 'required',

        ]);
        $peran = new Peran;
        $peran->film_id = $films->id;
        $peran->cast_id = $request->cast_id;
        $peran->nama = $request->nama;
        $peran->save();

        return redirect()->route('film.show', $films->id);
    }
}
