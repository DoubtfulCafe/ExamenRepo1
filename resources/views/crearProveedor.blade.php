<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Creacion de Proveedor</h1>

    <form method="POST" action="{{ route('usuario.store') }}">

            @csrf
            @method('POST')

            <div class="row">

                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Usuario</label>
                    <input type="text" class="form-control" name="usuario" placeholder="Example input placeholder">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Nombre</label>
                    <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Another input placeholder">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Apellido</label>
                    <input type="text" class="form-control" name="apellido" id="apellido" placeholder="Another input placeholder">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Correo</label>
                    <input type="text" class="form-control" name="correo" id="correo" placeholder="Another input placeholder">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Telefono</label>
                    <input type="text" class="form-control" name="telefono" id="telefono" placeholder="Another input placeholder">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Another input placeholder">
                </div>

                <button type="submit" class="btn btn-success">Guardar</button>
                <a class="btn btn-primary" href="{{ route('usuario.inicio') }}">Regresar</a>

            </div>

            </form>

    
</body>
</html>