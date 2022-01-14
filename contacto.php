<!DOCTYPE html>
<html lang="en">
    <head>
        <title>
           Contacto
        </title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css/estilos.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=PT+Serif&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/responsivo.css">

    </head>
    <body>
        <!-- Aqui esta lo del funcionalidad que interactúe con la base de datos, utilizando el método POST -->
    <?php
    include('header.php')
    ?>
        <main>
            <h1>Contacto</h1>
            <h3>Si tiene alguna duda o quiere contactarnos por favor hagalo aquí</h3>
            <section class=contacto_contenido>
                <form action="enviar_consulta.php" method="POST">
                    <input type="text" name="nombre" placeholder="Nombre/s" class="contacto_input" required><br>
                    <input type="text" name="apellido" placeholder="Apellido" class="contacto_input" required><br>
                    <input type="email" name="email" placeholder="Email" class="contacto_input" required><br>
                    <textarea name="mensaje" placeholder="Escriba aquí su mensaje" id="" cols="30" rows="10" required></textarea><br>
                    <input type="submit" value="Enviar" class="contacto_btn">
                    


                </form>
            </section>
        </main>

    
    </body>
</html>