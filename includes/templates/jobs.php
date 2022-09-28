<div class="contenedor-trabajos">

    <?php while ($trabajo = mysqli_fetch_assoc($resultado)) : ?>

    <div class="trabajo">
        <picture class="overlay">
            <source srcset="build/img/<?php echo $trabajo['foto1']; ?>.webp" type="image/webp">
            <source srcset="build/img/<?php echo $trabajo['foto1']; ?>.jpg" type="image/jpeg">
            <img loading="lazy" alt="trabajo">
        </picture>

        <div class="contenido-trabajo">
            <h3><?php echo $trabajo['titulo']; ?></h3>
            <p><?php echo $trabajo['info']; ?></p>

        </div>
        <a href="trabajo.php?id=<?php echo $trabajo['id_job']; ?>" class="boton boton-amarillo-block">
            Ver trabajo
        </a>
    </div>

    <?php endwhile; ?>

</div>

<?php
mysqli_close($db);

?>