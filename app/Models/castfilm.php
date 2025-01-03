<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class castfilm extends Model
{
    use HasFactory;
    
    protected $table = 'castfilm';

    protected $fillable = [
        'id',
        'film_id',
        'cast_id'
    ];

    public function movie()
    {
        return $this->belongsTo(Movie::class, 'film_id');
    }

    public function cast()
    {
        return $this->belongsTo(Cast::class, 'cast_id');
    }
}
