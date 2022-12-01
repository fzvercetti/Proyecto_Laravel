<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ganadero;


class GanaderoController extends Controller
{

    protected $ganaderos;
    public function __construct(Ganadero $ganaderos)
    {
        $this->ganaderos = $ganaderos;
    }

    public function index()
    {
        $ganaderos = $this->ganaderos->obtenerGanaderos();
        return view('ganaderos.lista', ['ganaderos' => $ganaderos]);
    }

    public function create()
    {
        return view('ganaderos.crear');
    }

    public function store(Request $request)
    {
        $ganadero = new Ganadero($request->all());
        $ganadero->save();
        return redirect()->action([GanaderoController::class, 'index']);
    }

    public function show($id)
    {
        $ganadero = $this->ganaderos->obtenerGanaderoPorId($id);
        return view('ganaderos.ver', ['ganadero' => $ganadero]);
    }

    public function edit($id)
    {
        $ganadero = $this->ganaderos->obtenerGanaderoPorId($id);
        return view('ganaderos.editar', ['ganadero' => $ganadero]);
    }

    public function update(Request $request, $id)
    {
        $ganadero = Ganadero::find($id);
        $ganadero->fill($request->all());
        $ganadero->save();
        return redirect()->action([GanaderoController::class, 'index']);
    }

    public function destroy($id)
    {
        $ganadero = Ganadero::find($id);
        $ganadero->delete();
        return redirect()->action([GanaderoController::class, 'index']);
    }
}
