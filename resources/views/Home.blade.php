<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    @vite(['resources/css/home.css'])
</head>


<body>

<nav class="navbar">
  <div class="logo">
  <img src="{{ asset('img/logo.png')}}" alt="Logo" style="border-radius: 50%; width: 100px; height: 100px;">
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
      <option>FISICA</option>
      <option>QUIMiCA</option>
      <option>MORE...</option>
    </select>
  </div>
  <div class="search-input">
    <input type="text" placeholder="Buscar...">
  </div>
  <div class="search-button">
    <button>Buscar</button>
  </div>
</div>


<div class="card-container">
  <div class="card">
    <div class="card-header">
      <h2>Título de la Tarjeta</h2>
    </div>
    <div class="card-content">
      <p>Contenido de la tarjeta.</p>
    </div>
  </div>
  <div class="card">
    <div class="card-header">
      <h2>Título de la Tarjeta</h2>
    </div>
    <div class="card-content">
      <p>Contenido de la tarjeta.</p>
    </div>
  </div>
  <div class="card">
    <div class="card-header">
      <h2>Título de la Tarjeta</h2>
    </div>
    <div class="card-content">
      <p>Contenido de la tarjeta.</p>
    </div>
  </div>
  <div class="card">
    <div class="card-header">
      <h2>Título de la Tarjeta</h2>
    </div>
    <div class="card-content">
      <p>Contenido de la tarjeta.</p>
    </div>
  </div>
</div>

<footer>
  <div class="footer-content">
    <p>
      <a href="/Wallet">Nuestra Wallet</a> |
      <a href="">Ayudanos a seguir con este proyecto</a> 
    </p>
  </div>
</footer>


</body>
</html>
