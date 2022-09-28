<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aberturas Ferrero</title>
    <link rel="stylesheet" href="build/css/app.css">
</head>

<body>
    <header class="header <?php echo $inicio  ? 'inicio' : ''; ?>">
        <div class="contenedor contenido-header">
            <div class="barra">
                <a href="/aberturas">
                    <img src="src/img/Logo1.svg" alt="Logo Empresa">
                </a>
                <div class="animacion-menu">
                    <img src="build/img/barras.svg" alt="Barras Menú">
                </div>
                <nav class="navegacion">
                    <a href="trabajos.php">Trabajos</a>
                    <a href="info.php">Información</a>
                    <a href="nosotros.php">Nosotros</a>
                    <a href="contacto.php">Contacto</a>
                </nav>


            </div> <!-- Barra -->
            <div>
                <?php echo $inicio ? "<h1>Carpinteria de aluminio y herreria</h1>" : ''; ?>
            </div>
        </div>
    </header>