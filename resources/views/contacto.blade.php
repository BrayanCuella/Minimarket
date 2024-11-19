<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TRES AGENCIA</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="icon" img src="{{ asset('img/logoMinimarket.png') }}" alt="" width="50">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>


<!--encabezado de la pagina-->
<nav class="navbar navbar-expand-lg bg-body-tertiary"  data-bs-theme="dark">
        <div class="container-fluid">
          <!--titulo de encabezado junto con su imagen-->
          <a class="navbar-brand" href="#">MINIMARKET<img src="{{ asset('img/logoMinimarket.pn') }}" alt="" width="50"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          @if (Route::has('login'))
          <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
              @auth
              <!--Enlace que direcciona al login de la pagina al darle el boton iniciar sesion-->
              <a href="{{ route('login') }}" class="btn btn-custom btn-block fa-lg gradient-custom">Iniciar Sesion</a>
              <!--Enlace que direcciona al Register de la pagina al darle el boton de registrarse-->
              @if (Route::has('register'))
              <a href="{{ route('register') }}" class="btn btn-custom btn-block fa-lg gradient-custom">Registrarse</a>

          @endif
              @else
                  @if (Route::has('register'))
                  <a href="{{ route('login') }}" class="btn btn-custom btn-block fa-lg gradient-custom">Iniciar Sesion</a>
                      <a href="{{ route('register') }}" class="btn btn-custom btn-block fa-lg gradient-custom">Register</a>

                  @endif
              @endauth
          </div>
      @endif

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Acerca de minimarket</a>
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

<!--titulo de la pagina con imagen-->
<h1 class="text-white">MINIMARKET <img src="{{ asset('img/logoMinimarket.png') }}" alt="" width="100"></h1>

<!--Texto y titulos que podemos leer dentro de la pagina-->
<div class="row">
    <!--para que se muestre en la parte izquierda(md)-->
    <div class="col-md-6 offset-md-1">
        <h2 class="texto-blanco">Nos apasiona lo que hacemos</h2>
        <br>
            <p class="texto-blanco">Nuestro objetivo es crear un puesto visual única para que puedas comprar de manera sencilla.</p>
            <p class="texto-blanco"> El objetivo de nuestro minimarket es brindar a los clientes una experiencia de compra rápida, cómoda y accesible, ofreciendo una amplia gama de productos esenciales de alta calidad. Nos enfocamos en satisfacer las necesidades diarias de nuestros clientes, proporcionando un servicio eficiente y un ambiente amigable, tanto en nuestra tienda física como en línea.</p>
            <p class="texto-blanco">Ofrecemos opciones de compra en línea para facilitar el acceso a nuestros productos desde cualquier lugar.</p>

    </div>
    <!--para que se muestre en la parte derecha (md)-->
    <div class="col-md-6 offset-md-5 text-center">
        <br>
        <h2 class="texto-blanco">we are passionate
            for what we do.</h2>
            <br>
            <p class="texto-blanco">Our goal is to create a unique visual display so you can shop easily. </p>
            <p class="texto-blanco">The objective of our minimarket is to provide customers with a fast, convenient, and accessible shopping experience by offering a wide range of high-quality essential products. We focus on meeting the daily needs of our customers by delivering efficient service and a friendly atmosphere, both in our physical store and online.</p>
            <p class="texto-blanco">We offer online purchasing options to make it easy to access our products from anywhere.</p>

    </div>

</div>

<!--imagen de abajo-->
<!-- Pie de página -->
<footer class="bg-dark text-white pt-4 pb-2">
    <div class="container">
        <div class="row">
            <!-- Información de la tienda -->
            <div class="col-md-4 mb-3">
                <h5>Minimarket</h5>
                <p>Tu tienda de conveniencia para productos esenciales. Ofrecemos calidad y comodidad para tu día a día.</p>
            </div>

            <!-- Enlaces rápidos -->
            <div class="col-md-4 mb-3">
                <h5>Enlaces rápidos</h5>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-white">Acerca de Nosotros</a></li>
                    <li><a href="#" class="text-white">Términos y Condiciones</a></li>
                    <li><a href="#" class="text-white">Política de Privacidad</a></li>
                    <li><a href="#" class="text-white">Contáctanos</a></li>
                </ul>
            </div>

            <!-- Redes Sociales -->
            <div class="col-md-4 mb-3">
                <h5>Síguenos</h5>
                <a href="https://www.instagram.com/alexit030/" target="_blank">
                    <img src="https://cdn-icons-png.flaticon.com/512/174/174855.png" alt="Instagram" width="30">
                </a>
                <a href="mailto:tresagenciademediosdigitales@gmail.com">
                    <img src="https://cdn-icons-png.flaticon.com/512/732/732200.png" alt="Correo" width="30">
                </a>
                <a href="https://www.facebook.com" target="_blank">
                    <img src="https://cdn-icons-png.flaticon.com/512/733/733547.png" alt="Facebook" width="30">
                </a>
            </div>
        </div>

        <!-- Copyright -->
        <div class="text-center pt-3">
            <p>&copy; 2024 Minimarket. Todos los derechos reservados.</p>
        </div>
    </div>
</footer>

      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
      integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
      crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
      integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
      crossorigin="anonymous"></script>

</body>
</html>
