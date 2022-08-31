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

    <form class="card col-12 col-md-6 offset-md-3 mt-5" method="POST" action="entrada.controlador.php">
        <div class="card-header">
            <h5 class="card-title">Agregar Entrada</h5>
        </div>


    <form method="post" action="entrada.controlador.php">

        <div class="card-body p-md-5">
            <div class="row justify-content-center">
                <div>
                        <div class="mb-3 col-6">
                        <label for="idProducto" class="form-label">Producto</label>
                        <select class="form-select" name="idProducto" aria-label="Default select example">
                            <option selected>Selecciona el Producto</option>
                            <option value="1">Cartulina</option>
                            <option value="2">Marcadores</option>
                            <option value="3">Resma Papel</option>
                        </select>
                    </div>
                    <div class="mb-3 col-6">
                        <label for="nombreProveedor" class="form-label">Proveedor</label>
                        <select class="form-select" name="nombreProveedor" aria-label="Default select example">
                            <option selected>Selecciona el Proveedor</option>
                            <option value="1">Exito</option>
                            <option value="2">Unica</option>
                            <option value="3">Tulua</option>
                        </select>
                    </div>

                        <div class="mb-3 col-6">
                            <label for="cantidad" class="form-label">Cantidad</label>
                            <input type="number" class="form-control" id="cantidad" name="cantidad" placeholder="Cantidad" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-6">
                            <label for="costo" class="form-label">Costo</label>
                            <input type="number" class="form-control" id="costo" name="costo" placeholder="Costo" required>
                        </div>
                        <div class="mb-3 col-6">
                            <label for="total" class="form-label">Total</label>
                            <input type="number" class="form-control" id="total" name="total" placeholder="Total" required>
                        </div>

                    </div>
                    <div class="row">
                        <div class="mb-3 col-6">
                            <label for="fecha" class="form-label">Fecha</label>
                            <input type="date" class="form-control" id="fecha" name="afecha placeholder="Fecha" required>

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