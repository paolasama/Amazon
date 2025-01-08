<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Cuenta de Vendedor</title>
    <!-- Enlace a Bootstrap para el estilo visual -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <!-- Encabezado -->
    <header class="bg-dark text-white text-center py-4">
        <h1>Mi Cuenta de Vendedor</h1>
        <p>Gestiona tus productos, ventas y pagos desde aquí.</p>
    </header>

    <!-- Contenido Principal -->
    <div class="container mt-5">
        <div class="row">
            <!-- Menú lateral -->
            <div class="col-md-3">
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action">Perfil del Vendedor</a>
                    <a href="#" class="list-group-item list-group-item-action">Mis Productos</a>
                    <a href="#" class="list-group-item list-group-item-action">Ventas Realizadas</a>
                    <a href="#" class="list-group-item list-group-item-action">Pagos</a>
                    <a href="#" class="list-group-item list-group-item-action">Historial de Actividad</a>
                    <a href="#" class="list-group-item list-group-item-action">Configuración</a>
                </div>
            </div>

            <!-- Contenido Principal de la Cuenta -->
            <div class="col-md-9">
                <!-- Información de Productos -->
                <div class="card">
                    <div class="card-header">
                        <h4>Mis Productos</h4>
                    </div>
                    <div class="card-body">
                        <p>En esta sección podrás gestionar tus productos. Añadir, editar o eliminar productos de tu tienda.</p>
                        <a href="#" class="btn btn-success">Añadir Nuevo Producto</a>
                    </div>
                </div>

                <!-- Información de Ventas -->
                <div class="card mt-4">
                    <div class="card-header">
                        <h4>Ventas Realizadas</h4>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Fecha</th>
                                    <th>Producto</th>
                                    <th>Cantidad</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>2025-01-05</td>
                                    <td>Camisa de Algodón</td>
                                    <td>2</td>
                                    <td>€29.99</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>2024-12-20</td>
                                    <td>Pantalón Jeans</td>
                                    <td>1</td>
                                    <td>€34.99</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Información de Pagos -->
                <div class="card mt-4">
                    <div class="card-header">
                        <h4>Pagos Pendientes</h4>
                    </div>
                    <div class="card-body">
                        <p>Los pagos por tus ventas recientes son procesados aquí.</p>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Fecha de Pago</th>
                                    <th>Monto</th>
                                    <th>Estado</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>2025-01-10</td>
                                    <td>€64.98</td>
                                    <td><span class="badge badge-success">Completado</span></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>2024-12-25</td>
                                    <td>€34.99</td>
                                    <td><span class="badge badge-warning">Pendiente</span></td>
                                </tr>
                            </tbody>
                        </table>
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
