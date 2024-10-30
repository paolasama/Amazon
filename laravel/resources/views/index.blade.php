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
            <a class="navbar-brand" href="index.blade.php">
                <img src="./img/amazon-logo.png" alt="Logo de Amazon">
            </a>
            <a href="#">ubicacion</a>

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
                <button class="menu-button">Hola identificante, Cuenta y listas</button>
                <div class="dropdown-content">
                  <a href="#" class="btn-seguro">identificante</a>
                  <a>¿Eres un cliente nuevo?<a href="#">Empieza aqui</a>
                  <table class="table table-bordered">
                    <table>
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
                            <!-- Columna "Mi cuenta" -->
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
                    border-spacing: 30px;
                }

                /* Estilo de las celdas */
                td {
                    vertical-align: top;
                }

                /* Línea vertical divisora */
                    .divider {
                    border-left: 2px solid black;
                    min-height: 300px; /* Asegura una altura mínima */
                    margin-left: 20px;
                    padding-left: 20px;
                }
               /* Contenedor del menú */
                .menu {
                    position: relative;
                    display: inline-block;
                }

                /* Estilo del botón */
                .menu-button {
                    background-color: #0f151d; /* Color oscuro que mencionaste */
                    color: white; /* Texto en blanco */
                    padding: 10px 20px; /* Espaciado interno del botón */
                    font-size: 16px;
                    border: none; /* Sin borde */
                    cursor: pointer;
                    font-family: Arial, sans-serif; /* Fuente similar a Amazon */
                }

                /* Estilo del botón al pasar el ratón */
                .menu-button:hover {
                    background-color: #1a202c; /* Un tono ligeramente más claro al hacer hover */
                }

                /* Contenido del menú desplegable */
                .dropdown-content {
                    display: none;
                    position: absolute;
                    background-color: white;
                    box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
                    color: black;
                    padding: 12px;
                    min-width: 250px;
                    z-index: 1;
                }

                /* Estilo para las opciones del menú */
                .dropdown-content a {
                    color: #0f151d;
                    padding: 8px 12px;
                    text-decoration: none;
                    display: block;
                }

                .dropdown-content a:hover {
                    background-color: #f1f1f1;
                }

                /* Mostrar el contenido del menú al pasar el ratón */
                .menu:hover .dropdown-content {
                    display: block;
                }
                </style>
                    <a>
                    <a class="nav-item">
                        <a class="nav-link" href="#">Devoluciones y Pedidos</a>
                    </a>
                    <a class="nav-item">
                        <a class="nav-link" href="#">🛒 Carrito</a>
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
                  <a href="#">Vender</a>
                  <a href="#">Lo más vendido</a>
                  <a class="nav-item">
                    <select class="custom-select-3">
                    <option value="all">Prime</option>
                    <option value="electronics">Electrónicos</option>
                    <option value="toys">Juguetes</option>
                    <option value="home">Hogar y Cocina</option>
                    <option value="books">Libros</option>
                    </select>
                    <a>
                  <a href="#">Amazon Basics</a>
                  <a href="#">Promociones</a>
                  <a href="#">Música</a>
                  <a href="#">Lo nuevo</a>
                  <a href="#">Outlet</a>
                  <a href="#">Lo más regalado</a>
                  <a href="#">Hogar y Cocina</a>
                  <a href="#">Electrónicos</a>
                  <a href="#">Juguetes y juegos de mesa</a>
                </ul>
              </div>
        </div>
      
    </header>    
</nav>
    <!-- Carrusel -->
    <div class="carousel">
        <div class="carousel-inner">
          <img src="./img/libro.jpg" alt="Imagen 1">
          <img src="./img/juguete.jpg" alt="Imagen 2">
          <img src="./img/cocina.jpg" alt="Imagen 3">
        </div>
      </div>
    <!-- Loader -->
    <div class="loader" id="loader">
        <div class="spinner-border text-primary" role="status">
            <span class="sr-only">Cargando...</span>
        </div>
    </div>
      <div class="main-container">
        <div class="container">
          <div class="section-container">
            <div class="container">
              <div class="table-container">
                <!-- Sección 1: Ofertas en tendencia -->
                <div class="section">
                  <h5 class="section-title" style="text-align: center;">Ofertas en tendencia</h5>
                  <div style="text-align: center;">
                    <img src="./img/anuncios.png" alt="Anuncio" class="custom-size">                 
                  </div>
                  <div style="text-align: center;">
                    <a href="#" id="verMasBtn" class="btn btn-primary">Ver más</a>
                  </div>
                </div>
      
                <!-- Sección 2: Accesorios para gamers -->
                <div class="section">
                  <h5 class="section-title" style="text-align: center;">Accesorios para gamers a 24 meses</h5>
                  <div style="text-align: center;">
                    <img src="./img/nintendo.jpg" alt="Nintendo" class="img-fluid">
                    <p>Nintendo</p>
                  </div>
                  <div style="display: flex; justify-content: space-around; align-items: center;">
                    <div style="text-align: center;">
                      <img src="./img/playstation.jpg" alt="Playstation" class="img-fluid">
                      <p>Playstation</p>
                    </div>
                    <div style="text-align: center;">
                      <img src="./img/xbox.jpg" alt="Xbox" class="img-fluid">
                      <p>Xbox</p>
                    </div>
                    <div style="text-align: center;">
                      <img src="./img/pc.jpg" alt="PC" class="img-fluid">
                      <p>PC</p>
                    </div>
                  </div>
                  <div style="text-align: center; margin-top: 20px;">
                    <a href="#" id="verMasBtn" class="btn btn-primary">Ver más</a>
                  </div>
                </div>
      
                <!-- Sección 3: Productos para Halloween -->
                <div class="section">
                  <h5 class="section-title" style="text-align: center;">Hasta 20% en productos para Halloween</h5>
                  <div style="text-align: center;">
                    <img src="./img/disfras.jpg" alt="Nintendo" class="img-fluid">
                    <p>Todos los Productos</p>
                  </div>
                  <div style="display: flex; justify-content: space-around; align-items: center;">
                    <div style="text-align: center;">
                      <img src="./img/disfraces.jpg" alt="Playstation" class="img-fluid">
                      <p>Disfraces</p>
                    </div>
                    <div style="text-align: center;">
                      <img src="./img/accesorios.jpg" alt="Xbox" class="img-fluid">
                      <p>Accesorios</p>
                    </div>
                    <div style="text-align: center;">
                      <img src="./img/decoracion.jpg" alt="PC" class="img-fluid">
                      <p>Decoracion</p>
                    </div>
                  </div>
                  <div style="text-align: center; margin-top: 20px;">
                    <a href="#" id="verMasBtn" class="btn btn-primary">Ver más</a>
                  </div>
                </div>
      
                <!-- Sección 4: Inicia sesión -->
                <div class="section text-center">
                  <h5 class="section-title">Inicia sesión para vivir tu mejor experiencia</h5>
                  <button class="btn-seguro">Iniciar sesión de forma segura</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <style>
      .table-container {
        margin: 0;
        padding: 0;
      }
      .table td, .table th {
        padding: 5px;
      }
      .img-fluid {
        max-width: 100%;
        height: auto;
      }
      .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
      }
      .section-title {
        font-weight: bold;
      }
      .section {
        margin-bottom: 20px;
      }
      </style>
        <div class="main-container">
          <div class="container">
            <div class="section-container">
              <div class="container">
                <div class="table-container">
                  <!-- Sección 1: Ofertas en tendencia -->
                  <div class="section">
                    <h5 class="section-title" style="text-align: center;">Hasta 25% en audífonos y bocinas</h5>
                    <!-- Imagen de disfraz -->
                    <div style="text-align: center;">
                      <img src="./img/audifono_inalambricos.jpg" alt="Nintendo" loading="lazy" class="img-fluid">
                      <p>Audifono inalambricos</p>
                    </div>
                    <!-- Contenedor para Playstation, Xbox y PC -->
                    <div style="display: flex; justify-content: space-around; align-items: center;">
                      <!-- Imagen de Playstation -->
                      <div style="text-align: center;">
                        <img src="./img/in_ear.jpg" alt="Playstation" loading="lazy" class="img-fluid">
                        <p>In Ear</p>
                      </div>
                      <!-- Imagen de Xbox -->
                      <div style="text-align: center;">
                        <img src="./img/on-ear.jpg" alt="Xbox" loading="lazy" class="img-fluid">
                        <p>On Ear</p>
                      </div>
                      <!-- Imagen de PC -->
                      <div style="text-align: center;">
                        <img src="./img/adaptadores.jpg" alt="PC" loading="lazy" class="img-fluid">
                        <p>Adaptadores</p>
                      </div>
                    </div>
                    <!-- Botón de acción -->
                    <div style="text-align: center; margin-top: 20px;">
                      <a href="#" id="verMasBtn" class="btn btn-primary">Ver más</a>
                    </div>
                  </div>
        
                  <!-- Repite las secciones adicionales aquí... -->
                  <div class="section">
                    <h5 class="section-title" style="text-align: center;">Ahorra en tus marcas favoritas</h5>
                    <!-- Imagen de disfraz -->
                    <div style="text-align: center;">
                      <img src="./img/apple.jpg" alt="Nintendo" loading="lazy" class="img-fluid">
                      <p>Apple</p>
                    </div>
                    <!-- Contenedor para Playstation, Xbox y PC -->
                    <div style="display: flex; justify-content: space-around; align-items: center;">
                      <!-- Imagen de Playstation -->
                      <div style="text-align: center;">
                        <img src="./img/samsung.jpg" alt="Playstation" loading="lazy" class="img-fluid">
                        <p>Samsung</p>
                      </div>
                      <!-- Imagen de Xbox -->
                      <div style="text-align: center;">
                        <img src="./img/huawei.jpg" alt="Xbox" loading="lazy" class="img-fluid">
                        <p>Huawei</p>
                      </div>
                      <!-- Imagen de PC -->
                      <div style="text-align: center;">
                        <img src="./img/xiaomi.jpg" alt="PC" loading="lazy" class="img-fluid">
                        <p>Xiaomi</p>
                      </div>
                    </div>
                    <!-- Botón de acción -->
                    <div style="text-align: center; margin-top: 20px;">
                      <a href="#" id="verMasBtn" class="btn btn-primary">Ver más</a>
                    </div>
                  </div>
                  <div class="section">
                    <h5 class="section-title" style="text-align: center;">Tus juguetes favoritos a 24 meses</h5>
                    <!-- Imagen de disfraz -->
                    <div style="text-align: center;">
                      <img src="./img/juguetes.jpg" alt="Nintendo" loading="lazy" class="img-fluid">
                      <p>Juguetes</p>
                    </div>
                    <!-- Contenedor para Playstation, Xbox y PC -->
                    <div style="display: flex; justify-content: space-around; align-items: center;">
                      <!-- Imagen de Playstation -->
                      <div style="text-align: center;">
                        <img src="./img/pokemon.jpg" alt="Playstation" loading="lazy" class="img-fluid">
                        <p>Pokemon</p>
                      </div>
                      <!-- Imagen de Xbox -->
                      <div style="text-align: center;">
                        <img src="./img/hot_wheels.jpg" alt="Xbox" loading="lazy" class="img-fluid">
                        <p>Hot Wheels</p>
                      </div>
                      <!-- Imagen de PC -->
                      <div style="text-align: center;">
                        <img src="./img/yugioh.jpg" alt="PC" loading="lazy" class="img-fluid">
                        <p>Yugioh</p>
                      </div>
                    </div>
                    <!-- Botón de acción -->
                    <div style="text-align: center; margin-top: 20px;">
                      <a href="#" id="verMasBtn" class="btn btn-primary">Ver más</a>
                    </div>
                  </div>
                  <div class="section">
                    <h5 class="section-title" style="text-align: center;">Ofertas por la Semana del Auto</h5>
                    <!-- Imagen de disfraz -->
                    <div style="text-align: center;">
                      <img src="./img/auto_moto.jpg" loading="lazy" alt="Nintendo" class="img-fluid">
                      <p>Todos para auto y moto</p>
                    </div>
                    <!-- Contenedor para Playstation, Xbox y PC -->
                    <div style="display: flex; justify-content: space-around; align-items: center;">
                      <!-- Imagen de Playstation -->
                      <div style="text-align: center;">
                        <img src="./img/cuidado.jpg" alt="Playstation" loading="lazy" class="img-fluid">
                        <p>Cuidado</p>
                      </div>
                      <!-- Imagen de Xbox -->
                      <div style="text-align: center;">
                        <img src="./img/aceites.jpg" alt="Xbox" loading="lazy" class="img-fluid">
                        <p>Aceites</p>
                      </div>
                      <!-- Imagen de PC -->
                      <div style="text-align: center;">
                        <img src="./img/llantas.jpg" alt="PC" loading="lazy" class="img-fluid">
                        <p>Llantas</p>
                      </div>
                    </div>
                    <!-- Botón de acción -->
                    <div style="text-align: center; margin-top: 20px;">
                      <a href="#" id="verMasBtn" class="btn btn-primary">Ver más</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- metodo de pago -->
        <style>
        .main-container {
            display: flex;
            justify-content: center;
            align-items: center;
          }
          .container {
            margin: 0;
            padding: 0;
          }
          .table-container {
            margin: 0;
            padding: 0;
          }
          .table td, .table th {
            padding: 5px;
          }
          .img-fluid {
            max-width: 100%;
            height: auto;
          }
          .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
          }
          .section-title {
            font-weight: bold;
          }
          .section {
            margin-bottom: 10px;
            margin-bottom: 20px;
          }
          </style>
          <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .payment-section {
            width: 80%;
            max-width: 800px;
            margin: 30px auto;
            padding: 20px;
            background: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        .payment-section h2 {
            text-align: center;
            color: #333;
        }
        .payment-section p {
            text-align: center;
            color: #666;
        }
        .payment-methods {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            margin-top: 20px;
        }
        .payment-method {
            text-align: center;
            margin: 10px;
        }
        .payment-method img {
            width: 60px;
            height: auto;
        }
        .main-container {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .container, .table-container {
            margin: 0;
            padding: 0;
        }
        .table td, .table th {
            padding: 5px;
        }
        .img-fluid {
            max-width: 100%;
            height: auto;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
        .section-title {
            font-weight: bold;
        }
        .section {
            margin-bottom: 20px;
        }
    </style></style>
</head>
<body>
    <div class="payment-section">
        <h2>Descubre nuestros Métodos de Pago</h2>
        <p>Conoce las opciones que ofrecemos para realizar tus pagos de forma segura y conveniente.</p>
        <div class="payment-methods">
            <div class="payment-method">
                <img src="./img/visa.png" alt="Visa" loading="lazy" class="img-fluid">
                <p>Visa</p>
            </div>
            <div class="payment-method">
                <img src="./img/mastercard.png" alt="MasterCard" loading="lazy" class="img-fluid">
                <p>MasterCard </p>
              </div>
            <div class="payment-method">
                <img src="./img/Amex.png" alt="American Express" loading="lazy" class="img-fluid">
                <p>American Express</p>
            </div>
            <div class="payment-method">
                <img src="./img/PayPal.png" alt="PayPal" loading="lazy" class="img-fluid">
                <p>PayPal</p>
            </div>
        </div>
    </div>
      </div>
    </div>
  </div>
  <!-- footer -->
  <div class="navLeftFooter nav-sprite-v1" id="navFooter">
    <a href="index.blade.php" id="navBackToTop" aria-label="Inicio de página">
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