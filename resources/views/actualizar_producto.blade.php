@extends('layouts.master')

@section('title', 'Actualizar producto')

@section('contenido')

<!-- Dar de baja -->

<h1 class="sub1">Actualizar Producto</h1>
<p>
<form class="formulario" action="ejemplo.php" method="get">

<p>Nombre del producto: <input type="text" name="nombrep" required size="40"></p>

  <p>
    <hr>
    
    <label for="cantidad">Cantidad:</label><input type=number name="cantidad">
    <label for="precio">Precio:</label><input type=number name="precio">
    <label for="estado">Estado:</label><input min="0" max="1" type=number name="estado">

    <hr>
  </p>

  <label class="heading">Escoja Sucursales:</label>
  <p><label><input type="checkbox" name="sucursal[]" value="1"> El Tecnomago</label></p>
  <p><label><input type="checkbox" name="sucursal[]" value="2"> El cable suelto</label></p>
  <p><label><input type="checkbox" name="sucursal[]" value="3"> Rocagramación</label></p>

  <p>Descripción:</p>
  <textarea name="descripcion" rows="4" cols="40" placeholder="Descripción del producto"></textarea>

     
  <label for="categoria">Categoría:</label> <select name="categoria">
  <option value="0">...</option>
  <option value="1">Software</option>
  <option value="2">Componentes</option>
  <option value="3">Coleccionables</option>
  <option value="4">Línea blanca</option>

    <p><input class="btn btn-primary" type="submit" value="Insertar"></p>







</form>
</p>

@stop