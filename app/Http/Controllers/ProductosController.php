<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Stock;
use App\Models\Categoria;
use App\Models\Sucursal;
use Illuminate\Support\Facades\DB;

class ProductosController extends Controller
{
    public function index(){
        $productos = Producto::all();

        return view('ver_producto',[
            'productos' => $productos
        ]);
    }


    public function store(Request $request){

        //dd($request);

        /* Producto es el nombre de la tabla (al parecer) */
        $producto = new Producto();
        $producto->nombrep = $request->nombrep;
        $producto->categoria_id = $request->categoria;
        $producto->descripcion = $request->descripcion;
        $producto->save();

        foreach($_POST['sucursal'] as $value){
        $stock = new Stock();
        $stock->producto_id = $producto -> id;
        //$stock->sucursal_id = $request->sucursal;
        $stock->sucursal_id = $value;
        $stock->cantidad = $request -> cantidad;
        $stock->precio = $request -> precio;
        $stock->estado = $request -> estado;
        $stock->save();
        }

    }



    public function destroy($id){
        Stock::destroy($id);
        return view('ver_producto');
    }











    public function crear_producto(){
        return view('crear_producto');
    }

    public function buscar(Request $request){

        $busqueda = DB::table('stocks')
        ->join('productos', 'stocks.producto_id', '=', 'productos.id')
        ->join('sucursales', 'sucursales.id', '=', 'stocks.sucursal_id')
        ->join('categorias', 'categorias.id', '=', 'productos.categoria_id')
        ->select('stocks.id', 'stocks.producto_id', 'productos.nombrep', 'productos.descripcion','sucursales.nombres','categorias.nombre', 'stocks.cantidad')
        ->where($request->search, 'LIKE', $request->patron)
        ->get();

        return view('ver_producto',['busqueda'=>$busqueda]);
    }

    public function actualizar_producto($id){
        return view('actualizar_producto')->with($id);
    }

    public function login(){
        return view('login');
    }

    public function borrar(){
        return view('borrar_producto');
    }


}