<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preguntas y Respuestas sobre NFTs, DOIs y ISBNs</title>
    <style>
        body {
            background-image: linear-gradient(90deg, rgba(206, 212, 218, 0) 0%, rgba(184, 102, 166, 0.49) 13%, rgba(210, 66, 66, 0.47) 46%, rgba(201, 113, 97, 0.59) 67%, rgba(236, 140, 105, 0.56) 88%);
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;

        }
        .navbar {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 10px;
        background-color: #db5050b2;
        border-bottom: 1px solid #dddddd00;

        }

        .logo {
        width: 50px;
        height: 50px;
        margin-right: 20px;
        }

        .nav-items {
        display: flex;
        gap: 20px;
        }

        .nav-items a {
        color: #333;
        text-decoration: none;
        font-size: 18px;
        }

        .navbar a {
        text-decoration: none; /* Elimina el subrayado predeterminado de los enlaces */
        position: relative;
        }

        .navbar a:hover {
        text-decoration: none; /* Evita que el subrayado predeterminado aparezca al pasar el ratón */
        }

        .navbar a::after {
        content: '';
        position: absolute;
        width: 100%;
        height: 2px; /* Altura de la línea de subrayado */
        bottom: 0;
        left: 0;
        background-color: #000; /* Color del subrayado */
        visibility: hidden;
        transform: scaleX(0);
        transition: all 0.3s ease; /* Transición suave para el efecto de subrayado */
        }

        .navbar a:hover::after {
        visibility: visible;
        transform: scaleX(1);
        }





        .button {
        display: flex;
        align-items: center;
        gap: 10px;
        }

        .button a {
        background-color: #dddddd21;
        border-radius: 50px;
        padding: 10px 20px;
        color: #fff;
        text-decoration: none;
        font-size: 18px;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        h2 {
            color: #007bff;
        }

        section {
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-bottom: 20px;
        }

        p, li {
            line-height: 1.6;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        ul li::before {
            content: "•";
            color: #007bff;
            display: inline-block;
            width: 1em;
            margin-left: -1em;
        }
    </style>
</head>

<body  >
<nav class="navbar">
  <div class="logo">
    <a href="/">
      <img src="{{ asset('img/logo.png')}}" alt="Logo" style="border-radius: 50%; width: 100px; height: 100px;">
    </a>
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
    <div class="container">
        <section id="que-es-un-nft" class="mb-4">
            <h2>¿Qué es un NFT?</h2>
            <p>Un NFT, o Token No Fungible (por sus siglas en inglés), es un tipo de activo digital único y no intercambiable que se utiliza para representar la propiedad o autenticidad de un artículo específico o contenido digital. A diferencia de las criptomonedas como Bitcoin o Ethereum, los NFTs no son intercambiables entre sí en términos de valor equivalente, ya que cada uno tiene atributos únicos que los distinguen.</p>
        </section>

        <section id="diferencias-entre-nft-doi-isbn">
            <h2>¿En qué se diferencia un NFT respecto a un DOI o un ISBN?</h2>
            <p><strong>Propósito y Uso:</strong></p>
            <ul>
                <li><strong>NFT:</strong> Se utilizan principalmente en el ámbito digital para representar la propiedad y autenticidad de activos digitales únicos.</li>
                <li><strong>DOI:</strong> Se utilizan para identificar y proporcionar un enlace persistente a recursos digitales, como artículos de investigación, informes, datasets, y otros materiales académicos o científicos.</li>
                <li><strong>ISBN:</strong> Se utilizan para identificar de manera única libros impresos y otros productos editoriales.</li>
            </ul>
            <p><strong>Naturaleza del Identificador:</strong></p>
            <ul>
                <li><strong>NFT:</strong> Son tokens digitales no intercambiables registrados en una cadena de bloques.</li>
                <li><strong>DOI:</strong> Son identificadores alfanuméricos asignados a recursos digitales y gestionados por agencias de registro, no están vinculados a una cadena de bloques.</li>
                <li><strong>ISBN:</strong> Son números numéricos asignados a libros impresos y productos editoriales, códigos estáticos para identificar productos específicos.</li>
            </ul>
            <p><strong>Gestión y Resiliencia:</strong></p>
            <ul>
                <li><strong>NFT:</strong> Utilizan tecnologías blockchain para gestión descentralizada y transparente de la propiedad y transacciones.</li>
                <li><strong>DOI:</strong> La gestión se realiza a través de agencias de registro centralizadas.</li>
                <li><strong>ISBN:</strong> La gestión está centralizada y se realiza a través de agencias específicas en cada país.</li>
            </ul>
            <p><strong>Sector de Aplicación:</strong></p>
            <ul>
                <li><strong>NFT:</strong> Principalmente en el ámbito del arte digital, entretenimiento y coleccionables virtuales.</li>
                <li><strong>DOI:</strong> Ampliamente utilizado en el ámbito académico y científico.</li>
                <li><strong>ISBN:</strong> Aplicado en la industria editorial.</li>
            </ul>
        </section>
    </div>

</body>

</html>
