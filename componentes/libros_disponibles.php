<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar Libros Online</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/css.css">
    <script src="https://kit.fontawesome.com/be72fa900c.js" crossorigin="anonymous"></script>
</head>

<?php
include "./menu.php";
?>

<body>
    <h1 class="text-center">Libros disponibles</h1>
            <div class="col-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">titulo</th>
                            <th scope="col">id_pub</th>
                            <th scope="col">tipo</th>
                            <th scope="col">precio</th>
                            <th scope="col">avance</th>
                            <th scope="col">total_ventas</th>
                            <th scope="col">notas</th>
                            <th scope="col">fecha_pub</th>
                            <th scope="col">contrato</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include "../modelo/conecxion.php";

                        $sql = "SELECT * FROM titulos";
                        $stmt = $conexion->query($sql);

                        while ($datos = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
                            <tr>
                                <th scope="row"><?= $datos['id_titulo']; ?></th>
                                <td><?= $datos['titulo']; ?></td>
                                <td><?= $datos['id_pub']; ?></td>
                                <td><?= $datos['tipo']; ?></td>
                                <td><?= $datos['precio']; ?></td>
                                <td><?= $datos['avance']; ?></td>
                                <td><?= $datos['total_ventas']; ?></td>
                                <td><?= $datos['notas']; ?></td>
                                <td><?= $datos['fecha_pub']; ?></td>
                                <td><?= $datos['contrato']; ?></td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-warning"> <i
                                            class="fa-solid fa-pen-to-square"></i></a>
                                    <a href="#" class="btn btn-sm btn-danger"> <i class="fa-solid fa-trash"></i></a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>
<?php
include "../componentes/footer.php";
?>
</html>
