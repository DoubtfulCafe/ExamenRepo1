<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Productos</h1>

   

    
    <div>
        <a class="btn btn-primary" href="#">Crear Nuevo Usuario</a>
    </div>


    <table class="table">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Descripciones</th>
            <th scope="col">Precio</th>
            <th scope="col">Stock</th>
            <th scope="col">PagaISV</th>
           

          </tr>
        </thead>
        <tbody>
            @foreach ($productos1 as $item)
            <tr>
                <th scope="row">{{$item->id}}</th>
                <td>{{$item->descripcion}}</td>
                <td>{{$item->precio}}</td>
                <td>{{$item->stock}}</td>
                <td>{{$item->pagaIsv}}</td>
              </tr>
            @endforeach
          
        </tbody>
      </table>        
    
</body>
</html>