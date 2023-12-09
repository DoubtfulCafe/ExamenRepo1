<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\producto;

class productoController extends Controller
{
    public function index()
    {
        $productoes1 = producto::all();
        return view('provedores', compact('productoes1'));
    }

    public function create()
    {
        return view('crearproducto');
    }

    public function store(Request $request)
    {
        $producto= new producto();
        $producto->producto = $request->input("idproducto");
        $producto->nombre = $request->input("nombre");
        $producto->apellido = $request->input("fechaRegistro");
        $producto->telefono = $request->input("telefono");
        $producto->password = $request->input("correo");
        $producto->save();
        
        return redirect('producto.inicio');
    }
}
