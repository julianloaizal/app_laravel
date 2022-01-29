<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="widtd=device-widtd, initial-scale=1.0">
    <title>Gestión Marcas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h4>Gestión de Marcas</h4>
        <div class="row">
            <div class="col-xl-12">
                <form action="{{route('marca.index')}}" metdod="get">
                    <div class="form-row">
                        <div class="col-sm-4 my-1">
                            <input type="text" class="form-control" name="texto" value="{{$texto}}">
                        </div>
                        <div class="col-auto my-1">
                            <input type="submit" class="btn btn-primary" value="Buscar">
                        </div>
                        <div class="col-auto my-1">
                            <a href="{{route('marca.create')}}" class="btn btn-success">Nuevo</a>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lx-12">
                <div class="table-responsive">
                    <table class="table table-striped">
                          <tdead>
                              <tr>                                  
                                  <th>id</th>
                                  <th>Nombre</th>
                                  <th>opciones</th>
                              </tr>

                          </thead>
                          <tbody>                              
                            @if(count($marcas)<=0)
                              <tr>
                                  <td colspan="3">No hay resultados</td>
                              </tr>
                              @else
                              @foreach($marcas as $marca)
                              <tr>                                  
                                  <td>{{$marca->id}}</td>
                                  <td>{{$marca->nombre}}</td>
                                  <td>
                                      <a href="{{route('marca.edit', $marca->id)}}" class="btn btn-warning btn-sm">Editar</a>
                                      <!-- Button trigger modal -->
                                      <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modal-delete-{{$marca->id}}">
                                        Eliminar
                                      </button>
                                     

                                  </td>
                              </tr>
                              @include('marca.delete')
                              @endforeach
                              @endif

                          </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    
</body>

</html>