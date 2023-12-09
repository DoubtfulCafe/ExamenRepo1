<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Creacion de Empleado</h1>
    <form method="POST" action="{{ route('empleado.store') }}">

            @csrf
            @method('POST')

            <div class="row">

                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">idprestamo</label>
                    <input type="text" class="form-control" name="idprestamo" placeholder="Example input placeholder">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Nombre</label>
                    <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Another input placeholder">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">apellido</label>
                    <input type="text" class="form-control" name="apellido" id="apellido" placeholder="Another input placeholder">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">fechaIngreso</label>
                    <input type="text" class="form-control" name="fechaIngreso" id="fechaIngreso" placeholder="Another input placeholder">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">correo</label>
                    <input type="text" class="form-control" name="correo" id="correo" placeholder="Another input placeholder">
                </div>
                

                <button type="submit" class="btn btn-success">Guardar</button>
                <a class="btn btn-primary" href="{{ route('empleado.inicio') }}">Regresar</a>

            </div>

            </form>

</body>
</html>