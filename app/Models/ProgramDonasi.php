<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProgramDonasi extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $table = 'program_donasis';

    // Relasi ke Panti Asuhan
    public function pantiAsuhanOperator()
    {
        return $this->belongsTo(PantiAsuhanOperator::class, 'panti_asuhan_operators_id');
    }

    // Relasi ke Operator
    public function operator()
    {
        return $this->belongsTo(Operator_::class, 'operator_s_id');
    }

    public function donasi()
    {
        return $this->hasMany(Donasi::class, 'program_donasis_id');
    }
}
