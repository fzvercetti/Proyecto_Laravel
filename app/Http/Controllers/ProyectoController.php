<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proyecto;


class ProyectoController extends Controller
{

    protected $proyectos;
    public function __construct(Proyecto $proyectos)
    {
        $this->proyectos = $proyectos;
    }

    public function index()
    {
        $proyectos = $this->proyectos->obtenerProyectos();
        return view('proyectos.lista', ['proyectos' => $proyectos]);
        $proyectos = $this->proyectos->obtenerProyectos();
        return view('proyectos.admin', []);
    }

    public function create()
    {
        return view('proyectos.crear');
    }

    public function store(Request $request)
    {
        $proyecto = new Proyecto($request->all());
        $proyecto->save();
        return redirect()->action([ProyectoController::class, 'index']);
    }

    public function show($id)
    {
        $proyecto = $this->proyectos->obtenerProyectoPorId($id);
        return view('proyectos.ver', ['proyecto' => $proyecto]);
    }

    public function edit($id)
    {
        $proyecto = $this->proyectos->obtenerProyectoPorId($id);
        return view('proyectos.editar', ['proyecto' => $proyecto]);
    }

    public function update(Request $request, $id)
    {
        $proyecto = Proyecto::find($id);
        $proyecto->fill($request->all());
        $proyecto->save();
        return redirect()->action([ProyectoController::class, 'index']);
    }

    public function destroy($id)
    {
        $proyecto = Proyecto::find($id);
        $proyecto->delete();
        return redirect()->action([ProyectoController::class, 'index']);
    }
}
