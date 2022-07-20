<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TiendaController extends Controller
{
    public function login(){
        return view('login');
    }

    public function crear_producto(){
        return view('crear_producto');
    }

    public function ver_producto(){
        return view('ver_producto');
    }

    public function borrar_producto(){
        return view('borrar_producto');
    }

    public function actualizar_producto(){
        return view('actualizar_producto');
    }
}
