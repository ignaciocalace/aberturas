<?php
require 'includes/config/database.php';

$db = conectarDB();

$consulta = "SELECT * FROM jobs LIMIT 3";

$resultado = mysqli_query($db, $consulta);

require 'includes/funciones.php';
incluirTemplate('header', $inicio = true);
?>


<main class="contenedor seccion">
    <h1>Más Sobre Nosotros</h1>
    <div class="iconos-nosotros">
        <div class="icono">
            <img src="build/img/medal.svg" alt="icono medalla">
            <h3>Calidad</h3>
            <p>Nos caracterizamos por brindar un servicio de primer nivel. Para entregarte el mejor producto posible acorde a tus necesecidades.</p>
        </div>
        <div class="icono">
            <img src="build/img/clock.svg" alt="icono reloj">
            <h3>Tiempo</h3>
            <p>Nuestros servicios y productos seran entregados en tiempo
                y forma según lo acordado previamente con nuestro cliente.</p>
        </div>
        <div class="icono">
            <img src="build/img/guarantee.svg" alt="icono garantia">
            <h3>Garantía</h3>
            <p>Nuestro trabajo cuenta con garantía frente a cualquier incoveniente provocado por algún desperfecto de fabricación.</p>
        </div>
    </div>
</main>

<section class="seccion contenedor">
    <!-- Pasarlo a base de datos a futuro -->
    <h2>Trabajos Realizados</h2>

    <?php

    include 'includes/templates/jobs.php';

    ?>
    <div class="alinear-derecha">
        <a href="trabajos.php" class="boton boton-verde animado">
            <span> Ver más </span>
        </a>
    </div>
</section>

<section class="imagen-contacto">
    <h2>Tus proyectos son posibles</h2>
    <!-- <p>Completá el formulario y nos contactaremos contigo a la brevedad</p> -->
    <p>Contactanos via E-mail, Whatsapp o Telefonicamente</p>
    <a href="contacto.php" class="boton-amarillo-block animado">
        <!-- <span> Contáctanos </span> -->
        <span>Más Información</span>
    </a>
</section>

<?php
incluirTemplate('footer');

?>