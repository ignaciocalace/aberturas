<?php
require 'includes/funciones.php';
incluirTemplate('header', $inicio = false);
?>
<main class="contenedor seccion">

    <div class="head-contacto">
        <div class="head-texto">
            <h1>Contacto</h1>
        </div>
    </div>

    <div class="contenedor seccion">
        
    <div class="iconos-contacto">
        <div class="icono-contacto">
            <img src="build/img/email.svg" alt="icono email">
            <a class="boton boton-amarillo" href="mailto:aberturas@hotmail.com">Vía Email</a>
        </div>
        <div class="icono-contacto">
            <img src="build/img/phone.svg" alt="icono telefono">
            <a class="boton boton-amarillo" href="tel:+59894285654">Vía Telefónica</a>
        </div>
        <div class="icono-contacto">
            <img src="build/img/wpp.svg" alt="icono Whatsapp">
            <a class="boton boton-amarillo" href="https://wa.me/+59894285654?">Vía Whatsapp</a>
        </div>
    </div>
    <div class="contenedor contenido-centrado centrar-texto">
    <h4>Nuestro horario de atención es de <span>Lunes a Viernes de 8hs a 17hs</span></h4>
    <p>Lomas de Solymar, Canelones, Uruguay.</p>
</div>
</div>
    
    

    
    <!-- <h2>Llene el formulario de contacto</h2>

    <form action="" class="formulario">


        <fieldset>
            <legend>Forma de contacto</legend>

            <label for="nombre">Nombre</label>
            <input type="text" placeholder="Su nombre" id="nombre">

            <label for="telefono">Celular</label>
            <input type="tel" placeholder="Su celular" id="telefono">

            <label for="email">E-mail</label>
            <input type="email" placeholder="Su email" id="email">

            <p>Cómo desea ser contactado</p>
            <div class="forma-contacto">

                <label for="contactar-telefono">Teléfono</label>
                <input name="contacto" type="radio" value="telefono" id="contactar-telefono">
                <label for="contactar-telefono">E-mail</label>
                <input name="contacto" type="radio" value="telefono" id="contactar-telefono">

            </div>
        </fieldset>

        <fieldset>
            <legend>Información</legend>

<label for="opciones">Departamento donde se realizará el trabajo</label>
<select name="" id="opciones">
<option value="" disabled selected>-- Seleccionar --</option>
    <option value="Artigas">Artigas</option>
    <option value="Canelones">Canelones</option>
    <option value="Cerro Largo">Cerro Largo</option>
    <option value="Colonia">Colonia</option>
    <option value="Durazno">Durazno</option>
    <option value="Flores">Flores</option>
    <option value="Florida">Florida</option>
    <option value="Lavalleja">Lavalleja</option>
    <option value="Maldonado">Maldonado</option>
    <option value="Montevideo">Montevideo</option>
    <option value="Paysandú">Paysandú</option>
    <option value="Río Negro">Río Negro</option>
    <option value="Rivera">Rivera</option>
    <option value="Rocha">Rocha</option>
    <option value="Salto">Salto</option>
    <option value="San José">San José</option>
    <option value="Soriano">Soriano</option>
    <option value="Tacuarembó">Tacuarembó</option>
    <option value="Treinta y Tres">Treinta y Tres</option>
</select>

            <label for="mensaje">Mensaje</label>
            <textarea name="" id="mensaje" cols="30" rows="10"></textarea>
      
        </fieldset>

        <input type="submit" class="boton boton-verde animado" value="Enviar">

    </form> -->
</main>




<?php incluirTemplate('footer');
