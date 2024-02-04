<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    @vite(['resources/css/form.css'])
</head>
<body>

<body>
    <div class="container">
        <h1>Publicar</h1>
        <form  method="POST">
            @csrf
            <div class="form-group">
                <label for="wallet">Wallet:</label>
                <input type="text" id="wallet" name="wallet" required>
                <p class="sugerencia">¿No tienes wallet? Aquí tienes algunas sugerencias:</p>
                <div class="sugerencias">
                    <a href="https://metamask.io/"><img src="https://imgs.search.brave.com/n3lKvAJXxwaBXTVR58ILQw0eQina5w1NDTPHr-VdI0A/rs:fit:860:0:0/g:ce/aHR0cHM6Ly9jZG4u/d29ybGR2ZWN0b3Js/b2dvLmNvbS9sb2dv/cy9tZXRhbWFzay5z/dmc.svg" alt="Sugerencia 1"></a>
                    <a href="https://www.ejemplo.com/pagina2"><img src="{{ asset('img/sugerencia2.png') }}" alt="Sugerencia 2"></a>
                    <a href="https://www.ejemplo.com/pagina3"><img src="{{ asset('img/sugerencia3.png') }}" alt="Sugerencia 3"></a>
                </div>
            </div>
            <div class="form-group">
                <label for="autor">Autor:</label>
                <input type="text" id="autor" name="autor" required>
            </div>
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" required>
            </div>
            <div class="form-group">
                <label for="resumen">Resumen breve:</label>
                <textarea id="resumen" name="resumen" rows="4" required></textarea>
            </div>
            <div class="form-group">
                <label for="categoria">Categoría:</label>
                <select id="categoria" name="categoria" required>
                    <option value="">Selecciona una categoría</option>
                    <option value="categoria1">Categoría 1</option>
                    <option value="categoria2">Categoría 2</option>
                    <option value="categoria3">Categoría 3</option>
                </select>
            </div>
            <div class="form-group">
                <label for="arch">Archivo:</label>
                <input type="file" id="arch" name="arch" accept=".pdf,.doc,.docx" required>
            </div>
            
            <div class="button">
                <a href="/Visualaizer">Crear</a>
            </div>
        </form>
    </div>
</body>
</body>
</html>