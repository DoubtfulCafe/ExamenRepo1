<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Proveedores</h1>

    

    <div>
        <a class="btn btn-primary" href="#">Crear Nuevo Proveedor</a>
    </div>


    <table class="table">
        <thead>
          <tr>
            <th scope="col">IdProveedores</th>
            <th scope="col">Nombre</th>
            <th scope="col">Fecha de Registro</th>
            <th scope="col">Telefonos</th>
            <th scope="col">correos</th>
           

          </tr>
        </thead>
        <tbody>
            @foreach ($Proveedores1 as $item)
            <tr>
                <th scope="row">{{$item->idproveedor}}</th>
                <td>{{$item->nombre}}</td>
                <td>{{$item->fechaRegistro}}</td>
                <td>{{$item->telefono}}</td>
                <td>{{$item->correo}}</td>
              </tr>
            @endforeach
          
        </tbody>
      </table>        
</body>
</html>