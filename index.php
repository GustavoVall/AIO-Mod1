<!DOCTYPE html>
<html>
    <head>
        <title>
            STOP MISSING AND START KILLING
        </title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="estilos.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=PT+Serif&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="responsivo.css">

    </head>
    <body>
        <header>
            <nav>
                <ul>
                <li class="boton">
                    <a href="index.php">HOME</a>
                </li>
                <li class="boton">
                    <a href="queesloquehago.html">PROXIMAMENTE</a>
                </li>
                <li class="boton">
                    <a href="mis_contenidos.html">PROXIMAMENTE</a>
                </li>
                <li class="boton">
                    <a href="contactame.html">PROXIMAMENTE</a>
                </li>
                </ul>
            </nav>
        </header>
        <main>
            <div class="container1">
                <section>
                    <h2 id="centrado" class="title30">
                        STOP MISSING AND START KILLING
                    </h2>

                    <p>¿Cansado de no dar en el blanco? ¿Otra vez midio mal la distancia o el viento?</p>
                    <p>No desespere, acertar al objetivo esta al alcance de su arma y su billetera.</p>
                    <p>Esa sensación de frustracion esta a punto de desaparecer, solamente debe adherirse a alguno de nuestros cursos.</p>
                    <p>Actualmente tenemos expertos alrededor del mundo para guiarlo, asistirlo (y cubrirlo en caso de necesidad).</p>
                    <p>Solamente con completar la inscripción al curso y saber por cual lado del arma sale el proyectil estará listo para empezar.</p>
                    <!-- EL CURSO DE SUICIDE BOMBER NO TIENE EJEMPLOS EN VIVO POR CAUSAS OBVIAS -->

                </section>
                <article id="video1">
                <img src="Imagenes/missed.png">
                </article>
            </div>
            <div class="container1">
                <section>
                    <h2 id="centrado" class="title30">
                        VEA SUS NECESIDADES Y CALCULE SUS COSTOS
                    </h2>
                    <h3>Ejemplo(País: Corea del Norte, Moneda local: Patacones):</h3>

                    <?php
                    
                    $BasicTraining='Boot Camp para novatos'; //Para que dejen de ser gordos inutiles//
                    $GlobalTax='Traslado y víveres';//Costo de viaje, comida etc., entrada a los coto de caza y permisos (no incluye munición)//
                    $Inscripción='Inscripción y útiles'; //Para la nafta, la birra y la pizza del sábado, el costo de secuestrar "voluntarios" y munición extra//
                    $BasicHandGun='Curso básico de armas cortas'; //self explanatory//
                    $TaxesCountry='Impuestos según el país'; //Impuestos reales, Coimas, Bait para indigentes y animales, etc. //
                    $Insurance='Seguro de vida'; //En caso de que el cliente termine en los premios Darwin//
                    /*
                    En los valores vamos a usar abreviaturas de los términos:
                    Cost: CST
                    Basic: BSC
                    HandGun: HG
                    Taxes: Tx

                    Como para tener un código un poco más corto que la biblia
                    */ 
                    $CSTBSCTRN=3000;
                    $CSTGLOBALTX=1000;
                    $CSTCNTRYTX=500;
                    $CSTBSCHG=2000;
                    $CSTINS=10000;
                    $CSTINSCRIP=3500;
                    $TOTALEJEMPLO= $CSTINSCRIP + $CSTCNTRYTX + $CSTGLOBALTX + $CSTBSCTRN + $CSTBSCHG + $CSTINS;

                    //Constantes//

                    define('HG_cal', array ('.380acp','9x19mm','.38 spl','.357 Magnum','.44 Magnum','.454 casull' ));
                    
                    /* Como quiero mostrar multiples valores y no me deja tirando "echo HG_cal [x],[y] 
                    Voy a probar algo que no se vió en clase pero lo googlie.
                    */

                   // $HGDEFENSIVE = join(',', HG_cal);//
                    ?>

                    <ul>
                        <li><?php echo $Inscripción;?>: u$s  <?php echo $CSTINSCRIP;?> </li><br>
                        <li><?php echo $TaxesCountry?>: u$s  <?php echo $CSTCNTRYTX;?></li><br>
                        <li><?php echo $GlobalTax;?>: u$s  <?php echo $CSTGLOBALTX;?></li><br>
                        <li><?php echo $BasicTraining;?>: u$s  <?php echo $CSTBSCTRN;?></li><br>
                        <li><?php echo $BasicHandGun;?>: u$s  <?php echo $CSTBSCHG;?></li><br>
                        <li>(Calibres:  <?php echo HG_cal[0];?>, <?php echo HG_cal[1];?> <?php echo HG_cal[2];?> <?php echo HG_cal[3];?>)</li><br>
                        <li><?php echo $Insurance;?>: u$s  <?php echo $CSTINS;?></li><br>
                        <li>Total: u$s <?php echo $TOTALEJEMPLO;?></li><br>
                        <li>Duración Estimada: 24 semanas</li>
                    </ul>

                </section>
                <article id="video1">
                <img src="Imagenes/costos.png">
                </article>
            </div>
        </main>        
    </body>
</html>