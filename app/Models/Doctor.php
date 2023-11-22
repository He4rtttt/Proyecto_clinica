<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    public function Users()
    {
        return $this->belongsTo(User::class);
    }

    public function Turnos()
    {
        return $this->hasMany(Turno::class);
    }

    public function Especialidades()
    {
        return $this->belongsTo(Especialidad::class);
    }

    public function Citas()
    {
        return $this->hasMany(Cita::class);
    }
}
