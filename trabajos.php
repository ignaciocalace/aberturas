<?php 

require 'includes/config/database.php';

$db = conectarDB();
   
$consulta = "SELECT * FROM jobs";

$resultado = mysqli_query($db, $consulta);


require 'includes/funciones.php';
incluirTemplate('header', $inicio = false);
  


    
?>

<h2>Trabajos Realizados</h2>

<?php

include 'includes/templates/jobs.php'

?>



<?php 
incluirTemplate('footer');

?>