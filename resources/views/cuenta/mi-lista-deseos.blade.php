<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mis Listas de Deseos</title>
    <!-- Enlace a Bootstrap para el estilo visual -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <!-- Encabezado -->
    <header class="bg-dark text-white text-center py-4">
        <h1>Mis Listas de Deseos</h1>
        <p>Aquí puedes gestionar todos los productos que deseas comprar.</p>
    </header>

    <!-- Contenido Principal -->
    <div class="container mt-5">
        <div class="row">
            <!-- Menú lateral -->
            <div class="col-md-3">
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action">Lista de Deseos Actual</a>
                    <a href="#" class="list-group-item list-group-item-action">Añadir Producto</a>
                    <a href="#" class="list-group-item list-group-item-action">Historial de Compras</a>
                    <a href="#" class="list-group-item list-group-item-action">Configuración</a>
                </div>
            </div>

            <!-- Contenido Principal de la Lista de Deseos -->
            <div class="col-md-9">
                <!-- Lista de Deseos -->
                <div class="card">
                    <div class="card-header">
                        <h4>Productos en mi Lista de Deseos</h4>
                    </div>
                    <div class="card-body">
                        <p>Estos son los productos que has agregado a tu lista de deseos.</p>

                        <!-- Tabla de Productos -->
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Producto</th>
                                    <th>Precio</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Smartphone XYZ</td>
                                    <td>€499.99</td>
                                    <td>
                                        <button class="btn btn-danger">Eliminar</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Headphones ABC</td>
                                    <td>€79.99</td>
                                    <td>
                                        <button class="btn btn-danger">Eliminar</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <a href="#" class="btn btn-primary">Añadir Nuevo Producto</a>
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
