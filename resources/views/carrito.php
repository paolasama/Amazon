<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Amazon.com.mx</title>
        <!-- Favicon -->
        <link rel="icon" href="img/icon.jpg" type="image/x-icon">
        <!-- Carga el CSS del carrito -->
        <link rel="stylesheet" href="css/carrito.css">
        <!-- Carga el archivo JavaScript -->
        <script src="js/funciones.js"></script>
    </head>
    <body>
        <img src="img/amazon-logo.png" alt="Logo de Amazon">

        <a href="#">Ubicación</a>

        <div class="navbar">
            <div class="search-bar">
                <select class="custom-select">
                    <option value="all">Todas las categorías</option>
                    <option value="electronics">Electrónicos</option>
                    <option value="toys">Juguetes</option>
                    <option value="home">Hogar y Cocina</option>
                    <option value="books">Libros</option>
                </select>
                <form class="form-inline">
                    <input class="form-control" type="text" placeholder="Buscar Amazon.com.mx" aria-label="Buscar">
                    <button class="btn btn-outline-light" type="submit">Buscar</button>
                </form>
            </div>

            <!-- Menú de usuario -->
            <div class="menu">
                <button class="menu-button" aria-haspopup="true" aria-expanded="false">
                    Hola, identifícate. Cuenta y listas
                </button>
                <div class="dropdown-content" role="menu">
                    <a href="#" class="btn-seguro" role="menuitem">Identifícate</a>
                    <p>¿Eres un cliente nuevo? <a href="#" role="menuitem">Empieza aquí</a></p>
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <td>
                                    <h4>Mis listas</h4>
                                    <ul>
                                        <li><a href="#" role="menuitem">Crear una lista de deseos</a></li>
                                        <li><a href="#" role="menuitem">Lista de bodas</a></li>
                                        <li><a href="#" role="menuitem">Lista de nacimiento</a></li>
                                        <li><a href="#" role="menuitem">Descubre tu estilo</a></li>
                                        <li><a href="#" role="menuitem">Explorar Showroom</a></li>
                                    </ul>
                                </td>
                                <td class="divider">
                                    <h4>Mi cuenta</h4>
                                    <ul>
                                        <li><a href="#" role="menuitem">Mi cuenta</a></li>
                                        <li><a href="#" role="menuitem">Mis pedidos</a></li>
                                        <li><a href="#" role="menuitem">Tu cuenta de vendedor</a></li>
                                        <li><a href="#" role="menuitem">Mi lista de deseos</a></li>
                                        <li><a href="#" role="menuitem">Mis recomendaciones</a></li>
                                        <li><a href="#" role="menuitem">Mi suscripción a Amazon Prime</a></li>
                                    </ul>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Barra de navegación -->
            <ul class="submenu-list">
                <li><a href="#" id="menuBtn" onclick="openNav()">&#9776; Inicio</a></li>
                <li><a href="#">Vender</a></li>
                <li><a href="#">Lo más vendido</a></li>
                <li><a href="#">Video Juegos</a></li>
                <li><a href="#">Amazon Basics</a></li>
                <li><a href="#">Promociones</a></li>
                <li><a href="#">Música</a></li>
                <li><a href="#">Lo nuevo</a></li>
                <li><a href="#">Outlet</a></li>
                <li><a href="#">Lo más regalado</a></li>
                <li><a href="#">Hogar y Cocina</a></li>
                <li><a href="#">Electrónicos</a></li>
                <li><a href="#">Juguetes y juegos de mesa</a></li>
            </ul>
        </div>

        <script>
            // Funciones para el menú de navegación
            function openNav() {
                document.getElementById("mySidenav").style.width = "250px";
            }

            function closeNav() {
                document.getElementById("mySidenav").style.width = "0";
            }
        </script>

            <!-- Barra de navegación -->
            <ul class="submenu-list">
                <li><a href="#" id="menuBtn" onclick="openNav()">&#9776; Inicio</a></li>
                <li><a href="#">Vender</a></li>
                <li><a href="#">Lo más vendido</a></li>
                <li><a href="#">Video Juegos</a></li>
                <li><a href="#">Amazon Basics</a></li>
                <li><a href="#">Promociones</a></li>
                <li><a href="#">Música</a></li>
                <li><a href="#">Lo nuevo</a></li>
                <li><a href="#">Outlet</a></li>
                <li><a href="#">Lo más regalado</a></li>
                <li><a href="#">Hogar y Cocina</a></li>
                <li><a href="#">Electrónicos</a></li>
                <li><a href="#">Juguetes y juegos de mesa</a></li>
            </ul>
        </div>
        <!-- Loader -->
  <div class="loader" id="loader">
    <div class="spinner-border text-primary" role="status">
      <span class="sr-only">Cargando...</span>
    </div>
  </div>
  <!-- footer -->
  <div class="navLeftFooter nav-sprite-v1" id="navFooter">
    <a href="{{ url('/') }}" id="navBackToTop" aria-label="Inicio de página">
        <div class="navFooterBackToTop">
            <span class="navFooterBackToTopText">
                Inicio de página
            </span>
        </div>
    </a>
    <div class="navFooterVerticalColumn navAccessibility" role="presentation">
      <div class="navFooterVerticalRow navAccessibility" style="display: table-row;">
            <div class="navFooterLinkCol navAccessibility">
              <div class="navFooterColHead" role="heading" aria-level="6">Conócenos</div>
            <ul>
                <li class="nav_first">
                  <a href="https://www.amazon.jobs/es" class="nav_a">Trabajar en Amazon</a>
                </li>
                <li>
                  <a href="https://www.aboutamazon.mx/?utm_source=gateway&amp;utm_medium=footer&amp;token=about" class="nav_a">Acerca de Amazon</a>
                </li>
                <li>
                  <a href="/gp/feature.html?docId=1001359011&amp;ref_=footer_gw_m_b_corporate" class="nav_a">Información corporativa</a>
                </li>
                <li>
                  <a href="https://press.aboutamazon.com/" class="nav_a">Departamento de prensa</a>
                </li>
                <li class="nav_last ">
                  <a href="https://www.amazon.science" class="nav_a">Amazon Science</a>
                </li>
            </ul>
          </div>
            <div class="navFooterColSpacerInner navAccessibility"></div>
            <div class="navFooterLinkCol navAccessibility">
              <div class="navFooterColHead" role="heading" aria-level="6">Gana dinero con nosotros</div>
            <ul>
                <li class="nav_first">
                  <a href="https://vender.amazon.com.mx/?ld=AZMXSOA-footer&amp;ref_=footer_sell" class="nav_a">Vender en Amazon</a>
                </li>
                <li>
                  <a href="https://supply.amazon.com.mx?ref_=footer_sta" class="nav_a">Suministro para Amazon</a>
                </li>
                <li>
                  <a href="https://brandservices.amazon.com.mx/?ref=AOMXABRLGNRFOOT&amp;ld=AOMXABRLGNRFOOT" class="nav_a">Protege y desarrolla tu marca</a>
                </li>
                <li>
                  <a href="https://vender.amazon.com.mx/handmade?ld=AZMXHND-footer&amp;ref_=footer_sell" class="nav_a">Vender en Amazon Handmade</a>
                </li>
                <li>
                  <a href="https://kdp.amazon.com" class="nav_a">Publica tu libro en Kindle</a>
                </li>
                <li>
                  <a href="https://afiliados.amazon.com.mx/?ref_=footer_affliate" class="nav_a">Programa de afiliados</a>
                </li>
                <li class="nav_last ">
                  <a href="https://advertising.amazon.com.mx/?ref=footer_advtsing_mx" class="nav_a">Anuncia tus productos</a>
                </li>
            </ul>
          </div>
            <div class="navFooterColSpacerInner navAccessibility"></div>
            <div class="navFooterLinkCol navAccessibility">
              <div class="navFooterColHead" role="heading" aria-level="6">Podemos ayudarte</div>
            <ul>
                <li class="nav_first">
                  <a href="/gp/css/returns/homepage.html?ref_=footer_hy_f_4" class="nav_a">Devolver o reemplazar productos</a>
                </li>
                <li>
                  <a href="/hz/mycd/myx?ref_=footer_myk" class="nav_a">Gestionar contenido y dispositivos</a>
                </li>
                <li>
                  <a href="https://www.amazon.com.mx/your-product-safety-alerts?ref_=footer_bsx_ypsa" class="nav_a">Alertas de revisión y de seguridad del producto</a>
                </li>
                <li>
                  <a href="/registries?ref_=nav_footer_registry_giftlist_desktop" class="nav_a">Lista de regalos</a>
                </li>
                <li class="nav_last ">
                  <a href="/gp/help/customer/display.html?nodeId=508510&amp;ref_=footer_gw_m_b_he" class="nav_a">Ayuda</a>
                </li>
            </ul>
          </div>
            <div class="navFooterColSpacerInner navAccessibility"></div>
            <div class="navFooterLinkCol navAccessibility">
              <div class="navFooterColHead" role="heading" aria-level="6">Métodos de pago</div>
            <ul>
                <li class="nav_first">
                  <a href="/tc?ref_=footer_pay_tc" class="nav_a">Tarjetas de crédito y débito</a>
                </li>
                <li>
                  <a href="/tarjetasderegalo?ref_=footer_pay_gc" class="nav_a">Tarjetas de regalo</a>
                </li>
                <li>
                  <a href="/gp/browse.html?node=21374700011&amp;ref_=footer_paycode" class="nav_a">Pago en efectivo</a>
                </li>
                <li>
                  <a href="/msi?ref_=footer_pay_ins" class="nav_a">Pago a meses</a>
                </li>
                <li class="nav_last ">
                  <a href="/gp/browse.html?node=17277672011&amp;ref_=footer_amazoncash" class="nav_a">Amazon Cash</a>
                </li>
            </ul>
          </div>
      </div>
    </div>
    <div class="nav-footer-line"></div>
    
      <div class="navFooterLine navFooterLinkLine navFooterPadItemLine">
        <span>
          <div class="navFooterLine navFooterLogoLine">
            <a aria-label="Amazon Mexico Home" href="/ref=footer_logo">
            <div class="nav-logo-base nav-sprite"></div>
            </a>
          </div>
    </span>
        
          <span class="icp-container-desktop"><div class="navFooterLine">
    <style type="text/css">
    #icp-touch-link-country { display: none; }
    </style>
    <a href="/customer-preferences/country?ie=UTF8&amp;preferencesReturnUrl=%2F&amp;ref_=footer_icp_cp" aria-label="Seleccionar un país/región para comprar." class="icp-button" id="icp-touch-link-country">
      <span class="icp-flag-3 icp-flag-3-mx"></span><span class="icp-color-base">México</span>
    </a>
    </div></span>
        
      </div>
      
      
      
    <div class="navFooterLine navFooterLinkLine navFooterPadItemLine navFooterCopyright navFooterLineDivider">
      <ul><li class="nav_first"><a href="/gp/help/customer/display.html?nodeId=508088&amp;ref_=footer_cou" id="" class="nav_a">Condiciones de uso</a> </li><li class="nav_last"><a href="/gp/help/customer/display.html?nodeId=468496&amp;ref_=footer_privacy" id="" class="nav_a">Aviso de privacidad</a> </li></ul><span>© 1996-2024, Amazon.com, Inc. o sus afiliados</span>
    </div>
    </div>
</body>
</html>