<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Minimarket</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/index.css') }}">
    <link rel="icon" href="{{asset('img/logoMinimarket.png')}}" type="image/png" sizes="250x250">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>

<!--Encabezado de la pagina-->
<nav class="navbar navbar-expand-lg bg-body-tertiary"  data-bs-theme="dark">
        <div class="container-fluid">
          <!--Titulo de encabezado junto con su imagen-->
          <a class="navbar-brand" href="contacto">Minimarket <img src="#" alt="" width="50"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Acerca del minimarket</a>
              </li>
              <!--Menu desplegable-->
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Contactanos
                </a>
                <!--Ul (lista no ordenada) -->
                <ul class="dropdown-menu">
                  <!--Link con imagen que los dirige a la pagina correspondiente-->
                  <li class="nav-item">
                    <p>instragram: </p><a href="https://www.instagram.com/alexit030/">
                      <img src="https://png.pngtree.com/png-vector/20221018/ourmid/pngtree-instagram-icon-png-image_6315974.png" width="30" alt="">
                    </a>
                    <p>correo:</p> <a href="mailto:tresagenciademediosdigitales@gmail.com">
                      <img src="https://cdn-icons-png.flaticon.com/512/6788/6788206.png" width="30" alt="">
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
  </nav>
      <!--clase para un Collage de imagenes -->
      <div class="collage">

        <div class="imagen-con-nombre">
            <!-- Enlace que envuelve la imagen que lleva al index.blade-->
            <a href="{{route('index')}}">
            <!-- Imagen con su ruta src y Su atributo -->
            <img src="https://cdn.myportfolio.com/2a6693f1-6bfa-441c-8f68-8b1f27bbfd55/f8124437-f01e-4e66-ac45-55fba68afd91_rw_1920.jpg?h=e6f3b27ba3dbea127dc187c8f604b8e8" alt="Imagen 1">
            </a>
            <!-- Div que contiene el nombre de la imagen -->
            <div class="nombre-imagen">ROPA DEPORTIVA</div>
        </div>

        <div class="imagen-con-nombre">
            <a href="{{route('index')}}">
            <img src="https://cdn.myportfolio.com/2a6693f1-6bfa-441c-8f68-8b1f27bbfd55/aa4e03c1-6f59-49ef-b2c2-37a88a0c0724_rw_1920.png?h=6f3e849463ff8e090b3ff140f96881ee" alt="Imagen 2">
            </a>
            <div class="nombre-imagen">TERMOS</div>
        </div>

        <div class="imagen-con-nombre">
            <a href="{{route('index')}}">
            <img src="https://cdn.myportfolio.com/2a6693f1-6bfa-441c-8f68-8b1f27bbfd55/14a73b21-70da-4439-bfc1-c9011adac950_rw_1920.png?h=1fce86b7fc340a39d5d157ed74f1c660" alt="Imagen 2">
            </a>
            <div class="nombre-imagen">PAPEL Y BOLIGRAFOS</div>
        </div>

        <div class="imagen-con-nombre">
            <a href="{{route('index')}}">
            <img src="https://cdn.myportfolio.com/2a6693f1-6bfa-441c-8f68-8b1f27bbfd55/9f62c93d-9daa-41f6-90ba-180e0b566fbf.png?h=0861a45bd08f9a0ca38bf43376a92330" alt="Imagen 2">
            </a>
            <div class="nombre-imagen">TELA</div>
        </div>

        <div class="imagen-con-nombre">
            <a href="{{route('index')}}">
            <img src="https://cdn.myportfolio.com/2a6693f1-6bfa-441c-8f68-8b1f27bbfd55/5faba38f-2a9f-43bd-b1a7-a59eecbb4601_rw_1920.png?h=9f3284398aa4c4e826d7299a717c4e39" alt="Imagen 2">
            </a>
            <div class="nombre-imagen">CUADERNOS</div>
        </div>

        <div class="imagen-con-nombre">
            <a href="{{route('index')}}">
            <img src="https://img.remediosdigitales.com/582b39/como-elegir-body-bebe/1366_2000.jpeg" alt="Imagen 2">
            </a>
            <div class="nombre-imagen">PAÑALES</div>
        </div>
      </div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
    integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
    crossorigin="anonymous"></script>
</body>
</html>
