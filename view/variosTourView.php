<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Estructura Basica</title>
        <link rel="stylesheet" href="public/css/estilo.css">
        <script type="text/javascript" src="public/js/manipularcanvas.js"></script>
    </head>
    <body>
        <header>
            <h1>
                <a href="index.php">
                    <img alt="TurriFloFa" src="public/img/logo.jpg"/>
                    <canvas id="canvas" width="1349" height="30"></canvas>
                </a>

            </h1>

            <nav>
                <ul>
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="?controlador=Tours&accion=mostrar">Tours</a></li>
                    <li><a href="?controlador=Contactos&accion=mostrar">Contactos</a></li>
                </ul>
            </nav>
        </header>
        <div id="hipervinculo">
            <h2>Diferentes Tours</h2>
            <ul>
                <li><a href="?controlador=Tours&accion=mostrardescuento">Tour con descuento</a></li>
                <li><a href="?controlador=Tours&accion=mostrarfamiliares">Tour familiares</a></li>
                <li><a href="">Comprar varios tour</a></li>
            </ul>
        </div>
        <div id="promociones">
            <h2>Escoger Varios Tours</h2>
            <br>
            <label>Monumento Nacional Guayabo</label><br>
            <p>Dentro de sus 233 hectáreas, esta área silvestre protege un remanente de bosque pluvial pre-montano siempre verde.<br>
                Precio por persona: <br>
                ¢1000 Visitantes nacionales<br>
                ¢2500 Visitantes no residentes<br>         
            </p>
            <br>
            <label>Parque Nacional Volcan Turrialba</label><br>
            <p>Entre los árboles que destacan están los robles y los encinos, 
                así como el cacho de venado, salvia y ratoncillo, que son los 
                residuos de los viejos bosques entresacados y de tipo secundario
                que aún permanecen como refugio de la fauna silvestre nativa.<br>
                Precio por persona:<br>
                ¢1.000 Visitantes Nacionales<br>
                ¢7.000 Visitantes no residendes <br>        
            </p>
            <br>
            <label>Reserva Biológica Espino Blanco</label><br>
            <p>Disfrute con su burbuja social de un día lleno de paz, tranquilidad 
                y naturaleza en la Reserva Biológica Espino Blanco, donde podrá 
                respirar aire fresco, escuchar el relajante canto de las aves y 
                recorrer emocionantes senderos.<br>
                Precio por persona:<br>
                ¢10.000 Visitantes Nacionales<br>
                ¢20.000 Visitantes no residendes <br>        
            </p>
            <br>
            <label>Cabalgata Turrialba</label><br>
            <p>Conoce la hermosa comunidad de Aquiares y disfrute de un entretenido 
                tour a caballo, donde podrás descubrir el mirador del Ceibo, el 
                beneficio de café y la imponente catarata Aquiares, con una caída 
                de agua de más de 30 metros de altura<br>
                Precio por persona:<br>
                ¢25.000 Visitantes<br>       
            </p>

            <form method="POST">
                <div id="check">
                    <label>Escoger Tours</label><br>
                    <p><input type="checkbox" name="cbox1" value="1"> Monumento Nacional Guayabo</p><br>
                    <p><input type="checkbox" name="cbox2" value="2"> Parque Nacional Volcan Turrialba</p><br>
                    <p><input type="checkbox" name="cbox3" value="3"> Reservar Biológica Espino Blanco</p><br>
                    <p><input type="checkbox" name="cbox4" value="4"> Cabalgata Turrialba</p><br>
                </div>

                <div>
                    <label for="cantidad">Cantidad de personas o cantidad de tours para residentes</label>
                    <input type="text" id="cantidad" name="cantidad"  value="0" required/>
                </div>
                <div>
                    <label for="noresidentes">Cantidad de personas o cantidad de tours para no residentes</label>
                    <input type="text" id="noresidentes" name="noresidentes"  value="0" required/>
                </div>
                <div>
                    <input type="submit" id="calcular" name="calcular" value="Calcular"/>
                </div>

                <?php
                $add = filter_input(INPUT_POST, 'calcular');
                if ($add != null) {
                    $total1 = 0;
                    $total2 = 0;
                    $total3 = 0;
                    $total4 = 0;
                    $contador=0;
                    if (isset($_POST["cbox1"])) {

                        if ($_POST['cantidad'] === 0) {
                            $total1 = $_POST['noresidentes'] * 2500;
                        } else if ($_POST['noresidentes'] === 0) {
                            $total1 = $_POST['cantidad'] * 1000;
                        } else {
                            $total1 = $_POST['cantidad'] * 1000 + $_POST['noresidentes'] * 2500;
                        }
                        $contador++;
                        ?>
                        <label for = "cantidad">Total a pagar Monumento Nacional Guayabo</label>
                        <input type = "text" id = "cantidad" name = "cantidad" value = "<?php echo $total1; ?> "disabled/><?php
                    }

                    if (isset($_POST["cbox2"])) {
                        if ($_POST['cantidad'] === 0) {
                            $total2 = $_POST['noresidentes'] * 7000;
                        } else if ($_POST['noresidentes'] === 0) {
                            $total2 = $_POST['cantidad'] * 1000;
                        } else {
                            $total2 = $_POST['cantidad'] * 1000 + $_POST['noresidentes'] * 7000;
                        }
                        $contador++;
                        ?>
                        <label for = "cantidad">Total a pagar Parque Nacional Volvan Turrialba</label>
                        <input type = "text" id = "cantidad" name = "cantidad" value = "<?php echo $total2; ?> "disabled/><?php
                    }


                    if (isset($_POST["cbox3"])) {
                        if ($_POST['cantidad'] === 0) {
                            $total3 = $_POST['noresidentes'] * 20000;
                        } else if ($_POST['noresidentes'] === 0) {
                            $total3 = $_POST['cantidad'] * 10000;
                        } else {
                            $total3 = $_POST['cantidad'] * 10000 + $_POST['noresidentes'] * 20000;
                        }
                        $contador++;
                        ?>
                        
                        <label for = "cantidad">Total a pagar Reservar Biológica Espino Blanco</label>
                        <input type = "text" id = "cantidad" name = "cantidad" value = "<?php echo $total3; ?> "disabled/><?php
                    }

                    if (isset($_POST["cbox4"])) {

                        if ($_POST['cantidad'] === 0) {
                            $total4 = $_POST['noresidentes'] * 25000;
                        } else if ($_POST['noresidentes'] === 0) {
                            $total4 = $_POST['cantidad'] * 25000;
                        } else {
                            $total4 = $_POST['cantidad'] * 25000 + $_POST['noresidentes'] * 25000;
                        }
                        $contador++;
                        ?>
                        <label for = "cantidad">Total a pagar Reservar Biológica Espino Blanco</label>
                        <input type = "text" id = "cantidad" name = "cantidad" value = "<?php echo $total4; ?> "disabled/><?php
                    }
                    if($contador===1){
                        $totalFinal=($total1 + $total2 + $total3 + $total4)*0.1;
                    } else if($contador===2){
                        $totalFinal=($total1 + $total2 + $total3 + $total4)*0.2;
                    } else if($contador===3){
                        $totalFinal=($total1 + $total2 + $total3 + $total4)*0.3;
                    } else if ($contador===4){
                        $totalFinal=($total1 + $total2 + $total3 + $total4)*0.4;
                    }
                        
                    ?>
                    <label for = "cantidad">Total Final con Descuento</label>
                    
                    <input type = "text" id = "cantidad" name = "cantidad" value = "<?php echo ($total1 + $total2 + $total3 + $total4)-$totalFinal; ?> "disabled/><?php
                }
                ?>

            </form>

        </div>

        <footer class="footer-distributed">
            <div class="footer-left">
                <h3>Turri<span>FloFa</span></h3>
                <p class="footer-company-name">TurriFloFa &copy; 2021</p>
            </div>

            <div class="footer-center">
                <div>
                    <i class="fa fa-map-marker"></i>
                    <p><span>Turrialba</span> Cartago, Costa Rica</p>
                </div>

                <div>
                    <i class="fa fa-phone"></i>
                    <p>+506 60662671</p>
                </div>

                <div>
                    <i class="fa fa-envelope"></i>
                    <p>geovannigutierrez77@gmail.com</p>
                </div>

                <div class="footer-icons">
                    <a href="#"><img alt="Facebook" src="public/img/facebook.png"/></a>
                    <a href="#"><img alt="Instagram" src="public/img/instagram.png"/></a>
                </div>

            </div>

            <div class="footer-right">
                <p class="footer-company-about">
                    <span>Lugares Turisticos</span>
                    <a href="https://exploreturrialba.com/">Explore Turrialba</a>
                    <br>
                    <a href="https://www.catie.ac.cr/">Jardín Botánico CATIE</a>
                </p>
            </div>
        </footer>
    </body>
</html>

