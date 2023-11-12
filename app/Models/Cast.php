<?php

namespace App\Models;

use App\Models\Peran;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cast extends Model
{
    use HasFactory;
    protected $table = "cast";
    protected $fillable = [
        'nama',
        'umur',
        'bio',
    ];

    public function peran()
    {
        return $this->hasMany(Peran::class);
    }
}
