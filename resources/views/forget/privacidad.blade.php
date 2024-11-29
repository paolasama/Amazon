<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amazon.com.mx</title>
    <link rel="icon" href="./img/icon.jpg" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/estilo.css') }}">
    <script src="{{ asset('js/funciones.js') }}"></script>
</head>
<body>
    <header>
        <div class="navbar">
        <a class="navbar-brand" href="{{ url('/') }}">
          <img src="{{ asset('img/amazon-logo.png') }}" alt="Logo de Amazon">
        </a>

        <button class="btn-seguro" id="ubicacion-btn">Ubicación</button>
        <script>
          // Selecciona el botón usando su ID
          const ubicacionBtn = document.getElementById('ubicacion-btn');

          // Agrega un evento de clic al botón
          ubicacionBtn.addEventListener('click', function() {
            if (navigator.geolocation) {
              navigator.geolocation.getCurrentPosition(showPosition, showError);
            } else {
              alert("La geolocalización no es soportada por este navegador.");
            }
          });

          function showPosition(position) {
            const latitude = position.coords.latitude;
            const longitude = position.coords.longitude;
            alert(`Tu ubicación actual es:\nLatitud: ${latitude}\nLongitud: ${longitude}`);
          }

          function showError(error) {
            switch(error.code) {
              case error.PERMISSION_DENIED:
                alert("El usuario negó el permiso para acceder a la ubicación.");
                break;
              case error.POSITION_UNAVAILABLE:
                alert("La información de la ubicación no está disponible.");
                break;
              case error.TIMEOUT:
                alert("El tiempo de espera para obtener la ubicación se agotó.");
                break;
              case error.UNKNOWN_ERROR:
                alert("Ocurrió un error desconocido.");
                break;
            }
          }
        </script>
            <div class="navbar">
                <a class="nav-item">
                  <select class="custom-select">
                    <option value="all">Todas las categorías</option>
                    <option value="electronics">Electrónicos</option>
                    <option value="toys">Juguetes</option>
                    <option value="home">Hogar y Cocina</option>
                    <option value="books">Libros</option>
                  </select>
                  <a>
                  <form class="form-inline">
                    <input class="form-control" type="text" placeholder="Buscar Amazon.com.mx" aria-label="Buscar">
                    <button class="btn btn-outline-light" type="submit">Buscar</button>
                  </form>
                </a>
              </div>
              <div class="menu">
                    <button class="menu-button">Hola, identifícate. Cuenta y listas</button>
                    <div class="dropdown-content">
                      <a href="login" class="btn-seguro">Identifícate</a>
                      <p>¿Eres un cliente nuevo? <a href="register">Empieza aquí</a></p>
                      <table class="table table-bordered">
                        <tbody>
                          <tr>
                            <!-- Columna "Mis listas" -->
                            <td>
                              <h4>Mis listas</h4>
                              <a href="#">Crear una lista de deseos</a><br>
                              <a href="#">Lista de bodas</a><br>
                              <a href="#">Lista de Nacimiento</a><br>
                              <a href="#">Descubre tu estilo</a><br>
                              <a href="#">Explorar Showroom</a>
                            </td>
                            <!-- Línea vertical separadora -->
                            <td class="divider">
                              <h4>Mi cuenta</h4>
                              <a href="#">Mi cuenta</a><br>
                              <a href="#">Mis pedidos</a><br>
                              <a href="#">Tu cuenta de vendedor</a><br>
                              <a href="#">Mi lista de deseos</a><br>
                              <a href="#">Mis recomendaciones</a><br>
                              <a href="#">Mi suscripción a Amazon Prime</a>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>

                  <!-- Estilos CSS para el menú flotante -->
                  <style>
                    /* Estilo de la tabla */
                    table {
                      width: 100%;
                      border-spacing: 20px;
                    }

                    /* Estilo de las celdas */
                    td {
                      vertical-align: top;
                    }

                    /* Línea vertical divisora */
                    .divider {
                      border-left: 2px solid black;
                      padding-left: 20px;
                    }

                    /* Contenedor del menú */
                    .menu {
                      position: relative;
                      display: inline-block;
                    }

                    /* Estilo del botón */
                    .menu-button {
                      background-color: #232F3E; /* Un color oscuro más similar al de Amazon */
                      color: white; /* Texto en blanco */
                      padding: 10px 20px;
                      font-size: 16px;
                      border: none;
                      cursor: pointer;
                      font-family: Arial, sans-serif;
                      transition: background-color 0.3s ease; /* Transición suave para el hover */
                    }
                    h4{
                      color: black;
                    }

                    /* Estilo del botón al pasar el ratón */
                    .menu-button:hover {
                      background-color: #1a202c; /* Un tono más oscuro para el hover */
                    }

                    /* Contenido del menú desplegable */
                    .dropdown-content {
                      display: none;
                      position: absolute;
                      background-color: white;
                      box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
                      padding: 12px;
                      min-width: 300px;
                      z-index: 1;
                      transition: opacity 0.3s ease; /* Transición para la visibilidad */
                    }

                    /* Estilo para las opciones del menú */
                    .dropdown-content a,
                    .dropdown-content p {
                      color: #333; /* Texto en negro */
                      padding: 8px 12px;
                      text-decoration: none;
                      display: block;
                    }

                    /* Hover para los enlaces dentro del menú */
                    .dropdown-content a:hover,
                    .dropdown-content p:hover {
                      background-color: #f1f1f1; /* Fondo gris claro al pasar el ratón */
                    }

                    /* Mostrar el contenido del menú al pasar el ratón */
                    .menu:hover .dropdown-content {
                      display: block;
                      opacity: 1;
                    }

                    /* Mejora de la visibilidad en el hover del menú */
                    .dropdown-content a:active {
                      background-color: #ddd; /* Fondo aún más oscuro al hacer clic */
                    }
                  </style>

                    <a>
                    <a class="nav-item">
                        <a class="nav-link" href="perdidos">Devoluciones y Pedidos</a>
                    </a>
                    <a class="nav-item">
                        <a class="nav-link" href="carrito">🛒 Carrito</a>
                    </a>
                </ul>
            </div>
            <div class="navbar">
                <ul class="submenu-list">
                  <a id="menuBtn" onclick="openNav()">&#9776; Inicio</a>
                  <div id="mySidenav" class="sidenav">
                    <e href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</e>
                    <h5 class="section-title" style="text-align:left;">Tendencia</h5>
                    <e href="#">los mas vendidos</e>
                    <e href="#">lo nuevo</e>
                    <e href="#">productos del momento</e>
                  </div>
                  <a href="vender">Vender</a>
                  <a href="masvendidos">Lo más vendido</a>
                  <a href="videojuego">Video Juegos</a>
                  <a href="amazonbasics">Amazon Basics</a>
                  <a href="promocion">Promociones</a>
                  <a href="musica">Música</a>
                  <a href="lonuevo">Lo nuevo</a>
                  <a href="outlet">Outlet</a>
                  <a href="lonuevo">Lo más regalado</a>
                  <a href="hogar">Hogar y Cocina</a>
                  <a href="electronico">Electrónicos</a>
                  <a href="serviciocliente">Servicio al cliente</a>
                </ul>
              </div>
        </div>
      
    </header>    
</nav>
        <!-- Loader -->
  <div class="loader" id="loader">
    <div class="spinner-border text-primary" role="status">
      <span class="sr-only">Cargando...</span>
    </div>
  </div>
  <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        header {
            background-color: #232f3e;
            color: white;
            text-align: center;
            padding: 10px 0;
        }
        main {
            padding: 20px;
            background-color: white;
        }
        h1, h2 {
            color: #232f3e;
        }
        p {
            margin: 20px 0;
        }
        .content-section {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

<header>
    <h1>Aviso de Privacidad</h1>
</header>

<main>
    <section class="content-section">
        <h2>Última actualización: 4 de octubre de 2024.</h2>
        <p>Para ver la versión anterior, haga clic <a href="#">aquí</a>.</p>
    </section>

    <section class="content-section">
        <h2>Introducción</h2>
        <p>Estamos conscientes de la importancia que tiene para usted saber cómo utilizamos sus datos personales y le agradecemos que confíe que lo haremos con cuidado y sensatez. Este Aviso de Privacidad describe la forma en que Servicios Comerciales Amazon México, S. de R.L. de C.V., y sus filiales (conjuntamente "Amazon") recopilan y tratan sus datos personales a través de los sitios web, dispositivos, productos, servicios, tiendas en línea y aplicaciones de Amazon que hacen referencia a este Aviso de Privacidad (conjuntamente "Servicios de Amazon"). Al utilizar los Servicios de Amazon, usted está dando su consentimiento a las prácticas descritas en este Aviso de Privacidad.</p>
    </section>

    <section class="content-section">
        <h2>Datos de Contacto</h2>
        <p>Si tiene preguntas sobre como recabamos y usamos sus datos personales o sobre este aviso de privacidad, por favor póngase en contacto con nosotros. Nuestros datos de contacto son:</p>
        <p>Dirección: Blvd. Manuel Ávila Camacho 261, 5° piso, Colonia Polanco, Alcaldía Miguel Hidalgo, C.P. 11510, Ciudad de México.</p>
        <p>Correo electrónico: <a href="mailto:protecciondedatos@amazon.com.mx">protecciondedatos@amazon.com.mx</a></p>
        <p>Atención: Responsable del Departamento de Datos</p>
        <p>Si tiene preguntas sobre su cuenta o sus pedidos, por favor contacte al Servicio de Atención al Cliente haciendo clic <a href="#">aquí</a> o enviando un correo electrónico a la siguiente dirección: <a href="mailto:primary@amazon.com.mx">primary@amazon.com.mx</a>.</p>
    </section>

    <section class="content-section">
        <h2>¿Qué Datos Personales Recaba Amazon?</h2>
        <p>Recopilamos sus datos personales con el fin de proporcionar y mejorar continuamente nuestros productos y servicios. Los tipos de datos que recabamos incluyen:</p>
        <ul>
            <li><strong>Datos que Usted Nos Proporciona:</strong> Recibimos y almacenamos todos los datos que usted nos proporciona en relación con los Servicios de Amazon.</li>
            <li><strong>Datos Automáticos:</strong> Recopilamos y almacenamos automáticamente determinados tipos de datos acerca de su uso de los Servicios de Amazon.</li>
            <li><strong>Datos de Otras Fuentes:</strong> Recibimos datos de otras fuentes, como información actualizada de entrega y dirección.</li>
        </ul>
    </section>

    <section class="content-section">
        <h2>¿Con Qué Fines Utiliza Amazon sus Datos Personales?</h2>
        <p>Utilizamos sus datos personales para operar, proporcionar, desarrollar y mejorar los productos y servicios que ofrecemos a nuestros clientes. Los fines principales incluyen:</p>
        <ul>
            <li>Compra y entrega de productos y servicios.</li>
            <li>Proporcionar, solucionar problemas y mejorar los Servicios de Amazon.</li>
            <li>Recomendaciones y personalización.</li>
            <li>Proporcionar servicios de voz, imagen y cámara.</li>
            <li>Cumplir con nuestras obligaciones legales.</li>
            <li>Comunicarnos con usted.</li>
            <li>Prevención de fraude y riesgos de crédito.</li>
        </ul>
    </section>

    <section class="content-section">
        <h2>Publicidad y Marketing</h2>
        <p>Utilizamos sus datos personales para mostrar anuncios basados en sus intereses y para enviarle correos electrónicos u otras comunicaciones sobre productos y servicios que puedan ser de su interés. Si no desea recibir correos electrónicos, puede ajustar sus preferencias de comunicación.</p>
    </section>

    <section class="content-section">
        <h2>¿Cómo Ejercer Mis Derechos ARCO?</h2>
        <p>Usted puede ejercer sus derechos ARCO (Acceso, Rectificación, Cancelación y Oposición) sobre sus datos personales de acuerdo con lo establecido en la legislación aplicable.</p>
    </section>
</main>
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
      <ul><li class="nav_first"><a href="condiciones" id="" class="nav_a">Condiciones de uso</a> </li><li class="nav_last"><a href="privacidad" id="" class="nav_a">Aviso de privacidad</a> </li></ul><span>© 1996-2024, Amazon.com, Inc. o sus afiliados</span>
    </div>
    </div>
</body>
</html>