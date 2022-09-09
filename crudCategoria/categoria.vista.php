<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cliente</title>
</head>

<body>
    <?php include '../php/util/header.php';  ?>

    <h3>Categorias</h3></br>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#guardar">
        Añadir una categoria
    </button>

    <!-- Modal guardar -->
    <form method="POST" action="categoria.controlador.php">
        <div class="modal fade mb" id="guardar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-primary text-white">
                        <h5 class="modal-title" font-family="arial" id="exampleModalLabel">Actalizar Datos</h5>
                    </div>
                    <div class="modal-body">
                        <?php include_once('../conexion.php') ?>

                        <div>
                            <div class="mb-3 col-2">
                                <label for="id_categoria" class="form-label">ID</label>
                                <input type="text" class="form-control" name="id_categoria" id="id_categoria">
                            </div>
                            <div class="row">
                                <div class="mb-3 col-6">
                                    <label for="nombre_categoria" class="form-label">Categoria</label>
                                    <input type="text" class="form-control" name="nombre_categoria" placeholder="nombre categoria" id="nombre_categoria" required>
                                </div>
                                <div class="mb-3 col-6">
                                    <label for="descripcion" class="form-label">descripcion</label>
                                    <input type="text" class="form-control" name="descripcion_categoria" placeholder="descripcion" required>
                                </div>
                            </div>
                        </div>
                        <p><br />
                            <button class="btn btn-primary" type="submit" style="width: 120px; height: 60px;" name="categoria_guardar" value="guardar">Guardar</button>


                        </p>

                    </div>
                </div>
                <div class="contenedor " style="justify-content: center; height: 0vh; margin: 2%; display: flex;">
                </div>
            </div>
        </div>
    </form>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>

    <div class="card">
        <div class="p-4">
            <table class="table table-striped align-middle">
                <thead>
                    <tr class="bg-primary text-white">
                        <th scope="col">id</th>
                        <th scope="col">categoria</th>
                        <th scope="col">descripcion</th>
                        <th scope="col" colspan="2">opciones</th>

                    </tr>
                </thead>
                <tbody>
                    <thead>
                        </tr>
                    </thead>
                    <?php
                    include_once('../conexion.php') ?>
                    <?php
                    $sql = $conn->query("SELECT * FROM categorias");
                    while ($datos = $sql->fetch_object()) {

                        $datoscategoria = $datos->id_categoria . "||" .
                            $datos->nombre_categoria . "||" .
                            $datos->descripcion_categoria;

                    ?>

                        <tr>
                            <th scope="row"><?= $datos->id_categoria; ?></th>
                            <td><?= $datos->nombre_categoria; ?></td>
                            <td><?= $datos->descripcion_categoria; ?></td>

                        <?php } ?>
                </tbody>
            </table>


            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

            <?php include '../php/util/footer.php';  ?>