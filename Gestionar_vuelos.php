<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles_4.css">
    <title>Gestionar Vuelos</title>
    <script>
        function validarFormularioVuelo() {
            const origen = document.getElementById('origen').value;
            const destino = document.getElementById('destino').value;
            const fecha = document.getElementById('fecha').value;
            const plazas = document.getElementById('plazas_disponibles').value;
            const precio = document.getElementById('precio').value;

            if (origen === "" || destino === "" || fecha === "" || plazas === "" || precio === "") {
                alert("Todos los campos son obligatorios.");
                return false;
            }

            if (plazas < 1 || precio < 0) {
                alert("Las plazas disponibles y el precio deben ser valores positivos.");
                return false;
            }

            return true;
        }
    </script>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="tarea.php">Inicio</a></li>
                <li><a href="search.html">Buscar Destinos</a></li>
                <li><a href="view_cart.php">Carrito de Compras</a></li>
            </ul>
        </nav>
    </header>

    <div class="form-container">
        <h1>Agregar Nuevo Vuelo</h1>
        <form action="procesar_vuelo.php" method="POST" onsubmit="return validarFormularioVuelo()">
            <label for="origen">Origen:</label>
            <input type="text" id="origen" name="origen" class="input-field" required>

            <label for="destino">Destino:</label>
            <input type="text" id="destino" name="destino" class="input-field" required>

            <label for="fecha">Fecha:</label>
            <input type="date" id="fecha" name="fecha" class="input-field" required>

            <label for="plazas_disponibles">Plazas Disponibles:</label>
            <input type="number" id="plazas_disponibles" name="plazas_disponibles" class="input-field" required>

            <label for="precio">Precio:</label>
            <input type="number" step="0.01" id="precio" name="precio" class="input-field" required>

            <button type="submit" class="btn">Agregar Vuelo</button>
        </form>
    </div>
</body>
</html>