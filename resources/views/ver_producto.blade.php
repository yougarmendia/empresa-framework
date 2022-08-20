@extends('layouts.master')

@section('title', 'Ver producto')

@section('contenido')

  <h1 class="sub1">Ver Producto</h1>
  <p>
  <form class="formulario" action="buscar_productos" method="post" >
    <p>Patrón a consultar: <input type="text" name="patron" class="form-control" required ></p>
    <br>
    <p>Buscar por:</p>
    <input type="radio" name="search" value="id">Código<br>
    <input type="radio" name="search" value="nombre">Nombre<br>
    <input type="radio" name="search" value="sucursal">Sucursal<br>
    <br>
    <input type="submit" class="btn btn-primary" value="Buscar">
  </form>
  </p>

<h2>Lista de resultados</h2>

@if(isset($busqueda))
  
  "Se encontraron los siguientes resultados"<br>

  @foreach ($busqueda as $item_busqueda)
    Código: {{$item_busqueda -> id}}<br>
    Nombre del producto: {{$item_busqueda -> nombre}}<br>
    Sucursal: {{$item_busqueda -> sucursal_id}}
  @endforeach

  @else
    "No hay resultados"
    
@endif


@stop