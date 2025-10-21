<?php

namespace App\Http\Controllers;

use App\Models\Producto_MOM;
use Illuminate\Http\Request;

class Producto_MOM_Controller extends Controller
{
    /**
     * Mostrar listado de productos
     */
    public function index()
    {
        $productos = Producto_MOM::all();
        return view('productos.index', compact('productos'));
    }

    /**
     * Mostrar detalle de un producto específico
     */
    public function show($id)
    {
        $producto = Producto_MOM::findOrFail($id);
        return view('productos.show', compact('producto'));
    }
}
