@extends('layouts.master')

@section('title', 'Actualizar producto')

@section('contenido')

<h1 class="sub1">Actualizar Producto</h1>
<p>

<form class="formulario" action="ejemplo.php" method="post">

  <p>Nombre del producto: <input type="text" name="nombre" required size="40" placeholder="<?php echo $_POST["nombre"];?>"></p>

  <p>Descripción:</p>
  <textarea name="descripcion" rows="4" cols="40" placeholder="<?php echo $_POST["descripcion"];?>"></textarea>

  <p><input class="btn btn-primary" type="submit" value="Actualizar"></p>

</form>
</p>

@stop