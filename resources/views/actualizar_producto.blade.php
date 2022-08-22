@extends('layouts.master')

@section('title', 'Actualizar producto')

@section('contenido')

<h1 class="sub1">Actualizar Producto</h1>
<p>

<?php //dd($_POST);   ?>


<!-- Formulario para actualizar -->
<form class="formulario" action="{{ url('producto/') }}/<?php echo $_POST["id"]; ?>" method="POST">
  @csrf
  @method('PUT')

  <p>Nombre del producto:
    <input type="text" name="nombre" required size="40" placeholder="<?php echo $_POST["nombre"];?>">
  </p>

  <input name="id" type="hidden" value="<?php echo $_POST["id"]; ?>">

  <input name="categoria_id" type="hidden" value="<?php echo $_POST["categoria_id"]; ?>">

  <p>Descripción:</p>
  <textarea name="descripcion" rows="4" cols="40" placeholder="<?php echo $_POST["descripcion"];?>"></textarea>

  <p><input class="btn btn-primary" type="submit" value="Actualizar"></p><!-- botón para actualizar -->

  <?php echo $_POST["id"]; ?>

  <?php echo $_POST["categoria_id"]; ?>


</form>
</p>

@stop