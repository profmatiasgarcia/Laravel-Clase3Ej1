<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Producto;

class ProductoController extends Controller
{
    public function index()
{
    //$productos = Producto::all();
    $productos = Producto::orderBy('created_at', 'DESC')->get();
    //return view('producto.todos', ['productos' => $productos->toArray()]);
    return view('producto.todos', compact('productos'));
}

public function show($id)
{

    $producto = Producto::find($id);
   //$producto = Producto::where('Codigo', 1003)->get();
    if (!is_null($producto))
       return view('producto.mostrar', ['producto' => $producto]);
   else
       return response('no encontre producto', 404);
}

public function create()
{
    return view('producto.formproducto');
}

public function store(Request $request)
{
    $this->validate($request, [
        'Codigo' => 'required',
        'Descripcion' => 'required',
        'PrecioUnitario' => 'required'
    ]);

    Producto::create($request->all());
    return redirect('productos');
}
}
