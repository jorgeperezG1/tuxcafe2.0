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
    <meta name="keywords" content="Bakery&nbsp;&amp;amp; Cafe">
    <meta name="description" content="">
    <title>Casa</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Casa.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.20.1, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Casa">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body u-xl-mode" data-lang="es"><header class="u-clearfix u-header u-header" id="sec-54da"><div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
  <a href="" class="u-image u-logo u-image-1">
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
</li> <li>
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
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Galeria.php">Galeria</a>
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
        <div class="u-align-right u-container-style u-expanded-width-xs u-group u-group-1">
          <div class="u-container-layout u-valign-bottom u-container-layout-1">
            <p class="u-text u-text-body-alt-color u-text-1">Tuxcafe el mejor cafe de chiapas hecho por campesinos.</p>
            <p class="u-text u-text-body-alt-color u-text-2">Ya tienes una cuenta <a href="login.php" class="u-active-none u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-white u-btn u-button-link u-button-style u-hover-none u-none u-text-body-alt-color u-btn-1">Iniciar sesion</a>
            </p>
            <a href="registro.php" class="u-border-2 u-border-active-white u-border-hover-white u-border-white u-btn u-button-style u-hover-white u-none u-text-active-palette-4-dark-3 u-text-body-alt-color u-text-hover-palette-4-dark-3 u-btn-2">REGISTRARSE</a>
          </div>
        </div>
        <h1 class="u-text u-text-body-alt-color u-text-3">TuxCafe
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