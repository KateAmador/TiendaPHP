<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <title>Tienda</title>
</head>

<body>
    <?php include '../util/header.php'; ?>
<<<<<<< HEAD
    <form class="card col-12 col-md-6 offset-md-3 mt-5" method="POST" action="proveedor.controlador.php">
        <div class="card-header">
            <h5 class="card-title">Agregar Proveedor</h5>
        </div>
=======

    <form method="post" action="proveedor.controlador.php">
>>>>>>> feature/RRamirez/act-005
        <div class="card-body p-md-5">
            <div class="row justify-content-center">
                <div>
                    <div class="row">
                        <div class="mb-3 col-6">
                            <label for="nombreEmpresa" class="form-label">Empresa</label>
                            <input type="text" class="form-control" id="nombreEmpresa" name="nombreEmpresa" placeholder="Nombre Empresa" required>
                        </div>
                        <div class="mb-3 col-6">
                            <label for="direccion" class="form-label">Direccion</label>
                            <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Direccion" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-6">
                            <label for="telefono" class="form-label">Telefono</label>
                            <input type="number" class="form-control" id="telefono" name="telefono" placeholder="Telefono" required>
                        </div>
                        <div class="mb-3 col-6">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                        </div>

                    </div>
                    <div class="row">
                        <div class="mb-3 col-6">
                            <label for="asesor" class="form-label">Asesor</label>
                            <input type="text" class="form-control" id="asesor" name="asesor" placeholder="Nombre Asesor" required>
                        </div>
                        <div class="mb-3 col-6">
                            <label for="telAsesor" class="form-label">Telefono Asesor</label>
                            <input type="number" class="form-control" id="telAsesor" name="telAsesor" placeholder="Telefono Asesor" required>
                        </div>

                    </div>
                    <div class="mb-3">
                        <label for="in" class="form-label">Informacion Adicional</label>
                        <textarea class="form-control" id="in" name="infoAdicional" rows="3" required></textarea>
                    </div>
                    <div class="mb-2 offset-md-5">
                        <input class="btn btn-primary" name="guardar_proveedor" type="submit" value="Guardar">
                    </div>
                </div>
            </div>
        </div>
    </form>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</html>