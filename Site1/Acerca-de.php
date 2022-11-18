<?php
    session_start();
    if(isset($_SESSION['nombreUsuario'])){
        $usuarioSesion=$_SESSION['nombreUsuario'];
        $tipoUsuario=$_SESSION['tipo'];
    }
    else{
        $usuarioSesion='';
        $tipoUsuario=0;
    }

?>
<!DOCTYPE html>
<html style="font-size: 16px;" lang="es"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>Acerca de</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Acerca-de.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.20.1, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Acerca de">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body u-xl-mode" data-lang="es"><header class="u-clearfix u-header u-header" id="sec-54da"><div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <a  class="u-image u-logo u-image-1">
          <img src="images/logo.jpg" class="u-logo-image u-logo-image-1">
        </a>
        <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
          <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px;">
            <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
              <svg class="u-svg-link" viewBox="0 0 24 24"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
              <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</g></svg>
            </a>
          </div>
          <div class="u-nav-container">
            <ul class="u-nav u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Casa.php" style="padding: 10px 20px;">Casa</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Acerca-de.php" style="padding: 10px 20px;">Acerca de</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Contacto.php" style="padding: 10px 20px;">Contacto</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Galeria.php" style="padding: 10px 20px;">Galeria</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Productos.php" style="padding: 10px 20px;">Productos</a>
</li><li>
                    <?php             
                        if($usuarioSesion==''){
                           
                            echo '<a href="login.php">Iniciar sesión</a>';
                        }
                        else{
                            echo '<label>'.$usuarioSesion.'</label>';
                            echo '<a href="logout.php">Cerrar sesión</a>';
                        }                  
                    ?>
                    
                 </li></ul>
          </div>
          <div class="u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Casa.php">Casa</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Acerca-de.php">Acerca de</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Contacto.php">Contacto</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Productos.php">Productos</a>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
      </div></header> 
      <section class="u-align-left u-clearfix u-image u-shading u-section-1" id="carousel_5b2d">
      <div class="u-clearfix u-sheet u-sheet-1">
      <h1><center>ANTECEDENTES</center></h1>
      <p><center>La primera vez que se introdujo el grano de café al estado fue en 1847 por Geronimo <br>
Manchinelli, en el municipio de Tuxtla Chico, el café de Chiapas se encuentra entre <br>
los productos mexicanos más famosos ya que se producen al año cerca de 4.5 <br>
millones de sacos al año, de los cuales se exporta el 80% a más de 52 países en <br>
todo el mundo, el café de Chiapas también es uno de los más comercializados ya <br>
que no es la primera vez que se crea una aplicación web para la venta y la <br>
distribución del café</center></p>
<br>
<h1><center>BENEFICIARIOS</center></h1>
<p><center>Para los beneficiarios estarán las personas que se encargan de la siembra y de la <br>
recolección de café en este caso los beneficiados estarán los dueños de los <br>
cafetales ya que a ellos se les estará pagando por el café en grano para después <br>
nosotros buscar un socio del cual se encargaría de procesar el café para obtener <br>
diferentes tipos de café para después poder darles publicidad, también están los <br>
recolectores del café, los clientes que serán beneficiados ya que ellos formaran <br>
parte de la sociedad</center></p>
        <div class="u-align-right u-container-style u-expanded-width-xs u-group u-group-1">
          <div class="u-container-layout u-valign-bottom u-container-layout-1">
            
          </div>
        </div>
        </h1>
      </div>
    </section>
    
    <footer class="bg-light text-center text-lg-start">
  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2022 Copyright:
    <a class="text-dark" href="index.php">TuxCafe</a>
  </div>
  <!-- Copyright -->
</footer>
</body></html>