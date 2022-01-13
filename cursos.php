<!DOCTYPE html>
<html lang="en">
    <head>
        <title>
           Cursos
        </title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css/estilos.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=PT+Serif&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/responsivo.css">

    </head>

    <body>

    <?php
    include('header.php') // En esta página esta lo de las Estructuras de control y el GET
    ?>

        <main> 
        
            <div class="container1">
                <section>
                    <h2 id="centrado" class="title30">
                        Nuestros Cursos e Instructores
                    </h2>
                    <p>Listo para empezar? Ansioso por acertarle a algo?</p>
                    <p>Nuestra Magia Negra ($$) nos permite tener los mejores Instructores de todos los tiempos.</p>
                    <p>Aquí una lista de los Cursos disponibles para su región:</p>
                </section>

                <article id="video2">

                <img src="Imagenes/rambo.jpg">
                <img src="Imagenes/terminator.jpg">

                </article>
            </div>

            <section class="curso_contenido">              
                <h3> Cursos:</h3>

                <ul class="curso_boton">

                <li> <a href="cursos.php?training=bc"> Boot Camp</a></li>
                <li> <a href="cursos.php?training=iaf"> Introduccion a las armas de fuego</a></li>
                <li> <a href="cursos.php?training=dac"> Disparo de Arma Corta</a></li>

                </ul>



            

             <!-- ESTRUCTURAS DE CONTROL -->

                <?php
                $training=null;
                $instructor=null;
                $contenido=null;
                $img=null;

                if (isset($_GET['training']))
                    {

                    switch ($_GET['training']) 
                    {
                    case 'bc':
                    $training = 'Boot Camp';
                    $contenido = 'Entrenamiento Físico y Mental';
                    $instructor = 'Instructor : Leónidas';
                    $img = 'Imagenes/leo.jpg';
                    break;

                    case 'iaf':
                    $training = 'Introducción a las Armas de Fuego';
                    $contenido = 'Historia, Teoría, Limpieza y Ensamble de Armas';
                    $instructor = 'Instructor : John M. Browning';
                    $img = 'Imagenes/JMB.jpg';
                    break;

                    case 'dac':
                    $training = 'Disparo de Arma Corta';
                    $contenido = "Posiciones y Práctica en campo de tiro con armas hasta .357 magnum";
                    $instructor = "Instructor : Jhon Wick";
                    $img = 'Imagenes/JW.jpg';
                    break;
                    }   
                }
                ?>
                


        <div class="training_descripcion">
            <h2> <?php echo $training; ?></h2>
            <h3> <?php echo $instructor; ?></h3>
            <article class="curso_img">
            <img src="<?php echo $img; ?>" />
            <h3> <?php echo $contenido; ?></h3>
        </div>

        </main>
    </body>

</html>
