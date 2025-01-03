<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class orang extends Model
{
    use HasFactory;
    
    protected $table = 'orang'; 
    
    protected $fillable = [
        'id',
        'name',
        'email',
        'password',
        'role_id'
    ];

    protected $hidden = [
        'password',
        'email_verified_at'
    ];

    public function role()
    {
        return $this->belongsTo(Role::class, 'role_id');
    }

    public function profile()
    {
        return $this->hasOne(Profile::class, 'orang_id');
    }

    public function reviews()
    {
        return $this->hasMany(Review::class, 'orang_id');
    }
}
