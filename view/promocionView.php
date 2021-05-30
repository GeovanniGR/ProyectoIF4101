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
            <h2>Tour con Promociones</h2>
            <br>
            <label>Aquiares Coffee & Community Experience</label><br>
            <p>Le dará la oportunidad de disfrutar de café, naturaleza, cultura, aventura y gastronomía.<br>
                Promocion: <br>
                Una probadita de Aquiares<br>
                Día completo a lo Aquiareño<br>
                Cabalgata por nuestra Hacienda<br>
                Precio por persona:<br>
                Antes: ¢10.000 colones / Ahora: ¢7.000 colones            
            </p>
            <form action="?controlador=Tours&accion=calcular1" method="post">
                <legend>Consultar</legend>
                <div>
                    <label for="cantidad">Cantidad de personas o cantidad de tours</label>
                    <input type="text" id="cantidad" name="cantidad"  required/>

                </div>
                <div>
                    <input type="submit" id="calcular" name="calcular" value="Calcular"/>
                </div>
                <div>
                    <?php
                    $add = filter_input(INPUT_POST, 'calcular');
                    if ($add != null) {
                        ?>
                        <label for = "cantidad">Total a pagar</label>
                        <input type = "text" id = "cantidad" name = "cantidad" value = "<?php echo $_POST['cantidad'] * 7000 ?>"disabled/>
                        <?php
                    }
                    ?>
                </div>
            </form>
            <br>
            <label>Jardín Botánico CATIE</label><br>
            <p>Es un breve espacio que preserva más de 4.000 muestras que 
                representan una gran diversidad de plantas provenientes de Asia, 
                África, Oceanía y América tropical.En nuestro jardín es posible 
                observar, así en un mismo lugar, una diversidad única de especies, 
                base para el trabajo científico de CATIE en mejoramiento genético 
                y seguridad alimentaria. Previa coordinación y reservación es posible 
                la degustación de algunos frutos exóticos o bien jugos elaborados a base de estos.<br>
                Precio por persona:<br>
                Antes: ¢5.000 colones / Ahora: ¢3.000 colones            
            </p>
            <form action="?controlador=Tours&accion=calcular2" method="post">
                <legend>Consultar</legend>
                <div>
                    <label for="cantidad2">Cantidad de personas o cantidad de tours</label>
                    <input type="text" id="cantidad2" name="cantidad2"  required/>

                </div>
                <div>
                    <input type="submit" id="calcular2" name="calcular2" value="Calcular"/>
                </div>
                <div>
                    <?php
                    $add = filter_input(INPUT_POST, 'calcular2');
                    if ($add != null) {
                        ?>
                        <label for = "cantidad2">Total a pagar</label>
                        <input type = "text" id = "cantidad2" name = "cantidad2" value = "<?php echo $_POST['cantidad2'] * 3000 ?>"disabled/>
                        <?php
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


