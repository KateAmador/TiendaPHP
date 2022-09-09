<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cliente</title>
</head>

<body>
    <?php include '../util/header.php';  ?>

    <!-- Modal actualizar -->
    <form method="POST" action="cliente.controlador.php">
        <div class="modal fade" id="editar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-secondary text-white">
                        <h5 class="modal-title" id="exampleModalLabel">Actalizar Datos</h5>
                    </div>
                    <div class="modal-body">
                        <div>
                            <div class="mb-3 col-2">
                                <label for="id_categoria" class="form-label">ID</label>
                                <input type="text" class="form-control" id="id_categoria" name="id_categoria" readonly onmousedown="return false;">
                            </div>
                            <div class="row">
                                <div class="mb-3 col-6">
                                    <label for="nombre_categoria" class="form-label">Nombre</label>
                                    <input type="text" class="form-control" id="nombre_categoria" name="nombre_categoria" placeholder="Categoria" required>
                                </div>
                                <div class="mb-3 col-6">
                                    <label for="descripcion_categoria" class="form-label">descripcion</label>
                                    <input type="text" class="form-control" id="descripcion_categoria" name="descripcion_categoria" placeholder="nombre descripcion" required>
                                </div>


                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <input class="btn btn-secondary" name="actualizar_cliente" type="submit" value="guardar">
                    </div>
                </div>
            </div>
        </div>
    </form>


    <h3>Categorias</h3></br>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#guardar">
        Añadir una categoria
    </button>


    <!-- Modal guardar -->
    <form method="POST" action="categoria.controlador.php">
        <div class="modal fade mb" id="guardar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-secondary text-white">
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
                            <button class="btn btn-secondary" type="submit" style="width: 120px; height: 60px;" name="categoria_guardar" value="guardar">Guardar</button>


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
                    <tr class="bg-secondary text-white">
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

                            <td><a class="btn btn-succes btn-primary " data-bs-toggle="modal" data-bs-target="#editar">
                                    <i class="fa-solid fa-pen" onclick="agregarForm('<?php echo $datoscategoria ?>');"></i></a></td>


                            <!-- boton eliminar -->
                            <td> <a href="cliente.vista.php?id=<?= $datos->id_categoria ?>" class="btn btn-small btn-danger" name="estado_cliente" type="submit" data-bs-target="#eliminar"><i class="fa-solid fa-trash"></i></a></td>

                        <?php } ?>
                </tbody>
            </table>


            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

            <?php include '../util/footer.php';  ?>