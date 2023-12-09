<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Creacion de producto</h1>

    <form method="POST" action="{{ route('proveedores.store') }}">

            @csrf
            @method('POST')

            <div class="row">

                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">idproducto</label>
                    <input type="text" class="form-control" name="idproducto" placeholder="Example input placeholder">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Nombre</label>
                    <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Another input placeholder">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Fecha de Registro</label>
                    <input type="text" class="form-control" name="fechaRegistro" id="fechaRegistro" placeholder="Another input placeholder">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">teléfono</label>
                    <input type="text" class="form-control" name="telefono" id="telefono" placeholder="Another input placeholder">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">correo</label>
                    <input type="text" class="form-control" name="correo" id="correo" placeholder="Another input placeholder">
                </div>
                

                <button type="submit" class="btn btn-success">Guardar</button>
                <a class="btn btn-primary" href="{{ route('productoes.inicio') }}">Regresar</a>

            </div>

            </form>

    
</body>
</html>