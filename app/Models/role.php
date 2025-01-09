<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class role extends Model
{
    use HasFactory;
    
    protected $fillable = ['id', 'name'];

    public function pengguna()
    {
        return $this->hasMany(Pengguna::class, 'role_id');
    }
}
