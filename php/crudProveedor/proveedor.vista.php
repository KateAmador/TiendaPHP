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





    <form method="post" action="proveedor.controlador.php">
        <div class="card-body p-md-5">
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
                    <div class="mb-3">
                        <label for="nombreEmpresa" class="form-label">Empresa</label>
                        <input type="text" class="form-control" id="nombreEmpresa" name="nombreEmpresa" placeholder="Nombre Empresa">
                    </div>
                    <div class="mb-3">
                        <label for="direccion" class="form-label">Direccion</label>
                        <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Direccion">
                    </div>
                    <div class="mb-3">
                        <label for="telefono" class="form-label">Telefono</label>
                        <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Telefono">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                    </div>
                    <div class="mb-3">
                        <label for="asesor" class="form-label">Asesor</label>
                        <input type="text" class="form-control" id="asesor" name="asesor" placeholder="Nombre Asesor">
                    </div>
                    <div class="mb-3">
                        <label for="telAsesor" class="form-label">Telefono Asesor</label>
                        <input type="text" class="form-control" id="telAsesor" name="telAsesor" placeholder="Telefono Asesor">
                    </div>
                    <div class="mb-3">
                        <label for="in" class="form-label">Informacion Adicional</label>
                        <textarea class="form-control" id="in" name="" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <input class="btn btn-primary" type="submit" value="Submit">
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</html>