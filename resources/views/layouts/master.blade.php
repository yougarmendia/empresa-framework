<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
      <link rel="stylesheet" href="{{ asset('css/personales.css') }}">
    </head>
<body>

@section('header')

    <header>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container-fluid">
        <button
            class="navbar-toggler"
            type="button"
            data-mdb-toggle="collapse"
            data-mdb-target="#navbarExample01"
            aria-controls="navbarExample01"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarExample01">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item active">
                <a class="nav-link" aria-current="page" href="login">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="crear_producto">Crear producto</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="ver_producto">Ver producto</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="actualizar_producto">Actualizar producto</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="borrar_producto">Borrar producto</a>
            </li>
            </ul>
        </div>
        </div>
    </nav>
    <!-- Navbar -->

    <!-- Jumbotron -->
    <div class="p-5 text-center bg-light">
        <h1 class="mb-3">Kuroshan Store</h1>
        <h4 class="mb-3">Sistema de administración de productos</h4>
    </div>
    <!-- Jumbotron -->
    </header>

@show

    

@yield('contenido')



@section('footer')

<footer class="bg-light text-center">
  <!-- Grid container -->
  <div class="container p-4 pb-0">
    <!-- Section: Form -->
    <section class="">
      <form action="">
        <!--Grid row-->
        <div class="row d-flex justify-content-center">
          <!--Grid column-->
          <div class="col-auto">
            <p class="pt-2">
              <strong>Reciba nuestras novedades</strong>
            </p>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-5 col-12">
            <!-- Email input -->
            <div class="form-outline mb-4">
              <input type="email" id="form5Example27" class="form-control" />
              <label class="form-label" for="form5Example27">Correo electrónico</label>
            </div>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-auto">
            <!-- Submit button -->
            <button type="submit" class="btn btn-primary mb-4">
              Suscribirse
            </button>
          </div>
          <!--Grid column-->
        </div>
        <!--Grid row-->
      </form>
    </section>
    <!-- Section: Form -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2020 Copyright: Kuroshan Store Chile
  </div>
  <!-- Copyright -->
</footer>



@show
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>