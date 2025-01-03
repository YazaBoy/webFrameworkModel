<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class film extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'id',
        'judul',
        'sinopsis',
        'poster',
        'tahun',
        'tersedia',
        'genre_id'
    ];

    public function genre()
    {
        return $this->belongsTo(Genre::class, 'genre_id');
    }

    public function reviews()
    {
        return $this->hasMany(Review::class, 'film_id');
    }

    public function casts()
    {
        return $this->belongsToMany(Cast::class, 'castfilm', 'film_id', 'cast_id');
    }
}
