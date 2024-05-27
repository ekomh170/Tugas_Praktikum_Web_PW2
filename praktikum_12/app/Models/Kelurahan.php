<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelurahan extends Model
{
    use HasFactory;
    protected $table = 'kelurahans';

    protected $fillable = 
    [
        'nama',
    ];

    // hasmany pasien
    public function pasien()
    {
        return $this->hasMany(Pasien::class);
    }
}
