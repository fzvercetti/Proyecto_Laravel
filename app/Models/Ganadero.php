<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ganadero extends Model
{
    public $timestamps = false;

    use HasFactory;

    protected $table = "ganaderos";

    protected $fillable = ['nombre', 'apellido', 'edad', 'matricula', 'ubicacion'];

    protected $hidden = ['id'];

    public function obtenerGanaderos()
    {
        return Ganadero::all();
    }

    public function obtenerGanaderoPorId($id)
    {
        return Ganadero::find($id);
    }
}
