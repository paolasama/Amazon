<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Amazon</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            height: 100vh;
            margin: 0;
        }

        .dashboard-container {
            background-color: white;
            padding: 40px;
            border: 1px solid #ddd;
            border-radius: 8px;
            width: 80%;
            max-width: 800px;
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
        }

        .dashboard-header {
            text-align: center;
            margin-bottom: 30px;
        }

        .dashboard-header h1 {
            font-size: 32px;
            color: #333;
        }

        .dashboard-content {
            display: flex;
            justify-content: space-between;
        }

        .dashboard-content div {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.05);
            width: 45%;
        }

        .logout-button {
            margin-top: 30px;
            display: block;
            width: 150px;
            padding: 10px;
            border: none;
            background-color: #e63946;
            color: white;
            cursor: pointer;
            border-radius: 5px;
            text-align: center;
        }

        .logout-button:hover {
            background-color: #d62839;
        }
    </style>
</head>
<body>
    <div class="dashboard-container">
        <div class="dashboard-header">
            <h1>Bienvenido a tu Dashboard</h1>
        </div>
        <div class="dashboard-content">
            <div>
                <h2>Información del Usuario</h2>
                <!-- Aquí puedes mostrar información específica del usuario -->
            </div>
            <div>
                <h2>Acciones Rápidas</h2>
                <!-- Agrega enlaces, botones u opciones rápidas aquí -->
            </div>
        </div>
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="logout-button">Cerrar Sesión</button>
        </form>
    </div>
</body>
</html>
