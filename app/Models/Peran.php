<?php

namespace App\Models;

use App\Models\Film;
use App\Models\Cast;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peran extends Model
{
    use HasFactory;
    protected $table = "peran";
    protected $fillable = [
        'film_id',
        'cast_id',
        'nama',
    ];

    public function film()
    {
        return $this->hasMany(Film::class, 'id', 'film_id');
    }

    public function cast()
    {
        return $this->hasMany(Cast::class, 'id', 'cast_id');
    }
}
