<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class profil extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'biodata',
        'umur',
        'alamat',
        'avatar',
        'orang_id',
    ];

    public function pengguna()
    {
        return $this->belongsTo(Pengguna::class, 'orang_id');
    }
}
