<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    public $timestamps = false;

    use HasFactory;

    protected $table = "proyectos";

    protected $fillable = ['titulo', 'autor', 'descripcion', 'fecha', 'asesor'];

    protected $hidden = ['id'];

    public function obtenerProyectos()
    {
        return Proyecto::all();
    }

    public function obtenerProyectoPorId($id)
    {
        return Proyecto::find($id);
    }
}
