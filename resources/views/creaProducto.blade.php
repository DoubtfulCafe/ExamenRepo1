<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Creacion de Producto</h1>
    <form method="POST" action="{{ route('producto.store') }}">

            @csrf
            @method('POST')

            <div class="row">

                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">descripcion</label>
                    <input type="text" class="form-control" name="descripcion" placeholder="Example input placeholder">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">precio</label>
                    <input type="text" class="form-control" name="precio" id="precio" placeholder="Another input placeholder">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">stock</label>
                    <input type="text" class="form-control" name="stock" id="stock" placeholder="Another input placeholder">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">pagaIsv</label>
                    <input type="text" class="form-control" name="pagaIsv" id="pagaIsv" placeholder="Another input placeholder">
                </div>
               
                

                <button type="submit" class="btn btn-success">Guardar</button>
                <a class="btn btn-primary" href="{{ route('producto.inicio') }}">Regresar</a>

            </div>

            </form>

</body>
</html>