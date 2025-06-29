<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegistrasiPantiAsuhan extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $table = 'registrasi_panti_asuhans';

    public function operator_s()
    {
        return $this->belongsTo(Operator_::class, 'id_operator_s');
    }
}
