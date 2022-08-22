@extends('layouts.master')

@section('title', 'Ver producto')

@section('contenido')

  <h1 class="sub1">Ver Producto</h1>
  <p>
  <form class="formulario" action="buscar_productos" method="post" >
    <p>Patrón a consultar: <input type="text" name="patron" class="form-control" required ></p>
    <br>
    <p>Buscar por:</p>
    <input type="radio" name="search" value="producto_id">Código<br>
    <input type="radio" name="search" value="productos.nombrep">Nombre<br>
    <input type="radio" name="search" value="sucursales.id">Sucursal<br>
    <br>
    
    
    <input type="submit" class="btn btn-primary" value="Buscar">
  </form>
  </p>

<h2>Lista de resultados</h2>

@if(isset($busqueda))

  Se encontraron los siguientes resultados en la busqueda

  <table class="table">
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col">#Id</th>
      <th scope="col">#Id Producto</th>
      <th scope="col">Nombre Producto</th>
      <th scope="col">Sucursal</th>
      <th scope="col">Categoría</th>
      <th scope="col">Stock</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>

<?php //dd($busqueda); ?>

  @foreach ($busqueda as $item_busqueda)
    <tr>

    <td>
      <form action="{{ url('producto/'.$item_busqueda->producto_id) }}" method="POST">
        @csrf
        <input name="nombre" type="hidden" value="{{$item_busqueda -> nombrep}}">
        <input name="descripcion" type="hidden" value="{{$item_busqueda -> descripcion}}">
        <input name="id" type="hidden" value="{{$item_busqueda -> producto_id}}">

        <input name="categoria_id" type="hidden" value="{{$item_busqueda -> categoria_id}}">
        
        <button type="submit" class="btn btn-primary">Editar</button>
      </form>
    </td>

    <th scope="row"> {{$item_busqueda -> id}}</th>
    <td> {{$item_busqueda -> producto_id}}</td>
    <td> {{$item_busqueda -> nombrep}}</td>
    <td> {{$item_busqueda -> nombres}}</td>
    <td> {{$item_busqueda -> nombre}}</td>
    <td> {{$item_busqueda -> cantidad}}</td>
    <td>
      <form action="{{ url('producto/'.$item_busqueda->producto_id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Eliminar</button>
      </form>
    </td>
    </tr>
  @endforeach



  @else
    "No hay resultados"
    
@endif

@stop