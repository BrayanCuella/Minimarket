<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Minimarket</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/index.css') }}">
    <link rel="icon" href="img/logoMinimarket.png" type="image/png" sizes="250x250">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
<!--Encabezado de la pagina-->
  <nav class="navbar navbar-expand-lg bg-body-tertiary"  data-bs-theme="dark">
        <div class="container-fluid">
          <!--Titulo de encabezado junto con su imagen-->
          <a class="navbar-brand" href="contacto">Minimarket<img src="#" alt="" width="50"></a>
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

<!--Titulo de la pagina-->

 <h2>CARRITO<img src="{{asset('img/logoMinimarket.png')}}" alt="" width="80"></h2>


    <!--Tabla para los productos-->
    <table class="table table-bordered border-primary">
        <thead>
          <tr>
            <th class="table-primary"scope="col">#</th>
            <th class="table-primary"scope="col">Producto</th>
            <th class="table-primary"scope="col">Descripción</th>
            <th class="table-primary"scope="col">Fecha de creación</th>
            <th class="table-primary"scope="col">Fecha de entrega</th>
            <th class="table-primary"scope="col">Comentario</th>
            <th class="table-primary"scope="col">Quejas</th>
            <th class="table-primary"scope="col">Prioridad</th>

            <th class="table-primary"scope="col">Acciones</th>



          </tr>
        </thead>
        <tbody>
           <!-- Ciclo para recorrer los elementos de la variable $productos -->
            @foreach ($productos as $producto)
                <tr>
                    <th class="table-primary"scope="row">{{$loop->iteration}}</th>
                    <!--Muestra el nombre del producto-->
                    <td class="table-dark">{{$producto->nombre}}</td>
                    <!--Muestra la descripcion del producto-->
                    <td class="table-dark">{{$producto->descripcion}}</td>
                    <!--Fecha de creacion del producto-->
                    <td class="table-dark">{{$producto->created_at}}</td>
                    <!--Muestra la fecha del producto-->
                    <td class="table-dark">{{$producto->fecha}}</td>
                    <!--Muestra la url del producto-->
                    <ah ref="ulr">
                    <td class="table-dark">{{$producto->ulr}}</td>
                    </a>
                    <!--Muestra la empresa interesada del producto-->
                    <td class="table-dark">{{$producto->interes}}</td>
                    <td class="table-dark">{{$producto->seleccionar}}</td>




                    <td class="table-primary">
                        <!--Enlace para editar el producto-->
                        <a href="{{route('editar_producto',$producto->id_producto)}}"class="btn btn-info">editar</a>
                     <!--Enlace para eliminar el producto-->
                        <a href="{{route('eliminar_producto',$producto->id_producto)}}"class="btn btn-danger"type="submit"onclick="return confirm('Seguro deseas eliminar este registro?')">eliminar</a>

                    </td>
                  </tr>
            @endforeach

        </tbody>
      </table>
      <!--Enlace para añadir un nuevo producto-->                               <!--Salir de las asesorias-->
      <a href="{{route('crear_producto')}}"class="btn btn-success">añadir</a>  <a href="{{route('contacto')}}"class="btn btn-success">salir</a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
