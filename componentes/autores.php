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

<body class="body">
    <?php
        include "./menu.php";
    ?>

    <h1 class="text-center">Autores </h1>

    <div class="table col-8">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">apellido</th>
                    <th scope="col">nombre</th>
                    <th scope="col">telefono</th>
                    <th scope="col">direccion</th>
                    <th scope="col">ciudad</th>
                    <th scope="col">estado</th>
                    <th scope="col">pais</th>
                    <th scope="col">codigo_postal</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include "../modelo/conecxion.php";

                    $sql = "SELECT * FROM autores";
                    $stmt = $conexion->query($sql);

                    while ($datos = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
                        <tr>
                            <th scope="row"><?= $datos['id_autor']; ?></th>
                            <td><?= $datos['apellido']; ?></td>
                            <td><?= $datos['nombre']; ?></td>
                            <td><?= $datos['telefono']; ?></td>
                            <td><?= $datos['direccion']; ?></td>
                            <td><?= $datos['ciudad']; ?></td>
                            <td><?= $datos['estado']; ?></td>
                            <td><?= $datos['pais']; ?></td>
                            <td><?= $datos['cod_postal']; ?></td>
                            <td>
                                <a href="#" class="btn btn-sm btn-warning"> <i class="fa-solid fa-pen-to-square"></i></a>
                                <a href="#" class="btn btn-sm btn-danger"> <i class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>

    <?php
        include "./footer.php";
    ?>
</body>

</html>
