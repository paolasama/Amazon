<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mis Pedidos</title>
    <!-- Enlace a Bootstrap para el estilo visual -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <!-- Encabezado -->
    <header class="bg-dark text-white text-center py-4">
        <h1>Mis Pedidos</h1>
        <p>Aquí puedes ver todos tus pedidos recientes y detalles.</p>
    </header>

    <!-- Contenido Principal -->
    <div class="container mt-5">
        <div class="row">
            <!-- Menú lateral -->
            <div class="col-md-3">
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action">Perfil</a>
                    <a href="#" class="list-group-item list-group-item-action">Mis Pedidos</a>
                    <a href="#" class="list-group-item list-group-item-action">Direcciones</a>
                    <a href="#" class="list-group-item list-group-item-action">Métodos de Pago</a>
                    <a href="#" class="list-group-item list-group-item-action">Mis Listas</a>
                    <a href="#" class="list-group-item list-group-item-action">Configuración</a>
                </div>
            </div>

            <!-- Contenido de Mis Pedidos -->
            <div class="col-md-9">
                <!-- Sección de Pedidos -->
                <div class="card">
                    <div class="card-header">
                        <h4>Pedidos Recientes</h4>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Fecha</th>
                                    <th>Estado</th>
                                    <th>Total</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Pedido 1 -->
                                <tr>
                                    <td>1</td>
                                    <td>2025-01-05</td>
                                    <td><span class="badge badge-success">Enviado</span></td>
                                    <td>€45.99</td>
                                    <td><button class="btn btn-info">Ver Detalles</button></td>
                                </tr>
                                <!-- Pedido 2 -->
                                <tr>
                                    <td>2</td>
                                    <td>2024-12-20</td>
                                    <td><span class="badge badge-primary">Entregado</span></td>
                                    <td>€89.49</td>
                                    <td><button class="btn btn-info">Ver Detalles</button></td>
                                </tr>
                                <!-- Pedido 3 -->
                                <tr>
                                    <td>3</td>
                                    <td>2024-11-15</td>
                                    <td><span class="badge badge-warning">En Proceso</span></td>
                                    <td>€34.99</td>
                                    <td><button class="btn btn-info">Ver Detalles</button></td>
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
