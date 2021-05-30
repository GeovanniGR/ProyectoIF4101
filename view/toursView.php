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


