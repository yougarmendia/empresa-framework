<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductosController extends Controller
{
    public function index(){
        $productos = Producto::all();

        return view('ver_producto',[
            'productos' => $productos
        ]);
    }

    public function store(Request $request){
        
        $producto = new Producto();
        $producto->nombre = $request->nombre;
        $producto->categoria_id = $request->categoria;
        $producto->descripcion = $request->descripcion;
        $producto->save();

    }

    public function crear_producto(){
        return view('crear_producto');
    }








}
