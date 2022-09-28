<?php

$id = $_GET['id'];
$id = filter_var($id, FILTER_VALIDATE_INT);

if (!$id) {
    header('location: /');
}

require 'includes/config/database.php';

$db = conectarDB();

$consulta = "SELECT * FROM jobs WHERE id_job = ${id}";

$resultado = mysqli_query($db, $consulta);
$trabajo = mysqli_fetch_assoc($resultado);


if(!$resultado->num_rows) {
    header('location: /');
}

require 'includes/funciones.php';
incluirTemplate('header', $inicio = false);


?>

<main class="contenedor seccion">
    <div class="info-trabajo">
        <h2><?php echo $trabajo['titulo']; ?></h2>
        <h4><?php echo $trabajo['info']; ?></h4>
        <p><?php echo $trabajo['descripcion']; ?></p>
    </div>

 <div class="galeria">  

    <?php
        $i = 1;
        $foto= "foto" . $i;
    ?>
    <?php while ($i < 11 and $trabajo[$foto]) : ?>
                
                
    <?php
        $foto= "foto" . $i;
    ?>
    
            <picture >
                <source srcset="build/img/<?php echo $trabajo[$foto]; ?>.webp" type="image/webp">
                <source srcset="build/img/<?php echo $trabajo[$foto]; ?>.jpg" type="image/jpeg">
                <img loading="lazy" alt="trabajo" >
            </picture>

    <?php 
        $i++;
        $foto= "foto" . $i;
    ?>

    <?php endwhile; ?>
  
    

</div>

<div class="alinear-derecha">
        <a href="trabajos.php" class="boton boton-verde animado-i">
            <span> Regresar </span>
        </a>
    </div>

</main>

<?php
mysqli_close($db);
incluirTemplate('footer');

?>