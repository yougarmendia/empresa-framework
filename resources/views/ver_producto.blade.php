@extends('layouts.master')

@section('title', 'Ver producto')

@section('contenido')

  <h1 class="sub1">Ver Producto</h1>
  <p>
  <form class="formulario" action="buscar_productos" method="post" >
    <p>Patrón a consultar: <input type="text" name="patron" class="form-control" required ></p>
    <br>
    <p>Buscar por:</p>
    <input type="radio" name="table" value="productos">Código<br>
    <input type="radio" name="table" value="productos">Nombre<br>
    <input type="radio" name="table" value="sucursales">Sucursal<br>
    <br>
    <input type="submit" class="btn btn-primary" value="Buscar">
  </form>
  </p>

  <!--
    Que el valor del botón ratio sea la condición para la búsqueda.
    $producto = Producto::where($id);
    $request->boton
  -->

  <!-- @foreach ($productos as $producto)
    {{ $producto -> nombre }}
  @endforeach -->


@stop