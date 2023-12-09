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
        // Lógica para almacenar un nuevo producto
    }
}
