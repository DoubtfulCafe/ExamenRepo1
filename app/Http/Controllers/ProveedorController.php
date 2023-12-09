<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proveedor;

class ProveedorController extends Controller
{
    public function index()
    {
        $proveedores1 = Proveedor::all();
        return view('proveedores', compact('proveedores1'));
    }

    public function create()
    {
        return view('proveedor.create');
    }

    public function store(Request $request)
    {
        // Lógica para almacenar un nuevo producto
    }
}
