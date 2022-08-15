<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Taca</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>
<body>
    <?php readfile('menu.html') ?>
    <div class="container">
        <div class="card mt-3">
            <div class="card-header">
                <i class="bi bi-map-fill"></i> Crear estado de la república
            </div>
            <div class="card-body">
                <!-- <pre> -->
                    <?php
                    // print_r($_POST);
                    if (isset($_POST['estado']) && !empty($_POST['estado'])) {
                        $pdo = new \PDO('sqlite:' . __DIR__ . '/bd/alumnos.sqlite');
                        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                        $cmd = $pdo->prepare('insert into estados (estado) values(:estado)');
                        $cmd->bindValue(':estado', $_POST['estado'], PDO::PARAM_STR);
                        if($cmd->execute()) {
                            echo '<div class="alert alert-dark" role="alert">Registro creado.</div>';
                        } else {
                            echo '<div class="alert alert-dark" role="alert">No se pudo procesar.</div>';
                        }
                    } else {
                        echo '<div class="alert alert-dark" role="alert">Parámetros incorrectos.</div>';
                    }
                    ?>
                <!-- </pre> -->
            </div>
        </div>
    </div>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>