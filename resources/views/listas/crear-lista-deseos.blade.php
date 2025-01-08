<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Lista de Deseos</title>
    <!-- Enlace a Bootstrap para el estilo visual -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <!-- Encabezado -->
    <header class="bg-dark text-white text-center py-4">
        <h1>Crear tu Lista de Deseos</h1>
        <p>Encuentra tus productos favoritos y guárdalos para más tarde</p>
    </header>

    <!-- Contenido Principal -->
    <div class="container mt-4">
        <div class="row">
            <!-- Lista de productos recomendados -->
            <div class="col-md-12">
                <h2>Productos Recomendados</h2>
                <p>Aquí puedes agregar los productos que más te gustan.</p>
            </div>
        </div>

        <div class="row">
            <!-- Producto 1 -->
            <div class="col-md-4">
                <div class="card">
                    <img src="./img/iphone12.jpg" class="card-img-top" alt="Producto 1">
                    <div class="card-body">
                        <h5 class="card-title">iphone12</h5>
                        <p class="card-text">Descripción breve del producto 1.</p>
                        <a href="#" class="btn btn-success">Agregar a la lista</a>
                    </div>
                </div>
            </div>

            <!-- Producto 2 -->
            <div class="col-md-4">
                <div class="card">
                    <img src="./img/audi.webp" class="card-img-top" alt="Producto 2">
                    <div class="card-body">
                        <h5 class="card-title">audifono</h5>
                        <p class="card-text">Descripción breve del producto 2.</p>
                        <a href="#" class="btn btn-success">Agregar a la lista</a>
                    </div>
                </div>
            </div>

            <!-- Producto 3 -->
            <div class="col-md-4">
                <div class="card">
                    <img src="./img/relo.webp" class="card-img-top" alt="Producto 3">
                    <div class="card-body">
                        <h5 class="card-title">reloj</h5>
                        <p class="card-text">Descripción breve del producto 3.</p>
                        <a href="#" class="btn btn-success">Agregar a la lista</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Enlace para ver la lista de deseos -->
        <div class="mt-4 text-center">
            <a href="/mi-lista-deseos" class="btn btn-primary">Ver mi Lista de Deseos</a>
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
