<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class review extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'id',
        'review',
        'rating',
        'orang_id',
        'film_id'
    ];

    public function pengguna()
    {
        return $this->belongsTo(Pengguna::class, 'orang_id');
    }

    public function movie()
    {
        return $this->belongsTo(Movie::class, 'film_id');
    }
}
