<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ganado;


class GanadoController extends Controller
{

    protected $ganados;
    public function __construct(Ganado $ganados)
    {
        $this->ganados = $ganados;
    }

    public function index()
    {
        $ganados = $this->ganados->obtenerGanados();
        return view('ganados.lista', ['ganados' => $ganados]);
    }

    public function create()
    {
        return view('ganados.crear');
    }

    public function store(Request $request)
    {
        $ganado = new Ganado($request->all());
        $ganado->save();
        return redirect()->action([GanadoController::class, 'index']);
    }

    public function show($id)
    {
        $ganado = $this->ganados->obtenerGanadoPorId($id);
        return view('ganados.ver', ['ganado' => $ganado]);
    }

    public function edit($id)
    {
        $ganado = $this->ganados->obtenerGanadoPorId($id);
        return view('ganados.editar', ['ganado' => $ganado]);
    }

    public function update(Request $request, $id)
    {
        $ganado = Ganado::find($id);
        $ganado->fill($request->all());
        $ganado->save();
        return redirect()->action([GanadoController::class, 'index']);
    }

    public function destroy($id)
    {
        $ganado = Ganado::find($id);
        $ganado->delete();
        return redirect()->action([GanadoController::class, 'index']);
    }
}
