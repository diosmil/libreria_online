<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/css.css">
    <script src="https://kit.fontawesome.com/be72fa900c.js" crossorigin="anonymous"></script>
</head>

<nav class="menu navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Menu</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="../index.phpcomponentes">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./componentes/autores.php">Listado de todos los Libros disponible</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/componentes/autores.php">Listados de todos los autores</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/componentes/contactanos.php">Contactanos</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<body>
    <div class="container mt-5">
        <!-- Banner -->
        <div class="jumbotron">
            <h1 class="display-4">Bienvenido a Librería DC</h1>
            <p class="lead">Descubre una amplia selección de libros que inspiran, entretienen y educan.</p>
            <hr class="my-4">
            <p>Explora nuestras colecciones y encuentra tu próxima lectura favorita.</p>
            <a class="btn btn-primary btn-lg" href="#" role="button">Explorar Libros</a>
        </div>

        <!-- Sección de Destacados -->
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="./imagnes/alife.jpg" class="card-img-top" alt="Libro Destacado 1">
                    <div class="card-body">
                        <h5 class="card-title">Título del Libro 1</h5>
                        <p class="card-text">An overview of available database systems with emphasis on common business applications. Illustrated.</p>
                        <a href="#" class="btn btn-primary">Ver Detalles</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="./imagnes/thebussy.jpg" class="card-img-top" alt="Libro Destacado 2">
                    <div class="card-body">
                        <h5 class="card-title">Título del Libro 2</h5>
                        <p class="card-text">New exercise, meditation, and nutritional techniques that can reduce the shock of daily interactions. Popular audience. Sample menus included, exercise video available separately..</p>
                        <a href="#" class="btn btn-primary">Ver Detalles</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="./imagnes/microwave.jpg" class="card-img-top" alt="Libro Destacado 3">
                    <div class="card-body">
                        <h5 class="card-title">Título del Libro 3</h5>
                        <p class="card-text">	Traditional French gourmet recipes adapted for modern microwave cooking.</p>
                        <a href="#" class="btn btn-primary">Ver Detalles</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br><br><br>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

<footer class="pie-pagina ">
        <div class="grupo-1">
            <div class="box">
                <figure>
                    <a href="#">
                        <img src="../imagnes/logo_transparent.png" alt="Libreria DC">
                    </a>
                </figure>
            </div>
            <div class="box">
                <h2>SOBRE NOSOTROS</h2>
                <p>Librería DC va más allá de ser simplemente una librería; es un espacio dedicado a la pasión por la lectura. Ofrecemos una amplia selección de libros que buscan inspirar, entretener y educar.</p>
                <p>Nos esforzamos por crear un ambiente acogedor donde los amantes de los libros pueden explorar historias cautivadoras y descubrir nuevas aventuras. En Librería DC, creemos en el poder transformador de la lectura y compartimos esa convicción con nuestra comunidad.</p>
                <p>Te invitamos a conocer nuestras redes sociales.</p>
            </div>
            <div class="box">
                <h2>SIGUENOS</h2>
                <div class="red-social">
                    <a href="https://www.instagram.com/diosmil/" target="_blank" class="fa-brands fa-instagram fa-beat fa-2xl"></i></a>
                    <a href="https://twitter.com/DiosmilC" target="_blank" class="fa fa-twitter fa-shake fa-2xl"></a>
                    <a href="https://www.youtube.com/channel/UCRlAGxzA7y5_c-gfCtK42lg" target="_blank" class="fa fa-youtube fa-beat fa-2xl"></a>
                </div>
                <div>
                    <br>
                    <h2>CONTACTANOS</h2>
                    <div class="red-social">
                        <a href="http://localhost/Proyecto-Final-Web/libreria_online/componentes/contactanos.php" class="fa fa-comments fa-shake fa-2xl"></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="grupo-2">
            <small>&copy; 2023 <b>Diommil Casso</b> - Todos los Derechos Reservados.</small>
        </div>
    </footer>
</html>
