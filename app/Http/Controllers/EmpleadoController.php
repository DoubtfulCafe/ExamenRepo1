<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado;

class EmpleadoController extends Controller
{
    public function index()
    {
        $productos = Empleado::all();
        return view('empleado.index', compact('empleados'));
    }

    public function create()
    {
        return view('empleado.create');
    }

    public function store(Request $request)
    {
        // Lógica para almacenar un nuevo producto
    }
}
