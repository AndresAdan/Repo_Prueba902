<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Maestros</title>
    
    <!-- Agrega el enlace al archivo de estilos de Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
    <style>
        /* Añade estilos personalizados aquí */

        body {
            background-color: #f8f9fa;
        }

        .container {
            max-width: 400px;
            margin: 50px auto;
            border: 1px solid #dee2e6; /* Añade un borde al contenedor del formulario */
            border-radius: 5px; /* Añade esquinas redondeadas */
            padding: 20px; /* Añade espacio interno */
            background-color: #ffffff; /* Fondo blanco para el formulario */
        }

        h2 {
            text-align: center;
            color: #007bff;
        }

        label {
            font-weight: bold;
        }

        .form-group {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Crear Maestros</h2>
        <form action="{{ route('teachers.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="Nombre">Nombre:</label>
                <input type="text" class="form-control" id="Nombre" name="Nombre" required>
            </div>

            <div class="form-group">
                <label for="Apellidos">Apellidos:</label>
                <input type="text" class="form-control" id="Apellidos" name="Apellidos" required>
            </div>

            <div class="form-group">
                <label for="Direccion">Direccion:</label>
                <input type="text" class="form-control" id="Direccion" name="Direccion" required>
            </div>

            <div class="form-group">
                <label for="Telefono">Telefono:</label>
                <input type="text" class="form-control" id="Telefono" name="Telefono" required>
            </div>

            <div class="form-group">
                <label for="Especialidad">Especialidad:</label>
                <input type="text" class="form-control" id="Especialidad" name="Especialidad" required>
            </div>

            <div class="form-group">
                <label for="NivelEstudios">NivelEstudios:</label>
                <input type="text" class="form-control" id="NivelEstudios" name="NivelEstudios" required>
            </div>

            <!-- Repite la estructura para los otros campos -->

            <button type="submit" class="btn btn-primary btn-block">Crear Maestro</button>
            <a href="{{ route('teachers.index') }}" class="btn btn-danger btn-block mt-2">Regresar a la Lista</a>

        </form>
    </div>

    <!-- Agrega los scripts de Bootstrap al final del cuerpo del documento para un mejor rendimiento -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>