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
        $producto->descripcion = $request->input("descripcion");
        $producto->precio = $request->input("precio");
        $producto->stock = $request->input("stock");
        $producto->pagaIsv = $request->input("pagaIsv");
        $producto->save();
        
        return redirect('producto.inicio');
    }
}
