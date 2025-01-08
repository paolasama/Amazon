<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mis Recomendaciones</title>
    <!-- Enlace a Bootstrap para el estilo visual -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <!-- Encabezado -->
    <header class="bg-dark text-white text-center py-4">
        <h1>Mis Recomendaciones</h1>
        <p>Basado en tu historial de compras y preferencias.</p>
    </header>

    <!-- Contenido Principal -->
    <div class="container mt-5">
        <div class="row">
            <!-- Menú lateral -->
            <div class="col-md-3">
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action">Ver mis Listas de Deseos</a>
                    <a href="#" class="list-group-item list-group-item-action">Ver Compras Recientes</a>
                    <a href="#" class="list-group-item list-group-item-action">Ajustes de Recomendaciones</a>
                    <a href="#" class="list-group-item list-group-item-action">Ver Productos Sugeridos</a>
                </div>
            </div>

            <!-- Contenido de Recomendaciones -->
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h4>Productos Recomendados para Ti</h4>
                    </div>
                    <div class="card-body">
                        <p>Aquí tienes productos que podrían interesarte según tu actividad reciente.</p>

                        <!-- Carrusel de productos recomendados -->
                        <div class="row">
                            <!-- Producto 1 -->
                            <div class="col-md-4 mb-4">
                                <div class="card">
                                    <img src="./img/switch.webp" class="card-img-top" alt="Producto 1">
                                    <div class="card-body">
                                        <h5 class="card-title">Producto 1</h5>
                                        <p class="card-text">Descripción breve del producto 1.</p>
                                        <a href="#" class="btn btn-primary">Ver Producto</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Producto 2 -->
                            <div class="col-md-4 mb-4">
                                <div class="card">
                                    <img src="./img/gorro.jpg" class="card-img-top" alt="Producto 2">
                                    <div class="card-body">
                                        <h5 class="card-title">Producto 2</h5>
                                        <p class="card-text">Descripción breve del producto 2.</p>
                                        <a href="#" class="btn btn-primary">Ver Producto</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Producto 3 -->
                            <div class="col-md-4 mb-4">
                                <div class="card">
                                    <img src="./img/limpiador.webp" class="card-img-top" alt="Producto 3">
                                    <div class="card-body">
                                        <h5 class="card-title">Producto 3</h5>
                                        <p class="card-text">Descripción breve del producto 3.</p>
                                        <a href="#" class="btn btn-primary">Ver Producto</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <a href="#" class="btn btn-primary">Ver Más Recomendaciones</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Pie de página -->
    <footer class="bg-dark text-white text-center py-4 mt-5">
        <p>&copy; 2025 Amazon - Todos los derechos reservados</p>
    </footer>

    <!-- Enlaces a scripts de Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
