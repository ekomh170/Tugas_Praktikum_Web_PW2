<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unitkerja extends Model
{
    use HasFactory;
    protected $table = 'unitkerjas';

    protected $fillable = 
    [
        'nama',
    ];

    // hasmany ke dokter
    public function dokter()
    {
        return $this->hasMany(Dokter::class);
    }
    
}
