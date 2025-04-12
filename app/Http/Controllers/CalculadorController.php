<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculadorController extends Controller
{
    public function index()
    {
        return view('calculadora');
    }

    public function calcular(Request $request)
    {
        $n1 = $request->input('numero1');
        $n2 = $request->input('numero2');
        $op = $request->input('operacion');
        $resultado = null;

        switch ($op) {
            case 'suma':
                $resultado = $n1 + $n2;
                break;
            case 'resta':
                $resultado = $n1 - $n2;
                break;
            case 'multiplicacion':
                $resultado = $n1 * $n2;
                break;
            case 'division':
                if ($n2 == 0) {
                    return redirect()->route('calculadora.index')->with('error', 'No se puede dividir por cero.');
                }
                $resultado = $n1 / $n2;
                break;
            default:
                return redirect()->route('calculadora.index')->with('error', 'Operación no válida.');
        }

        return redirect()->route('calculadora.index')->with('resultado', $resultado);
    }
}
