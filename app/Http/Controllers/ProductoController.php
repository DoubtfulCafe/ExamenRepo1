<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoController extends Controller
{
    public function index()
    {
        $productos1 = Producto::all();
        return view('productos', compact('productos1'));
    }

    public function create()
    {
        return view('creaProducto');
    }

    public function store(Request $request)
    {
        $producto= new Producto();
        $producto->producto = $request->input("idproducto");
        $producto->nombre = $request->input("nombre");
        $producto->apellido = $request->input("fechaRegistro");
        $producto->telefono = $request->input("telefono");
        $producto->password = $request->input("correo");
        $producto->save();
        
        return redirect('producto.inicio');
    }
}
