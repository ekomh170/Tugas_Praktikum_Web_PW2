<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    use HasFactory;
    protected $table = 'dokters';

    protected $fillable = 
    [
        'nama',
        'gender',
        'tmp_lahir',
        'tgl_lahir',
        'kategori',
        'telpon',
        'alamat',
        'unitkerja_id',
    ];

    public function unitkerja()
    {
        return $this->belongsTo(Unitkerja::class);
    }
    
    public function periksas()
    {
        return $this->hasMany(Periksa::class);
    }
}