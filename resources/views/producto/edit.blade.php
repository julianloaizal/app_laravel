<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
        <h4>Editar Producto</h4>
        <div class="row">
            <div class="col-xl-12">
                <form action="{{route('producto.update', $producto->nombre)}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" name="nombre" required maxlength="24" value="{{$producto->nombre}}">
                    </div>
                    <div class="form-group">
                        <label for="talla">Talla</label>
                        <input type="text" class="form-control" name="talla" required maxlength="24" value="{{$producto->talla}}">
                    </div>
                    <div class="form-group">
                        <label for="marca_producto">Marca de Producto</label>
                        <input type="text" class="form-control" name="marca_producto" required maxlength="24" value="{{$producto->marca_producto}}"> 
                    </div>
                    <div class="form-group">
                        <label for="cantidad_inventario">Cantidad de inventario</label>
                        <input type="text" class="form-control" name="cantidad_inventario" required maxlength="24" value="{{$producto->cantidad_inventario}}">
                    </div>
                    <div class="form-group">
                        <label for="fecha_embarque">Fecha de embarque</label>
                        <input type="text" class="form-control" name="fecha_embarque" required maxlength="24" value="{{$producto->fecha_embarque}}">
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