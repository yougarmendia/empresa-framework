@extends('layouts.master')

@section('title', 'Crear producto')

@section('contenido')

<h1 class="sub1">Crear Producto</h1>

<form class="formulario" action="{{  url('/productos')  }}" method="POST">

  <p>Nombre del producto: <input type="text" name="nombre" required size="40"></p>


  <p>
    <hr>
    
    <label for="cantidad">Cantidad:</label><input type=number name="cantidad">
    <label for="precio">Precio:</label><input type=number name="precio">
    <label for="estado">Estado:</label><input type=number name="estado">
    
    <hr>
  </p>

    <label class="heading">Escoja Sucursales:</label>
    <p><label><input type="checkbox"  name="sucursal" value="1"> El Tecnomago</label></p>
    <p><label><input type="checkbox"  name="sucursal" value="2"> El cable suelto</label></p>
    <p><label><input type="checkbox"  name="sucursal" value="3"> Rocagramación</label></p>

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

@stop