@extends('layouts.master')

@section('title', 'Borrar producto')

@section('contenido')

<!-- Borrar producto -->

<h1 class="sub1">Borrar/Dar de baja producto </h1>
<p>
<form class="formulario" action="ejemplo.php" method="get">
  <p>Ingrese código de producto: <input type="number" name="codigo" required ></p>
  <br>
  <input type="radio" name="boton" value="1"> Dar de Baja<br>
  <input type="radio" name="boton" value="2"> Eliminar<br>
  <br>
  <input type="submit" class="btn btn-primary" value="Borrar">
  <input type="reset" class="btn btn-primary" value="Limpiar">
</form>
</p>

@stop