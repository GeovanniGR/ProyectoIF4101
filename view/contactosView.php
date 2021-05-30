
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
        <div id="contactos">
            <h2>Monumento Nacional Guayabo</h2>
            <label>Ubicacion:</label> <br>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15718.
                    132038726933!2d-83.69953163244554!3d9.972755792869833!2m3!1f0!2f0!
                    3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fa0d1771b4106e1%3A0xe1b330be8cb15827!
                    2sMonumento%20Nacional%20Guayabo!5e0!3m2!1ses-419!2scr!4v1621875635973!5m2!1ses-419!2scr" 
                    width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy">
            </iframe>
            <br>
            <p>Contactos:<br> Casetilla: (506) 2559-0117<br>
                Administración: (506) 2559-1220<br>
                Correo electrónico: acc.info@sinac.go.cr</p> <br>

            <h2>Parque Nacional Volcan Turrialba</h2>
            <label>Ubicacion:</label> <br>
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15716.
                    00289883595!2d-83.7677148!3d10.0167979!3m2!1i1024!2i768!4f13.
                    1!3m3!1m2!1s0x0%3A0xb5e2f303337e7ede!2sParque%20Nacional%20Volc%C3%A1n%20Turrialba!
                    5e0!3m2!1ses-419!2scr!4v1621877241732!5m2!1ses-419!2scr" 
                    width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy">
            </iframe>
            <br>
            <p>Contactos:<br> Teléfono: (506) 8704-2432<br>
                Correo electrónico: acc.info@sinac.go.cr​
            </p>
            <br>
            <h2>Aquiares Coffee & Community Experience</h2>
            <label>Ubicacion:</label> <br>
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!
                    1d15719.676635981417!2d-83.7197807!3d9.9406843!3m2!1i1024!
                    2i768!4f13.1!3m3!1m2!1s0x0%3A0xf734422abfe748c!
                    2sAquiares%20Coffee%20%26%20Community%20Experience!5e0!3m2!
                    1ses-419!2scr!4v1622237812142!5m2!1ses-419!2scr" width="400" 
                    height="300" style="border:0;" allowfullscreen="" loading="lazy">

            </iframe>
            <br>
            <p>Contactos:<br> Teléfono: (506) 2556-0011<br>
            </p>
            <br>
            <h2>Reserva Biológica Espino Blanco</h2>
            <label>Ubicacion:</label> <br>
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!
                    1d15719.426099999482!2d-83.6901945!3d9.9458933!3m2!1i1024!
                    2i768!4f13.1!3m3!1m2!1s0x0%3A0x255e2d8aa2032c39!
                    2sWagelia%20Espino%20Blanco%20Lodge!5e0!3m2!1ses-419!2scr!
                    4v1622238067977!5m2!1ses-419!2scr" width="400" height="300" 
                    style="border:0;" allowfullscreen="" loading="lazy">

            </iframe>
            <br>
            <p>Contactos:<br> Teléfono: (506)  2556 0616<br>
            </p>
            <br>
            <h2>Jardín Botánico CATIE</h2>
            <label>Ubicacion:</label> <br>
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!
                    1d15721.605146483611!2d-83.6685799!3d9.900497!3m2!1i1024!
                    2i768!4f13.1!3m3!1m2!1s0x0%3A0x26e0f19e63bd4ded!
                    2sJard%C3%ADn%20Bot%C3%A1nico%20CATIE!5e0!3m2!1ses-419!
                    2scr!4v1622238326839!5m2!1ses-419!2scr" width="400" height="300" 
                    style="border:0;" allowfullscreen="" loading="lazy">

            </iframe>
            <br>
            <p>Contactos:<br> Teléfono: (506)2558-2000<br> Correos: <br>comunica@catie.ac.cr<br> catie@catie.ac.cr<br>
            </p>

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
        <script src="public/js/ventanamodel.js"></script>
    </body>
</html>