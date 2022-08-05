@extends('layouts.master')

@section('title', 'Asignar sucursal')

@section('contenido')

<h1 class="sub1">Asignar sucursal</h1>

<form class="formulario" action="{{  url('/productos')  }}" method="POST">

  <p>Nombre del producto: <input type="text" name="nombre" required size="40"></p>

  <p>Categoría: <select name="categoria">
  <option value="0">...</option>
  <option value="1">Software</option>
  <option value="2">Componentes</option>
  <option value="3">Coleccionables</option>
  <option value="4">Línea blanca</option>

  <p>Descripción:</p>
  <textarea name="descripcion" rows="4" cols="40" placeholder="Descripción del producto"></textarea>

  <p><input class="btn btn-primary" type="submit" value="Insertar"></p>

</form>

@stop