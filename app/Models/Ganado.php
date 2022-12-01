<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ganado extends Model
{
    public $timestamps = false;

    use HasFactory;

    protected $table = "bovino";

    protected $fillable = ['raza', 'propietario', 'edad', 'matricula'];

    protected $hidden = ['id'];

    public function obtenerGanados()
    {
        return Ganado::all();
    }

    public function obtenerGanadoPorId($id)
    {
        return Ganado::find($id);
    }
}
