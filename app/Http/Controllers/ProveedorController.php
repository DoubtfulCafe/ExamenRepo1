<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proveedor;

class ProveedorController extends Controller
{
    public function index()
    {
        $Proveedores1 = Proveedor::all();
        return view('provedores', compact('Proveedores1'));
    }

    public function create()
    {
        return view('crearproducto');
    }

    public function store(Request $request)
    {
        $proveedor= new Proveedor();
        $proveedor->idproveedor = $request->input("idproveedor");
        $proveedor->nombre = $request->input("nombre");
        $proveedor->fechaRegistro = $request->input("fechaRegistro");
        $proveedor->telefono = $request->input("telefono");
        $proveedor->correo = $request->input("correo");
        $proveedor->save();
        
        return redirect('proveedor.inicio');
    }
}
