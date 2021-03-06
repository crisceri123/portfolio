<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap-5.2.0-beta1-dist/css/bootstrap.min.css">
    <script src="css/bootstrap-5.2.0-beta1-dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/stilos.css">
    <title>Contacto</title>
</head>

<body id="contacto">
    <header>
        <nav class="navbar navbar-expand-md mb-4 ">
            <div class="container-fluid col-12">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item ">
                            <a class="nav-link py-1 px-3 px-sm-4" href="index.php">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link py-1 px-3 px-sm-4" href="sobre=mi.php">Sobre mi</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link py-1 px-3 px-sm-4" href="proyectos.php">Proyectos</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link active py-1 px-3 px-sm-4" href="contacto.php">Contacto</a>
                        </li>
                    </ul>
                    <div class="d-flex">
                        <a class="btn btn-rojo " ><i class="fa-solid fa-file-arrow-down"></i> Descargar mi CV </a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main class="container">
        <div class="row">
            <div class="col-12 pt-3 pb-5">
                <h1>contacto</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-6">
                <p>Te invito a que me contactes con un msg o bien por whatsapp</p>
            </div>
            <div class="col-12 col-sm-6">
                <form action="" method="post">
                    <div class="mb-3">
                        <input type="text" name="txtNombre" id="txtNombre" placeholder="Nombre" class="form-control">
                    </div>
                    <div class="mb-3">
                        <input type="email" name="txtCorreo" id="txtCorreo" placeholder="Correo electronico"
                            class="form-control">
                    </div>
                    <div class="mb-3">
                        <input type="tel" name="txtTelefono" id="txtTelefono" placeholder="Telefono"
                            class="form-control">
                    </div>
                    <div class="mb-3">
                        <textarea name="txtMensaje" id="txtMensaje" placeholder="Escribe aqui tu mensaje"
                            class="form-control"></textarea>
                    </div>
                    <div>
                        <button type="submit" id="btnEnviar" name="btnEnviar" class="btn btn-blanco">Enviar</button>
                    </div>
                </form>
            </div>
        </div>

    </main>
    <footer class="container mt-5">
        <div class="row">
            <div class="col-3">
                <i class="fa-brands fa-github"></i>
                <i class="fa-brands fa-linkedin"></i>
            </div>
            <div class="col-3">Sponsor <a href="https://depcsuite.com">DePC Suite</a></div>
            <div class="col-3"> <a href="mailto:Cerillano@gmail.com">Cerillano@gmail.com</a></div>
        </div>
    </footer>
    <div class="whatsapp pt-2 pb-4 px-3">
        <a href="https://api.whatsapp.com/send?phone=2236952336"><i class="fa-brands fa-whatsapp"></i></a>
    </div>
</body>

</html>