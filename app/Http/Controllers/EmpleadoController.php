<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado;

class EmpleadoController extends Controller
{
    public function index()
    {
        $empleados1 = Empleado::all();
        return view('empleados', compact('empleados1'));
    }

    public function create()
    {
        return view('crearEmpleado');
    }

    public function store(Request $request)
    {
        {
            $empleado= new Empleado();
            $empleado->producto = $request->input("idproducto");
            $empleado->nombre = $request->input("nombre");
            $empleado->apellido = $request->input("fechaRegistro");
            $empleado->telefono = $request->input("telefono");
            $empleado->password = $request->input("correo");
            $empleado->save();
            
            return redirect('producto.inicio');
        }
    }
}
