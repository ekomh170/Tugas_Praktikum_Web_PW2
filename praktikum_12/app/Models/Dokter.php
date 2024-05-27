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
        'tmp_lahir',
        'tgl_lahir',
        'kategori',
        'telpon',
        'alamat',
        'unit_kerja_id',
    ];

    public function unitkerja()
    {
        return $this->belongsTo(Unitkerja::class);
    }
}