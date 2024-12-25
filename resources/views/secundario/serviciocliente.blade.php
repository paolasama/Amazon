<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servicio al Cliente</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            line-height: 1.6;
        }

        /* Header */
        .header {
            background-color: #232f3e;
            color: white;
            padding: 20px;
            text-align: center;
        }
        .header h1 {
            font-size: 2.5em;
        }
        .header p {
            font-size: 1.2em;
        }

        /* Main content */
        .main {
            max-width: 1000px;
            margin: 20px auto;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .main h2 {
            margin-bottom: 20px;
            color: #232f3e;
        }

        .faq {
            margin-bottom: 20px;
        }
        .faq h3 {
            font-size: 1.2em;
            margin-bottom: 10px;
            color: #1a73e8;
        }
        .faq p {
            margin-bottom: 15px;
            padding-left: 10px;
        }

        /* Contact Section */
        .contact {
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 8px;
        }
        .contact h3 {
            font-size: 1.5em;
            margin-bottom: 10px;
            color: #232f3e;
        }
        .contact form {
            display: flex;
            flex-direction: column;
        }
        .contact label {
            font-weight: bold;
            margin-top: 10px;
        }
        .contact input,
        .contact textarea,
        .contact button {
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 1em;
        }
        .contact textarea {
            resize: none;
            height: 100px;
        }
        .contact button {
            background-color: #1a73e8;
            color: white;
            border: none;
            cursor: pointer;
            margin-top: 10px;
        }
        .contact button:hover {
            background-color: #005bb5;
        }

        /* Footer */
        .footer {
            text-align: center;
            padding: 10px;
            margin-top: 30px;
            background-color: #232f3e;
            color: white;
        }
    </style>
</head>
<body>

    <!-- Header -->
    <div class="header">
        <h1>Servicio al Cliente</h1>
        <p>Estamos aquí para ayudarte con cualquier consulta o problema.</p>
    </div>

    <!-- Main content -->
    <div class="main">
        <h2>Preguntas Frecuentes</h2>

        <div class="faq">
            <h3>¿Cómo puedo rastrear mi pedido?</h3>
            <p>Para rastrear tu pedido, ve a "Mis Pedidos" y selecciona el pedido que deseas rastrear. Haz clic en "Rastrear Envío".</p>
        </div>

        <div class="faq">
            <h3>¿Cuál es la política de devoluciones?</h3>
            <p>Puedes devolver la mayoría de los productos en un plazo de 30 días después de la entrega. Ve a "Mis Pedidos" y selecciona "Iniciar Devolución".</p>
        </div>

        <div class="faq">
            <h3>¿Qué hago si recibí un producto defectuoso?</h3>
            <p>Contacta con nuestro equipo de soporte o utiliza el proceso de devolución para solicitar un reemplazo.</p>
        </div>

        <div class="faq">
            <h3>¿Cómo actualizo mi información de cuenta?</h3>
            <p>Inicia sesión, ve a "Mi Cuenta" y selecciona "Configuración de Perfil" para actualizar tu información.</p>
        </div>

        <!-- Contact Section -->
        <div class="contact">
            <h3>Contacto</h3>
            <p>Si no encontraste la respuesta que buscabas, por favor, envíanos un mensaje:</p>
            <form action="#">
                <label for="name">Nombre</label>
                <input type="text" id="name" name="name" placeholder="Tu nombre" required>

                <label for="email">Correo Electrónico</label>
                <input type="email" id="email" name="email" placeholder="Tu correo electrónico" required>

                <label for="message">Mensaje</label>
                <textarea id="message" name="message" placeholder="Escribe tu consulta aquí" required></textarea>

                <button type="submit">Enviar</button>
            </form>
        </div>
    </div>

    <!-- Footer -->
    <div class="footer">
        <p>Gracias por elegir nuestro servicio al cliente. Estamos aquí para ayudarte.</p>
    </div>

</body>
</html>
