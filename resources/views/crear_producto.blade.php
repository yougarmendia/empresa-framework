@extends('layouts.master')

@section('title', 'Crear producto')

@section('contenido')

<h1 class="sub1">Crear Producto</h1>

<form class="formulario" action="ejemplo.php" method="get">
  <p>Código del producto: <input type="text" name="codigo" required size="40"></p>
  <p>Nombre del producto: <input type="text" name="nombre" required size="40"></p>
  <p>Categoría: <select name="sucursal">
  <option cat="0">...</option>
  <option cat="1">Cat 1</option>
  <option cat="2">Cat 2</option>
  <option cat="3">Cat 3</option>
  </select></p>
    <p>Sucursal: <select name="sucursal">
    <option suc="0">...</option>
    <option suc="1">Uno</option>
    <option suc="2">Dos</option>
    <option suc="3">Tres</option>
  </select></p>
  <p>Descripción:</p>
  <textarea name="desc" rows="4" cols="40" placeholder="Descripción del producto"></textarea>
  <p>Cantidad: <input type="number" name="cant" min="1" required step ="1" >   </p>
  <p>Precio de venta: <input type="number" name="p_venta" min="1" required step ="1">  </p>
  <p>
    <input class="btn btn-primary" type="submit" value="Crear">
    <input class="btn btn-primary" type="reset" value="Limpiar">
  </p>
</form>

@stop