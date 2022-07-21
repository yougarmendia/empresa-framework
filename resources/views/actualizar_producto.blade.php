@extends('layouts.master')

@section('title', 'Actualizar producto')

@section('contenido')

<h1 class="sub1">Actualizar Producto</h1>
<p>
<form class="formulario" action="ejemplo.php" method="get">
  <p>Ingrese código de producto: <input type="number" name="codigo" required ></p>
  <br>
  <p>Nombre del producto: <input type="text" name="nombre" required size="40"></p>
  <p>Precio de venta: <input type="number" name="p_venta" min="1" required step ="1">  </p>
  <p>Cantidad: <input type="number" name="cant" min="1" required step ="1" >   </p>
  <br>
  <input type="submit" class="btn btn-primary" value="Actualizar">
  <input type="reset" class="btn btn-primary" value="Limpiar">
</form>
</p>

@stop