<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Añadir película</title>
</head>
<body>
    <main>
        <h1>Añadir película</h1>
        <form action="#" method="post">
            <label for="titulo">Título de la película</label>
            <input type="text" id="titulo" name="titulo" required>

            <label for="director">Director</label>
            <input type="text" id="director" name="director" required>

            <label for="anio">Año de estreno</label>
            <input type="number" id="anio" name="anio" min="1888" max="2026">

            <label for="genero">Género</label>
            <select id="genero" name="genero">
                <option value="">Selecciona un género</option>
                <option value="accion">Acción</option>
                <option value="comedia">Comedia</option>
                <option value="drama">Drama</option>
                <option value="ciencia-ficcion">Ciencia ficción</option>
            </select>

            <label for="sinopsis">Sinopsis</label>
            <textarea id="sinopsis" name="sinopsis" rows="4"></textarea>

            <button type="submit">Guardar película</button>
        </form>
    </main>
</body>
</html>
