<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreResultadoRequest;
use App\Models\Resultado;
use Illuminate\Http\Request;

class ResultadoController extends Controller
{
    public function index()
    {
        $resultados = Resultado::all();

        return response()->json([
            'estado' => true,
            'resultados' => $resultados
        ]);
    }

    public function create()
    {
        //
    }

    public function store(StoreResultadoRequest $request)
    {
        $resultado = Resultado::create($request->all());

        return response()->json([
            'estado' => true,
            'mensaje' => "Juego registrado con exito",
            'resultado' => $resultado
        ], 200);
    }
}
