<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PantiAsuhan extends Model
{
    // use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'panti_asuhans';

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, function ($query, $search) {
            return $query->where('nama_panti_asuhan', 'like', '%' . $search . '%')
                ->orWhere('alamat', 'like', '%' . $search . '%');
        });
    }

    public function donasis()
    {
        return $this->hasMany(Donasi::class, 'panti_asuhan_id');
    }

    // public function sluggable(): array
    // {
    //     return [
    //         'slug' => [
    //             'source' => 'title'
    //         ]
    //     ];
    // }

    protected $fillable = [
        'nama_panti_asuhan',
        'alamat',
        'nama_yayasan',
        'jumlah_penghuni',
        'no_handphone',
        'jam_operasional',
        'foto_panti_asuhan',
        'koordinat',
        'provinsi',
        'kota_kabupaten',
        'kelurahan',
        'kecamatan',
        'kode_pos',
        'link_maps',
        'deskripsi',
        'visi',
        'misi'
    ];
}
