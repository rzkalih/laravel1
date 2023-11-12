<?php

namespace App\Models;

use App\Models\Peran;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;
    protected $table = 'films';
    protected $fillable = [
        'judul',
        'ringkasan',
        'tahun',
        'poster',
        'genres_id'
    ];

    public function genre()
    {
        return $this->hasMany('App\Models\Genre', 'id', 'genres_id');
    }
    public function peran()
    {
        return $this->hasMany(Peran::class);
    }

    public function kritik()
    {
        return $this->hasMany('App\Models\kritik');
    }
}
