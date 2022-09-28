<?php
require 'includes/funciones.php';
incluirTemplate('header', $inicio = false);
?>

<main class="contenedor seccion">
    <h1>Conocé sobre nosotros</h1>
    <div class="contenido-nosotros">
        <div class="imagen">
            <picture>
                <source srcset="/aberturas/build/img/DSC_8236.webp" type="image/webp">
                <source srcset="/aberturas/build/img/DSC_8236.jpg" type="image/jpeg">
                <img loading="lazy" alt="Imagen Nosotros">
            </picture>
        </div>
        <div class="texto-nosotros">
            <blockquote>
                Contamos con más de 30 años de experiencia
            </blockquote>

            <p>Somos una empresa especializada en trabajos a medida en hierro y aluminio, tanto para el hogar como para la industria, alcanzando todos los rincones del país.</p>

            <p>Nuestros procesos de fabricacion tanto como los materiales empleados son de primera calidad, asesoramos a nuestros clientes en sus proyectos acorde a su presupuesto y necesidades.</p>

            
        </div>
    </div>
</main>



<?php incluirTemplate('footer');
