<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Venta;


class VentaController extends Controller
{

    protected $ventas;
    public function __construct(Ventas $ventas)
    {
        $this->ventas = $ventas;
    }

    public function index()
    {
        $ventas = $this->ventas->obtenerVentas();
        return view('ventas.lista', ['ventas' => $ventas]);
    }

    public function create()
    {
        return view('ventas.crear');
    }

    public function store(Request $request)
    {
        $venta = new Venta($request->all());
        $venta->save();
        return redirect()->action([VentaController::class, 'index']);
    }

    public function show($id)
    {
        $venta = $this->ventas->obtenerVentaPorId($id);
        return view('ventas.ver', ['venta' => $venta]);
    }

    public function edit($id)
    {
        $venta = $this->ventas->obtenerVentaPorId($id);
        return view('ventas.editar', ['venta' => $venta]);
    }

    public function update(Request $request, $id)
    {
        $venta = Venta::find($id);
        $venta->fill($request->all());
        $venta->save();
        return redirect()->action([VentaController::class, 'index']);
    }

    public function destroy($id)
    {
        $venta = Venta::find($id);
        $venta->delete();
        return redirect()->action([VentaController::class, 'index']);
    }
}
