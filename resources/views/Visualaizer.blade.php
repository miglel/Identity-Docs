<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualizador de PDF</title>
    <link rel="stylesheet" href="styles.css">
    @vite(['resources/css/visulaizer.css'])
</head>
<body>

<div id="viewerContainer">
    <iframe id="pdfViewer" src="{{ asset('pdf/p1.pdf') }}"></iframe>
    <div class="pdf-info">
        <div class="card">
            <h5>FELICIDADES TUDOCUMENTO SE CARGO CON EXITO</h5>
            <div class="tags-container">
                <span class="tag">Tag 1</span>
                <span class="tag">Tag 2</span>
                <span class="tag">Tag 3</span>
                <span class="tag">Tag 4</span>
            </div>
        </div>
        <div class="json-container">
            <div class="json-title">Datos De La Publicacion</div>
            <pre id="json1"></pre>
        </div>
        <div class="json-container">
            <div class="json-title">Datos JSON 2</div>
            <pre id="json2"></pre>
        </div>
        <div class="button-container">
            <button id="btn-goto-home" onclick="window.location.href = '/';">Ir a la página de inicio</button>
        </div>
    </div>
</div>

<script>
    const json1 = {
        "NombreDelAutor": "Juan Pérez",
        "nombreDelArticulo": "Introducción al Análisis de Big Data",
        "Token": "3HJ7K9F6G2D4R8P0ASDFG5K2J1L8P4M9N0Q1W3E7R",
        "TokenDeReferidos": [
            {"Token": "A1B2C3D4E5F6G7H8I9J0K1L2M3N4O5P6Q7R8S9T0"},
            {"Token": "1A2B3C4D5E6F7G8H9I0J1K2L3M4N5O6P7Q8R9S0T1"},
            {"Token": "9Z8Y7X6W5V4U3T2S1R0Q9P8O7N6M5L4K3J2I1H0G"}
        ],
        "FechadeCreacion": "2024-02-27"
    };

    const json2 = {
        "Mireferncia": "3HJ7K9F6G2D4R8P0ASDFG5K2J1L8P4M9N0Q1W3E7R"
    };

    document.getElementById('json1').innerText = JSON.stringify(json1, null, 2);
    document.getElementById('json2').innerText = JSON.stringify(json2, null, 2);
</script>

</body>
</html>
