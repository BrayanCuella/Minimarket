<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Minimarket   </title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/create.css') }}">
    <link rel="icon" href="{{asset('img/logominimarket.png')}}" type="image/png" sizes="250x250">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
        <div class="imagen">
         <img src="{{asset('img/logoMinimarket.png')}}" alt="" width="75">
        </div>

    <form method="post" action="{{route('actualizar_producto',$producto->id_producto)}}">
        @csrf
        @method('POST')
        <div class="mb-3">
          <label for="nombre" class="form-label">Producto</label>
          <input type="text" class= "form-control" id="nombre" name="nombre"value="{{$producto->nombre}}">

        </div>
        <div class="mb-3">
          <label for="descripcion" class="form-label">Descripción</label>
          <input type="text" class="form-control" id="descripcion" name="descripcion"value="{{$producto->descripcion}}">
        </div>

          <div class="mb-3">
            <label for="fecha" class="form-label">Fecha de entrega</label>
            <input type="date" class="form-control" id="fecha" name="fecha" value="{{$producto->fecha}}">
          </div>
          <div class="mb-3">
            <label for="ulr" class="form-label">Comentario</label>
            <input type="text" class="form-control" id="ulr" name="ulr" value="{{$producto->ulr}}">
          </div>
          <div class="mb-3">
            <label for="interes" class="form-label">Queja</label>
            <input type="text" class="form-control" id="interes" name="interes" value="{{$producto->interes}}">
          </div>
          <div class="form-floating">
            <select for="seleccionar"class="form-select"  name="seleccionar"id="seleccionar" aria-label="Floating label select example">
              <option selected>Prioridad</option>
              <option value="1">Alta</option>
              <option value="2">Medio</option>
              <option value="3">Baja</option>
            </select>
            <label for="seleccionar">Tipo</label>
          </div>
          <br>
        <button type="submit" class="btn btn-primary">Actualizar</button> <a href="{{route('index')}}"class="btn btn-primary">salir</a>

      </form>

  </body>
</html>
