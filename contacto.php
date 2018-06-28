<!doctype html>
<html>
    <head>
        <title>2CARGO | Contacto</title>
         <meta name="description" content="">
        <meta name="keywords" content="">
        <!--REQUIRED META TAGS-->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- CSS -->
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
        <link rel="icon" href="images/favicon.ico" type="image/x-icon">
        <link href="css/contacto.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="css/fontello.css">
        <style>
            @import url('https://fonts.googleapis.com/css?family=Raleway:300,400,700');
        </style>
    </head>
<header>
        <!--MENU-->
        <div id="menu">
            <div class="logo-header">
                <a href="index.html"><img src="images/logos/simbolo.svg"></a>
            </div>
             <input type="checkbox" id="menu-bar">
                <label class="icon-menu" for="menu-bar"></label>
                <nav class="menu">
                    <ul class="menu-desplegable">
                        <li class="mi-cuenta"><a href="http://2cargo.managercargo.com/public/indexlogin/logincasillero" target="_blank" id="menu-especial2"><font color="#CC2128">Mi Cuenta</font></a></li>
                        <li><a href="index.html" id="menu-especial2">Home</a></li>
                        <li><a href="#" id="none-color">Servicios</a>
                    <ul>
                        <li><a href="tu-casillero-en-estados-unidos.html" id="color-submenu"><font size="3">Tu Casillero en EE.UU</font></a></li>
                        <li><a href="asesoramos-tu-compra.html" id="color-submenu"><font size="3">Asesoramos tu compra</font></a></li>
                        <li><a href="compramos-por-ti.html" id="color-submenu"><font size="3">Compramos por tí</font></a></li>
                    </ul>
                        </li>
                        <li><a href="quienes-somos.html" id="menu-especial">Quiénes Somos</a></li>
                        <li><a href="regulaciones.html" id="menu-especial3">Regulaciones</a></li>
                        <li><a href="contacto.php" id="menu-especial3">Contacto</a></li>
                        <li class="mi-cuenta2"><a href="http://2cargo.managercargo.com/public/indexlogin/logincasillero" target="_blank"><font color="#CC2128">Mi Cuenta</font></a></li>
                    <div class="sociales">
                        <a href="https://www.facebook.com/2cargousa/" target="_blank"><img src="images/redes/facebook-logo-blue.png"></a>
                        <a href="https://api.whatsapp.com/send?phone=13058492066" target="_blank"><img src="images/redes/whatsapp-logo-blue.png"></a>
                        <a href="https://www.instagram.com/2cargoxpress/" target="_blank"><img src="images/redes/instagram-logo-blue.png"></a>
                    </div>
                         </ul>
                </nav>
        </div>
</header>
<body>
    <div class="medida">
    <div class="info-contacto">
        <h1>Contacto</h1>
        <h2>¡Comunícate con nosotros!</h2>
        <p>Contamos con el personal calificado para tramitar tus compras y cualquier tipo de relación comercial. Si tu lo deseas cotizamos, compramos y enviamos los articulos, productos o mercancia al destino que prefieras en Colombia, Venezuela y México.</p>
    </div>
     <?php
$action=$_REQUEST['action'];
if ($action=="")    /* display the contact form */
    {
    ?>
        <div class="contacto">     
    <form  action="" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="action" value="submit">
    <input name="name" type="text" value="" placeholder="Nombre" size="30"/><br>
    <input name="telephone" type="text" value="" placeholder="Teléfono" size="30"/><br>
    <input name="email" type="text" value="" placeholder="Email" size="30"/><br>
    <textarea name="message" placeholder="Mensaje" size="30"></textarea><br>
    <input type="submit" value="Enviar"/>
    </form>
        </div>
         <?php
    } 
else                /* send the submitted data */
    {
    $name=$_REQUEST['name'];
    $telephone=$_REQUEST['telephone'];
    $email=$_REQUEST['email'];
    $message=$_REQUEST['message'];
    if (($name=="")||($telephone=="")||($email=="")||($message==""))
        {
        echo "<br><br><br><br><br><br>Todos los campos tiene que ser llenados <a href=\"\">the form</a> Volver";
        }
    else{        
        $from="From: $name<$email>\r\nReturn-path: $email";
        $subject="Mensaje desde el formulario de contacto";
        mail("hello@2cargoxpress.com", $subject, $message, $telephone, $from);
        echo "Mensaje enviado";
        }
    }  
?>
    <div class="botones">
        <ul>
            <li><img src="images/icono_ubicacion.svg"><p>7377 NW 54TH ST Miami FL 33166</p></li>
            <li><img src="images/icono_llamada.svg"><p>+1(305) 849 2066</p></li>
        </ul>
    </div>
    </div>
    <div class="mapa">
        <iframe src="https://snazzymaps.com/embed/79987" width="100%" height="250px" style="border:none;"></iframe>
    </div>
</body>
     <footer>
        <div class="footer">
            <div class="logo-footer">
                <img src="images/logos/white_simbolo.svg">
            </div>
            <h2>Siguenos</h2>
            <div class="footer-sociales">
            <a href="https://www.facebook.com/2cargousa/" target="_blank"><img src="images/redes/facebook-logo-button.png"></a>
            <a href="https://api.whatsapp.com/send?phone=13058492066" target="_blank"><img src="images/redes/whatsapp.png"></a>
            <a href="https://www.instagram.com/2cargoxpress/" target="_blank"><img src="images/redes/instagram-logo.png"></a>
            </div>
        <div class="derechos">
        <p>7377 NW 54TH ST Miami FL 33166 | Télefono: +1(305) 849 2066 <br> 2 Cargo Xpress &copy; 2018. Todos los derechos reservados.</p>
        </div>
             </div>
          <div class="desarrollo">
        <p>© 2018 Realizada por Lecri Diseño y Publicidad. Todos los derechos reservados. Contacto: (+57) 311 520 0632.</p>
        </div>
    </footer>
</html>