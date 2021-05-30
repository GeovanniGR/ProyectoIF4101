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
                <li><a href="?controlador=Tours&accion=mostrarvarios">Comprar varios tour</a></li>
            </ul>
        </div>
        <div id="promociones">
            <h2>Tour Familiares</h2>
            <br>
            <label>Monumento Nacional Guayabo</label><br>
            <p>Dentro de sus 233 hectáreas, esta área silvestre protege un remanente de bosque pluvial pre-montano siempre verde.<br>
                Precio por persona: <br>
                ¢1000 Visitantes nacionales<br>
                ¢2500 Visitantes no residentes<br>         
            </p>
            <form action="?controlador=Tours&accion=calcularfamilia" method="post">
                <legend>Consultar</legend>
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
                <div>
                    <?php
                    $add = filter_input(INPUT_POST, 'calcular');
                    if ($add != null) {
                        if ($_POST['cantidad'] === 0) {
                            $total1= $_POST['noresidentes'] * 2500;
                        } else if ($_POST['noresidentes'] === 0) {
                            $total1= $_POST['cantidad'] * 1000;
                        } else {
                            $total1= $_POST['cantidad'] * 1000 + $_POST['noresidentes'] * 2500;
                        }
                        ?>
                        <label for = "cantidad">Total a pagar</label>
                        <input type = "text" id = "cantidad" name = "cantidad" value = "<?php echo $total1;  ?> "disabled/><?php
                           }
                           ?>
                </div>
            </form>
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
            <form action="?controlador=Tours&accion=calcularfamilia2" method="post">
                <legend>Consultar</legend>
                <div>
                    <label for="cantidad">Cantidad de personas o cantidad de tours para residentes</label>
                    <input type="text" id="cantidad2" name="cantidad2"  value="0" required/>
                </div>
                <div>
                    <label for="noresidentes2">Cantidad de personas o cantidad de tours para no residentes</label>
                    <input type="text" id="noresidentes2" name="noresidentes2"  value="0" required/>
                </div>
                <div>
                    <input type="submit" id="calcular2" name="calcular2" value="Calcular"/>
                </div>
                <div>
                    <?php
                    $add = filter_input(INPUT_POST, 'calcular2');
                    if ($add != null) {
                        if ($_POST['cantidad2'] === 0) {
                            $total= $_POST['noresidentes2'] * 7000;
                        } else if ($_POST['noresidentes2'] === 0) {
                            $total= $_POST['cantidad2'] * 1000;
                        } else {
                            $total= $_POST['cantidad2'] * 1000 + $_POST['noresidentes2'] * 7000;
                        }
                        ?>
                        <label for = "cantidad">Total a pagar</label>
                        <input type = "text" id = "cantidad" name = "cantidad" value = "<?php echo $total;?> "disabled/><?php
                           }
                           ?>
                </div>
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


