<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;
    protected $table = 'pasiens';

    protected $fillable = 
    [
        'kode',
        'nama',
        'tmp_lahir',
        'tgl_lahir',
        'gender',
        'email',
        'alamat',
        'kelurahan_id',
    ];  

    // disable timestamps
    public $timestamps = false;

    public function kelurahan()
    {
        return $this->belongsTo(Kelurahan::class);
    }

    public function periksas()
    {
        return $this->hasMany(Periksa::class);
    }
}
