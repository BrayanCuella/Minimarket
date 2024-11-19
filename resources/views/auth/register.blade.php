<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Minimarket</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/estilos.css') }}">
    <link rel="icon" href="https://cdn.myportfolio.com/2a6693f1-6bfa-441c-8f68-8b1f27bbfd55/008d8ac1-a454-42e8-b656-760fc469370a_carw_1x1x32.png?h=845a3f9519a83ed4867803644f6e5d6a" type="image/png" sizes="250x250">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
<!--encabezado de la pagina-->
<nav class="navbar navbar-expand-lg bg-body-tertiary"  data-bs-theme="dark">
        <div class="container-fluid">
          <!--titulo de encabezado junto con su imagen-->
          <a class="navbar-brand" href="#">Minimarket <img src="#" alt="" width="50"></a>
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
                <ul class="dropdown-menu">
                  <!--link con imagen que los dirige a la pagina correspondiente-->
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
    <div class="row">
      <div class="col-md-6 offset-md-1">
      <h2>Conocenos.</h2>
        <p>Nuestro objetivo es crear un puesto visual única para que puedas comprar de manera sencilla. </p>
        <div id="carouselExample" class="carousel slide">
          <!--carrusel de imagenes-->
          <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner custom-carousel">
                <div class="carousel-item active">
                    <img src="https://vaquitaexpress.com.co/media/catalog/product/cache/e89ece728e3939ca368b457071d3c0be/7/7/7702189056221_30.jpg" class="carousel-img d-block" alt="Leche">
                </div>
                <div class="carousel-item">
                    <img src="https://www3.gobiernodecanarias.org/medusa/mediateca/ecoescuela/wp-content/uploads/sites/2/2013/11/14-Leche.png" class="carousel-img d-block" alt="Leche 2">
                </div>
                <div class="carousel-item">
                    <img src="https://okdiario.com/img/2019/05/29/como-elegir-una-buena-mantequilla.jpg" class="carousel-img d-block" alt="Mantequilla">
                </div>
                <div class="carousel-item">
                    <img src="https://jumbocolombiaio.vtexassets.com/arquivos/ids/186132/7702085013021-1.jpg?v=637813981197600000" class="carousel-img d-block" alt="Yogurt">
                </div>
                <div class="carousel-item">
                    <img src="https://www.inverpos.com/wp-content/uploads/2020/08/7702552000516.jpg" class="carousel-img d-block" alt="Queso">
                </div>
            </div>
        </div>
          <!--botones para correr las imagenes segun se desee-->
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
          <!--parrafo debajo de las imagenes-->
          <div class="col-md-6">
            <p class="custom-font">Minimarket</p>
          </div>
      </div>
    </div>
      <div class="col-md-6 offset-md-7">
        <br>
        <br>
        <br>
        <br>
        <!--caja de inicio de sesion con su label y botones correspondiente-->

        <div class="caja">
            <div class="text-center">
                <img src="{{ asset('img/logoMinimarket.png') }}" alt="GIF"
                style="width: 200px;" alt="logo">

            </div>

            <form action="{{ route('guardaporfa') }}" method="post">
                @csrf
                @method('POST')
                <p>Por favor, cree su cuenta</p>
                @if(session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
                <div class="form-outline mb-4">
                    <input id="name" name="name" type="text"  class="form-control"placeholder="Ingrese su nombre" />
                    <label required class="form-label" for="form2Example11"></label>

                  <input id="email"name="email" type="email"  class="form-control"placeholder="correo" />
                  <label  required class="form-label" for="form2Example11"></label>



                  <input id="password" name="password" required type="password"  class="form-control" placeholder="contraseña" />
                  <label   required class="form-label" for="form2Example22"></label>
                </div>

                <div class="text-center pt-1 mb-5 pb-1">
                    <button class="btn btn-custom btn-block fa-lg gradient-custom-2 mb-3 w-100" type="submit">Registrarse.</button>
                    <a class="forgot" href="{{ route('login') }}" method="post" >Inicio</a>
                </div>

            </form>
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
