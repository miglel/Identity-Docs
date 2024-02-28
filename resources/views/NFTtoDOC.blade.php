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

        p {
            line-height: 1.6;
        }
    </style>
</head>

<body>

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
        <section id="ventajas-de-incluir-nfts-en-el-ambito-academico" class="mb-4">
            <h2>¿Cuáles son las ventajas de incluir NFTs en el ámbito académico?</h2>
            <p><strong>Protección de la Propiedad Intelectual:</strong></p>
            <p>Los NFTs pueden utilizarse para autenticar y proteger la propiedad intelectual de trabajos académicos, investigaciones y otros recursos digitales. La tokenización garantiza la singularidad y originalidad, lo que puede disuadir el plagio y proporcionar un método claro para atribuir la autoría.</p>
            <p><strong>Transparencia y Rastreabilidad:</strong></p>
            <p>La tecnología blockchain subyacente a los NFTs permite un registro transparente y rastreable de la propiedad y el historial de transacciones. Esto puede ser beneficioso para verificar la autoría, el uso legítimo y cualquier transacción asociada a un recurso académico.</p>
            <p><strong>Facilita la Colaboración y la Referencia:</strong></p>
            <p>La tokenización de trabajos académicos como NFTs podría facilitar la colaboración entre investigadores al permitir un fácil intercambio de activos digitales y su referencia en publicaciones académicas.</p>
            <p><strong>Preservación a Largo Plazo:</strong></p>
            <p>La tokenización en NFTs, combinada con la tecnología blockchain, puede contribuir a la preservación a largo plazo de trabajos académicos importantes. Los NFTs pueden servir como certificados digitales que garantizan la autenticidad y accesibilidad continua del trabajo a lo largo del tiempo.</p>
            <p><strong>Innovación en la Evaluación y la Publicación:</strong></p>
            <p>La inclusión de NFTs podría fomentar la innovación en la forma en que se evalúan y publican los trabajos académicos. La transparencia en el historial de transacciones podría ayudar a establecer la calidad y el impacto de un trabajo, y la tokenización podría influir en nuevos modelos de revisión por pares y métricas de impacto.</p>
            <p><strong>Interoperabilidad con Plataformas Descentralizadas:</strong></p>
            <p>Al utilizar NFTs en un entorno académico, se puede aprovechar la interoperabilidad con otras plataformas descentralizadas y tecnologías emergentes, abriendo posibilidades para la colaboración global y la adopción de nuevas prácticas innovadoras.</p>
        </section>

        <section id="garantias-al-usar-identity-docs">
            <h2>¿Qué garantías tengo al usar Identity Docs?</h2>
            <p>Nuestra solución se centra en el desarrollo de un buscador de documentos académicos para compartir entre investigadores, priorizando la simplicidad y accesibilidad. Destacamos que nuestra plataforma es de libre acceso; no se requiere inicio de sesión para visualizar los documentos y el proceso de carga se simplifica mediante un formulario que solicita los datos del autor y el archivo de autoría propia.</p>
        </section>
    </div>

</body>

</html>

