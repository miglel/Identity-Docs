<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiénes Somos - Identity Docs</title>
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


        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        article {
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-bottom: 20px;
        }

        p {
            line-height: 1.6;
        }



        h1, h2 {
            color: #007bff;
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
        <section id="quienes-somos">
            <h1 class="mt-5 mb-4">¿Quiénes Somos?</h1>

            <article id="introduccion" class="mb-4">
                <h2>Introducción:</h2>
                <p>Identity Docs es una innovadora plataforma de almacenamiento descentralizado diseñada para los integrantes de Universidades Tecnológicas en México. Su función principal radica en la conversión de trabajos académicos e investigaciones en NFTs (Tokens No Fungibles), proporcionando así una capa adicional de protección a la propiedad intelectual y de este modo mitigar los riesgos asociados con posibles plagios.</p>
            </article>

            <article id="historia" class="mb-4">
                <h2>Historia</h2>
                <p>Este proyecto tuvo su origen en el ETH Cinco de Mayo Hackaton 2024. En este espacio de innovación tecnológica y a contrarreloj fue que se crearon las bases de Identity Docs. En este contexto de creatividad acelerada, el proyecto tomó forma, estableciendo las bases de lo que hoy conocemos como Identity Docs. La necesidad urgente de salvaguardar la propiedad intelectual de trabajos académicos en Universidades Tecnológicas en México impulsó la concepción de esta plataforma única.</p>
            </article>

            <article id="compromiso" class="mb-4">
                <h2>Compromiso</h2>
                <p>Identity Docs emerge como respuesta a la imperiosa necesidad de aplicar tecnologías de vanguardia en la protección de las investigaciones académicas producidas en el contexto específico de las Universidades Tecnológicas en México. Nuestro compromiso reside en proporcionar a la comunidad académica una herramienta segura y eficaz para preservar la integridad de sus trabajos, permitiendo así un ambiente propicio para el intercambio de conocimientos y la colaboración académica.</p>
            </article>

            <article id="vision">
                <h2>Visión</h2>
                <p>Consolidar a Identity Docs como un referente nacional en cuanto a la protección de propiedad intelectual, e impactar positivamente en la forma de referenciar artículos académicos mediante su tokenización en NFT.</p>
            </article>
        </section>
    </div>

</body>

</html>
