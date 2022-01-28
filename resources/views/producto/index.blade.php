<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión Productos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<div class="container">
        <h4>Gestión de Productos</h4>
        <div class="row">
            <div class="col-lx-12">
                <div class="table-responsive">
                    <table class="table table-striped">
                          <thead>
                              <tr>
                                  <th>Nombre</th>
                                  <th>Talla</th>
                                  <th>Marca producto</th>
                                  <th>Cantidad inventario</th>
                                  <th>Fecha embarque</th>                                   
                                  <th>opciones</th>
                              </tr>

                          </thead>
                          <tbody>
                              @foreach ($productos as $producto)
                              <tr>
                                  <th>{{$producto->nombre}}</th>
                                  <th>{{$producto->talla}}</th>
                                  <th>{{$producto->marca_producto}}</th>
                                  <th>{{$producto->cantidad_inventario}}</th>
                                  <th>{{$producto->fecha_embarque}}</th>
                                  <th>Editar | Eliminar</th>
                              </tr>
                              @endforeach

                          </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div> 
</body>
</html>