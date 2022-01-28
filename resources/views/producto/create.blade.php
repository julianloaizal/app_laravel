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
        <h4>Nuevo Producto</h4>
        <div class="row">
            <div class="col-xl-12">
                <form action="{{route('producto.store')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" name="nombre" required maxlength="24">
                    </div>
                    <div class="form-group">
                        <label for="talla">Talla</label>
                        <input type="text" class="form-control" name="talla" required maxlength="24">
                    </div>
                    <div class="form-group">
                        <label for="marca_producto">Marca de Producto</label>
                        <input type="text" class="form-control" name="marca_producto" required maxlength="24">
                    </div>
                    <div class="form-group">
                        <label for="cantidad_inventario">Cantidad de inventario</label>
                        <input type="text" class="form-control" name="cantidad_inventario" required maxlength="24">
                    </div>
                    <div class="form-group">
                        <label for="fecha_embarque">Fecha de embarque</label>
                        <input type="text" class="form-control" name="fecha_embarque" required maxlength="24">
                    </div>
                    
                    <div class="form group">
                        <input type="submit" class=" btn btn-primary" value="Guardar">
                        <input type="reset" class=" btn btn-default" value="Cancelar">
                        <a href="javascript:history.back()">Ir al listado</a>
                    </div>
                </form>

            </div>
        </div>
    </div>
</body>
</html>