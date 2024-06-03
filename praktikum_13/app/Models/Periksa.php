<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Periksa extends Model
{
    use HasFactory;
    protected $table = 'periksas';

    protected $fillable = 
    [
        'tanggal',
        'berat',
        'tinggi',
        'tensi',
        'keterangan',
        'pasien_id',
        'dokter_id',   
    ];

    public function pasien()
    {
        return $this->belongsTo(Pasien::class);
    }

    public function dokter()
    {
        return $this->belongsTo(Dokter::class);
    }
}
