<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PantiAsuhanOperator extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $table = 'panti_asuhan_operators';

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, function ($query, $search) {
            return $query->where('nama_panti_asuhan', 'like', '%' . $search . '%')
                ->orWhere('alamat', 'like', '%' . $search . '%');
        });
    }

    // Relasi: Setiap panti asuhan dimiliki oleh 1 operator
    public function operator()
    {
        return $this->belongsTo(Operator_::class, 'operator_s_id');
    }

    // public function getNamaOperatorAttribute()
    // {
    //     return $this->operator ? $this->operator->name : null;
    // }

    public function programDonasi() 
    {
        return $this->hasMany(ProgramDonasi::class, 'panti_asuhan_operators_id');
    }

    // Relasi One to Many
    public function donasis()
    {
        return $this->hasMany(Donasi::class, 'program_donasis_id');
    }
}
