<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Cuenta</title>
    <!-- Enlace a Bootstrap para el estilo visual -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <!-- Encabezado -->
    <header class="bg-dark text-white text-center py-4">
        <h1>Mi Cuenta</h1>
        <p>Gestiona tu información personal, tus pedidos y más</p>
    </header>

    <!-- Contenido Principal -->
    <div class="container mt-5">
        <div class="row">
            <!-- Menú lateral -->
            <div class="col-md-3">
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action active">Perfil</a>
                    <a href="#" class="list-group-item list-group-item-action">Mis Pedidos</a>
                    <a href="#" class="list-group-item list-group-item-action">Direcciones</a>
                    <a href="#" class="list-group-item list-group-item-action">Métodos de Pago</a>
                    <a href="#" class="list-group-item list-group-item-action">Mis Listas</a>
                    <a href="#" class="list-group-item list-group-item-action">Configuración</a>
                </div>
            </div>

            <!-- Contenido principal de la cuenta -->
            <div class="col-md-9">
                <!-- Sección de perfil -->
                <div class="card">
                    <div class="card-header">
                        <h4>Perfil de Usuario</h4>
                    </div>
                    <div class="card-body">
                        <h5>Información Personal</h5>
                        <p><strong>Nombre:</strong> Juan Pérez</p>
                        <p><strong>Email:</strong> juanperez@example.com</p>
                        <p><strong>Teléfono:</strong> +34 123 456 789</p>
                        <button class="btn btn-primary">Editar Perfil</button>
                    </div>
                </div>

                <!-- Sección de mis pedidos -->
                <div class="card mt-4">
                    <div class="card-header">
                        <h4>Mis Pedidos</h4>
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
                                <tr>
                                    <td>1</td>
                                    <td>2025-01-05</td>
                                    <td>Enviado</td>
                                    <td>€45.99</td>
                                    <td><button class="btn btn-info">Ver Detalles</button></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>2024-12-20</td>
                                    <td>Entregado</td>
                                    <td>€89.49</td>
                                    <td><button class="btn btn-info">Ver Detalles</button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Sección de direcciones -->
                <div class="card mt-4">
                    <div class="card-header">
                        <h4>Direcciones</h4>
                    </div>
                    <div class="card-body">
                        <p><strong>Dirección de Envío:</strong> Calle Falsa 123, Madrid, España</p>
                        <button class="btn btn-secondary">Editar Dirección</button>
                    </div>
                </div>
                
                <!-- Sección de métodos de pago -->
                <div class="card mt-4">
                    <div class="card-header">
                        <h4>Métodos de Pago</h4>
                    </div>
                    <div class="card-body">
                        <p><strong>Tarjeta de Crédito:</strong> Visa - **** **** **** 1234</p>
                        <button class="btn btn-secondary">Agregar Método de Pago</button>
                    </div>
                </div>

                <!-- Sección de configuración -->
                <div class="card mt-4">
                    <div class="card-header">
                        <h4>Configuración</h4>
                    </div>
                    <div class="card-body">
                        <button class="btn btn-warning">Cambiar Contraseña</button>
                        <button class="btn btn-danger">Cerrar Sesión</button>
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
