<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

use Illuminate\Notifications\Notifiable;

class Operator_ extends Authenticatable
{
    use Notifiable;

    protected $guarded = ['id'];

    protected $table = 'operator_s';

    public function pantiAsuhanOperator()
    {
        return $this->hasOne(PantiAsuhanOperator::class, 'operator_s_id');  // user_id adalah kolom foreign key di panti asuhan
    }

    public function operator()
    {
        return $this->belongsTo(Operator::class);
    }

    public function registrasiPanti()
    {
        return $this->hasMany(RegistrasiPantiAsuhan::class, 'id_operator_s');
    }
}
