<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Stock;

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

        $stock = new Stock();
        $stock->producto_id = $producto -> id;
        $stock->sucursal_id = $request->sucursal;
        $stock->cantidad = $request -> cantidad;
        $stock->precio = $request -> precio;
        $stock->estado = $request -> estado;
        $stock->save();
    }

    public function crear_producto(){
        return view('crear_producto');
    }

    public function buscar(Request $request){


        $busqueda = Producto::where($request->search, 'LIKE', '%'.$request->patron.'%')->get();

        return view('ver_producto',['busqueda'=>$busqueda]);
    }

    public function actualizar_producto(){
    return view('actualizar_producto');
    }

    public function login(){
        return view('login');
    }



    public function borrar(){
        return view('borrar_producto');
    }


}
