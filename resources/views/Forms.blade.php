<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    @vite(['resources/css/form.css'])
</head>
<body>

<body  >
    
<div style="position: absolute; top: 0; left: 0; width: 100%; z-index: -1;">
  <svg
    preserveAspectRatio="none"
    viewBox="0 0 1200 120"
    xmlns="http://www.w3.org/2000/svg"
    style="fill: #ca3f3f; width: 356%; height: 102px; transform: scaleX(-1);"
  >
    <path
      d="M0 0v46.29c47.79 22.2 103.59 32.17 158 28 70.36-5.37 136.33-33.31 206.8-37.5 73.84-4.36 147.54 16.88 218.2 35.26 69.27 18 138.3 24.88 209.4 13.08 36.15-6 69.85-17.84 104.45-29.34C989.49 25 1113-14.29 1200 52.47V0z"
      opacity=".25"
    />
    <path
      d="M0 0v15.81c13 21.11 27.64 41.05 47.69 56.24C99.41 111.27 165 111 224.58 91.58c31.15-10.15 60.09-26.07 89.67-39.8 40.92-19 84.73-46 130.83-49.67 36.26-2.85 70.9 9.42 98.6 31.56 31.77 25.39 62.32 62 103.63 73 40.44 10.79 81.35-6.69 119.13-24.28s75.16-39 116.92-43.05c59.73-5.85 113.28 22.88 168.9 38.84 30.2 8.66 59 6.17 87.09-7.5 22.43-10.89 48-26.93 60.65-49.24V0z"
      opacity=".5"
    />
    <path d="M0 0v5.63C149.93 59 314.09 71.32 475.83 42.57c43-7.64 84.23-20.12 127.61-26.46 59-8.63 112.48 12.24 165.56 35.4C827.93 77.22 886 95.24 951.2 90c86.53-7 172.46-45.71 248.8-84.81V0z" />
  </svg>
</div>


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
                    <a href="https://metamask.io/"><img src="https://imgs.search.brave.com/n3lKvAJXxwaBXTVR58ILQw0eQina5w1NDTPHr-VdI0A/rs:fit:860:0:0/g:ce/aHR0cHM6Ly9jZG4u/d29ybGR2ZWN0b3Js/b2dvLmNvbS9sb2dv/cy9tZXRhbWFzay5z/dmc.svg" alt="Sugerencia 1"></a>
                    <a href="https://metamask.io/"><img src="https://imgs.search.brave.com/n3lKvAJXxwaBXTVR58ILQw0eQina5w1NDTPHr-VdI0A/rs:fit:860:0:0/g:ce/aHR0cHM6Ly9jZG4u/d29ybGR2ZWN0b3Js/b2dvLmNvbS9sb2dv/cy9tZXRhbWFzay5z/dmc.svg" alt="Sugerencia 1"></a>
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
    
    <div style="position: fixed; bottom: 0; left: 0; width: 100%; z-index: -1;">
  <svg
    preserveAspectRatio="none"
    viewBox="0 0 1200 120"
    xmlns="http://www.w3.org/2000/svg"
    style="fill: #ca3f3f; width: 173%; height: 137px; transform: rotate(180deg);"
  >
    <path
      d="M0 0v46.29c47.79 22.2 103.59 32.17 158 28 70.36-5.37 136.33-33.31 206.8-37.5 73.84-4.36 147.54 16.88 218.2 35.26 69.27 18 138.3 24.88 209.4 13.08 36.15-6 69.85-17.84 104.45-29.34C989.49 25 1113-14.29 1200 52.47V0z"
      opacity=".25"
    />
    <path
      d="M0 0v15.81c13 21.11 27.64 41.05 47.69 56.24C99.41 111.27 165 111 224.58 91.58c31.15-10.15 60.09-26.07 89.67-39.8 40.92-19 84.73-46 130.83-49.67 36.26-2.85 70.9 9.42 98.6 31.56 31.77 25.39 62.32 62 103.63 73 40.44 10.79 81.35-6.69 119.13-24.28s75.16-39 116.92-43.05c59.73-5.85 113.28 22.88 168.9 38.84 30.2 8.66 59 6.17 87.09-7.5 22.43-10.89 48-26.93 60.65-49.24V0z"
      opacity=".5"
    />
    <path d="M0 0v5.63C149.93 59 314.09 71.32 475.83 42.57c43-7.64 84.23-20.12 127.61-26.46 59-8.63 112.48 12.24 165.56 35.4C827.93 77.22 886 95.24 951.2 90c86.53-7 172.46-45.71 248.8-84.81V0z" />
  </svg>
</div>

</body>
</body>
</html>