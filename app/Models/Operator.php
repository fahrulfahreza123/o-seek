<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Operator extends Model
{
    protected static function booted()
{
    static::creating(function ($operator) {
        $operator->tanggal = now()->toDateString(); // Otomatis isi tanggal
    });
}

    use HasFactory;

    protected $table = 'operator'; // Nama tabel di database
    protected $fillable = [
        
        'nama_operator',
        'nama_panti_asuhan',
        'nama_yayasan',
        'alamat',
        'provinsi',
        'kota_kabupaten',
        'kecamatan',
        'kelurahan',
        'no_rekening',
        'dokumen_akte_pendirian',
        'sk_pengesahan',
        'foto_panti_asuhan',
        'status',
    ];

    public function operator_()
    {
        return $this->hasOne(Operator_::class);
    }
}
