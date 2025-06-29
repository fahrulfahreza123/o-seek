<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Donasi extends Model
{
    // use HasFactory;

    protected $guarded = ['id'];

    protected $table = 'donasis';
    
    public function pantiAsuhanOperator()
    {
        return $this->belongsTo(PantiAsuhan::class, 'panti_asuhan_operators_id');
    }

    public function programDonasi()
    {
        return $this->belongsTo(ProgramDonasi::class, 'program_donasis_id');
    }
}
