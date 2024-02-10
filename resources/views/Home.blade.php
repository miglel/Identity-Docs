<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    @vite(['resources/css/home.css'])
</head>
<body style="background-image: url('{{ asset('img/f1.jpg') }}');">

<nav class="navbar">
  <div class="logo">
    <img src="../public/img/logo.jpeg alt="Logo">
  </div>
  <div class="nav-items">
    <a href="/Sobre_Nosotros">Sobre Nosotros</a>
    <a href="/FAQ">FAQ</a>
    <a href="/NFT_TO_DOC">Document to NFT</a>
  </div>
  <div class="button">
    <a href="/Forms">Crear</a>
  </div>
</nav>

<div class="search-container">
  <div class="search-filters">
    <select>
      <option>Todos</option>
      <option>MATEMATICAS</option>
      <option>fisica</option>
      <option>QUIMiCA</option>
    </select>
  </div>
  <div class="search-input">
    <input type="text" placeholder="Buscar...">
  </div>
  <div class="search-button">
    <button>Buscar</button>
  </div>


</div>
<div class="container">
        <div class="card">
            <img src="https://imgs.search.brave.com/A3-uCUb8JNV8ukiosKQ-q8xCIU7Am6D4WNtfFRfuUZM/rs:fit:860:0:0/g:ce/aHR0cHM6Ly9pbWFn/ZXMudmV4ZWxzLmNv/bS9tZWRpYS91c2Vy/cy8zLzEzNTk4MS9p/c29sYXRlZC9wcmV2/aWV3L2E3NmRhMDRj/ODhjYWEyMDk4MDU2/OGY0OTEwN2Q5MDhl/LWljb25vLWRlLWNh/cnBldGEtZGUtZG9j/dW1lbnRvcy5wbmc" alt="Imagen 1">
            <h2>Título 1</h2>
        </div>
        <div class="card">
            <img src="https://imgs.search.brave.com/A3-uCUb8JNV8ukiosKQ-q8xCIU7Am6D4WNtfFRfuUZM/rs:fit:860:0:0/g:ce/aHR0cHM6Ly9pbWFn/ZXMudmV4ZWxzLmNv/bS9tZWRpYS91c2Vy/cy8zLzEzNTk4MS9p/c29sYXRlZC9wcmV2/aWV3L2E3NmRhMDRj/ODhjYWEyMDk4MDU2/OGY0OTEwN2Q5MDhl/LWljb25vLWRlLWNh/cnBldGEtZGUtZG9j/dW1lbnRvcy5wbmc" alt="Imagen 2">
            <h2>Título 2</h2>
        </div>
        <div class="card">
            <img src="https://imgs.search.brave.com/A3-uCUb8JNV8ukiosKQ-q8xCIU7Am6D4WNtfFRfuUZM/rs:fit:860:0:0/g:ce/aHR0cHM6Ly9pbWFn/ZXMudmV4ZWxzLmNv/bS9tZWRpYS91c2Vy/cy8zLzEzNTk4MS9p/c29sYXRlZC9wcmV2/aWV3L2E3NmRhMDRj/ODhjYWEyMDk4MDU2/OGY0OTEwN2Q5MDhl/LWljb25vLWRlLWNh/cnBldGEtZGUtZG9j/dW1lbnRvcy5wbmc" alt="Imagen 3">
            <h2>Título 3</h2>
        </div>
        <div class="card">
            <img src="https://imgs.search.brave.com/A3-uCUb8JNV8ukiosKQ-q8xCIU7Am6D4WNtfFRfuUZM/rs:fit:860:0:0/g:ce/aHR0cHM6Ly9pbWFn/ZXMudmV4ZWxzLmNv/bS9tZWRpYS91c2Vy/cy8zLzEzNTk4MS9p/c29sYXRlZC9wcmV2/aWV3L2E3NmRhMDRj/ODhjYWEyMDk4MDU2/OGY0OTEwN2Q5MDhl/LWljb25vLWRlLWNh/cnBldGEtZGUtZG9j/dW1lbnRvcy5wbmc" alt="Imagen 4">
            <h2>Título 4</h2>
        </div>
        <div class="card">
            <img src="https://imgs.search.brave.com/A3-uCUb8JNV8ukiosKQ-q8xCIU7Am6D4WNtfFRfuUZM/rs:fit:860:0:0/g:ce/aHR0cHM6Ly9pbWFn/ZXMudmV4ZWxzLmNv/bS9tZWRpYS91c2Vy/cy8zLzEzNTk4MS9p/c29sYXRlZC9wcmV2/aWV3L2E3NmRhMDRj/ODhjYWEyMDk4MDU2/OGY0OTEwN2Q5MDhl/LWljb25vLWRlLWNh/cnBldGEtZGUtZG9j/dW1lbnRvcy5wbmc" alt="Imagen 5">
            <h2>Título 5</h2>
        </div>
        <div class="card">
            <img src="https://imgs.search.brave.com/A3-uCUb8JNV8ukiosKQ-q8xCIU7Am6D4WNtfFRfuUZM/rs:fit:860:0:0/g:ce/aHR0cHM6Ly9pbWFn/ZXMudmV4ZWxzLmNv/bS9tZWRpYS91c2Vy/cy8zLzEzNTk4MS9p/c29sYXRlZC9wcmV2/aWV3L2E3NmRhMDRj/ODhjYWEyMDk4MDU2/OGY0OTEwN2Q5MDhl/LWljb25vLWRlLWNh/cnBldGEtZGUtZG9j/dW1lbnRvcy5wbmc" alt="Imagen 6">
            <h2>Título 6</h2>
        </div>
 </div>

 <footer>
  <div class="footer-content">
    <div class="footer-text">
      <p>Nuestra wallet</p>
    </div>
    <div class="footer-link">
      <a href="#">Saber más</a>
    </div>
    <div class="footer-button">
      <div class="button">
        <a href="/Wallet">Saber mas</a>
      </div>  
    </div>
  </div>
</footer>

</body>
</html>
