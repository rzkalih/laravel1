<?php

namespace App\Models;

use App\Models\Film;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kritik extends Model
{
    use HasFactory;
    protected $table = "kritiks";
    protected $fillable = [
        'film_id',
        'users_id',
        'content',
        'point',
    ];

    public function film()
    {
        return $this->hasMany(Film::class, 'id', 'film_id');
    }

    public function user()
    {
        return $this->hasMany(user::class, 'id', 'users_id');
    }
}
