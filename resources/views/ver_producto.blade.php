@extends('layouts.master')

@section('title', 'Ver producto')

@section('contenido')

  <h1 class="sub1">Ver Producto</h1>
  <p>
  <form class="formulario" action="ejemplo.php" method="get" >
    <p>Patrón a consultar: <input type="text" name="patron" class="form-control" required ></p>
    <br>
    <p>Buscar por:</p>
    <input type="radio" name="boton" value="1"> Código<br>
    <input type="radio" name="boton" value="2"> Nombre<br>
    <input type="radio" name="boton" value="3"> Sucursal<br>
    <br>
    <input type="reset" class="btn btn-primary" value="Borrar">
  </form>
  </p>

  @foreach ($productos as $producto)
    {{ $producto -> nombre }}
  @endforeach

@stop