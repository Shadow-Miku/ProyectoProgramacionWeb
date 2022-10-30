<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <title>Weirdo Comics</title>
</head>

<body class="bg-blue">
<div>

<!--barra navegacion-->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">Weirdo Comics</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">

        <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('apPrin')? 'text-success fw-bold w-bold text-decoration-line-through':'' }}" aria-current="page" href=" {{ route('apPrin') }} "> Inicio </a>
        </li>
        
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Registrar
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="{{ route('apRegi') }}">Registrar Comics</a></li>
            <li><a class="dropdown-item" href="">Registrar Articulos</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="">Something else here</a></li>
          </ul>
        </li>

        <li class="nav-item">
          <a class="nav-link {{ request()->routeIs()? 'text-success fw-bold text-decoration-line-through':'' }}" href= " {{ route() }} "> Pedidos </a>
        </li>

        <li class="nav-item">
          <a class="nav-link {{ request()->routeIs()? 'text-success fw-bold text-decoration-line-through':'' }}" href= " {{ route() }} "> Stock </a>
        </li>

        <li class="nav-item">
          <a class="nav-link {{ request()->routeIs()? 'text-success fw-bold text-decoration-line-through':'' }}" href= " {{ route() }} "> Ventas </a>
        </li>


      </ul>
    </div>
  </div>
</nav>
</div>
<!--Termina Barra navegación-->

<!--  Contenido -->


@yield('contenido')



<!--Pie de Pagina-->
<!--Alertas-->
<div class="alert alert-success" role="alert">
  Biblioteca Fresca.   2022 CopyRigth® 
  <?php 
  date_default_timezone_set('America/Mexico_City');

  $fechaActual = date('d/m/y h:i:s');

  echo "$fechaActual <br>";
  
  ?>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>


</html>