<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cast extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'id',
        'nama',
        'age',
        'biodata',
    ];

    public function movies()
    {
        return $this->belongsToMany(Movie::class, 'castfilm', 'cast_id', 'film_id');
    }
}
