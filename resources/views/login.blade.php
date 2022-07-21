@extends('layouts.master')

@section('title', 'Login')

@section('contenido')

<h1 class="sub1">Login</h1>

<form class="formulario" action="ejemplo.php" method="get">
  <p>Introduzca el nombre de usuario y el password</p>

  <p>Nombre de usuario: <input type="text" name="usuario" required> </p>

  <p>Contraseña: <input type="password" name="password" required ></p>

  <p><input class="btn btn-primary" type="submit" value="Ingresar"></p>

</form>

@stop