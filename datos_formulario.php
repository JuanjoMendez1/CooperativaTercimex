<?php include "index.html";

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['tel'];
$mensaje = $_POST['mensaje']; 
$contacto = $_POST['contacto'];
$fecha = $_POST['fecha'];
$hora = $_POST['hora'];

    $email_to = "tercimex030919@outlook.com";
    $asunto = "comentario";

    $comentario = "
        Nombre del cliente: $_POST[nombre]
        Email del cliente: $_POST[email]
        Telefono del cliente: $_POST[tel]
        Mensaje o comentario: $_POST[mensaje]
        Como quiere que se le contacte: $_POST[contacto]
        Fecha: $_POST[fecha]
        Hora: $_POST[hora]
    ";

    $headers = 'From: '.$email."\r\n". 
'Reply-To: '.$email_to."\r\n" .
'X-Mailer: PHP/' . phpversion();

        mail('tercimex030919@outlook.com',$asunto,$comentario,$headers);

        echo "Mensaje Enviado";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cooperativa Tercimex</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>

    <header class="site-header inicio">
        <div class="contenedor contenido-header">
            <div class="barra">
                <a href="index.html">
                    <img src="img/logo.svg" alt="Imagen de Cooperativa Tercimex">
                    <!--   <img src="img/log.svg" alt="Logotipo de Cooperativa Tercimex"> -->
                </a>

                <div class="mobile-menu">
                    <a href="#navegacion">
                        <img src="img/barras.svg" alt="Icono Menu">
                    </a>
                </div>

                <nav id="navegacion" class="navegacion">
                    <a href="nosotros.html">Nosotros</a>
                    <a href="anuncios.html">Anuncios</a>
                    <a href="blog.html">Blog</a>
                    <a href="contacto.html">Contacto</a>
                    <a target="_blank" href="https://www.facebook.com/CooperativaTercimex/">Facebook</a>
                </nav>
            </div>
            <h1>Venta de Terciopelo</h1>
        </div>
        <!-- contenedor -->
    </header>

    <section class="contenedor seccion">
        <h2 class="fw-300 centrar-texto">Más Sobre Nosotros</h2>

        <div class="iconos-nosotros">
            <div class="icono">
                <img src="img/mision.jpeg" alt="Icono Mision">
                <h3>Misión</h3>
                <p>Somos una Cooperativa mexicana, dedicada a la fabricación, distribución y comercialización de la más alta calidad en el terciopelo mexicano, comprometidos con nuestra empresa para buscar satisfacer las expectativas y demandas de nuestros
                    clientes y sus consumidores. Aportando bienestar integral a nuestra cooperativa y un fuerte equilibrio entre la sociedad, la industria y el medio ambiente.</p>
            </div>

            <div class="icono">
                <img src="img/vision.jpeg" alt="Icono Vison">
                <h3>Visión</h3>
                <p>Nos visualizamos como una Cooperativa mexicana al cien por ciento. Líder en la producción y fabricación de los mejores terciopelos a nivel nacional e internacional, ligados con la más alta calidad y distinción de nuestros productos que
                    satisfagan las expectativas de cada uno de nuestros clientes.</p>
            </div>

            <div class="icono">
                <img src="img/objetivo.jpeg" alt="Icono Objetivo">
                <h3>Objetivo General</h3>
                <p>Ser lideres en la producción y comercializacón de productos textiles que por su precio y calidad sean competitivos en el mercado.</p>
            </div>
        </div>
    </section>

    <main class="seccion contenedor">
        <h2 class="fw-300 centrar-texto">Productos en Venta</h2>

        <div class="contenedor-anuncios">
            <div class="anuncio">
                <img src="img/A95.jpeg" alt="Calidad A95">
                <div class="contenido-anuncio">
                    <h3>Calidad A95</h3>
                    <p>100% poliester</p>

                    <a href="t_opera.html" class="boton boton-amarillo d-block">Ver Calidad</a>
                </div>
            </div>

            <div class="anuncio">
                <img src="img/C301.jpeg" alt="Calidad C-301">
                <div class="contenido-anuncio">
                    <h3>Calidad A301</h3>
                    <p>50% poliester 50% algodon</p>

                    <a href="t_grecia.html" class="boton boton-amarillo d-block">Ver Calidad</a>
                </div>
            </div>

            <div class="anuncio">
                <img src="img/A501.jpeg" alt="Calidad A501">
                <div class="contenido-anuncio">
                    <h3>Calidad A501</h3>
                    <p>100% poliester</p>

                    <a href="t_cristal.html" class="boton boton-amarillo d-block">Ver Calidad</a>
                </div>
            </div>
        </div>

        <div class="ver-todas">
            <a href="anuncios.html" class="boton boton-verde">Ver Todas</a>
        </div>
    </main>

    <section class="imagen-contacto">
        <div class="contenedor contenido-contacto">
            <h2>Encuentra el Terciopelo adecuado para ti.</h2>
            <p>Llena el formulario de contacto y nos pondremos en contacto contigo a la brevedad</p>
            <a href="contacto.html" class="boton boton-amarillo">Contactános</a>
        </div>
    </section>

    <div class="seccion-inferior contenedor seccion">
        <section class="blog">
            <div class="texto-entrada">
                <a href="entrada.html">
                    <h3 class="centrar-texto fw-300">Nuestro Blog</h3>
                </a>
            </div>

            <article class="entrada-blog">
                <div class="imagen">
                    <a href="entrada.html">
                        <img src="img/usos.jpg" alt="Entrada de blog">
                    </a>
                </div>
                <div class="texto-entrada">
                    <a href="entrada.html">
                        <h4>Usos del Terciopelo</h4>
                    </a>
                    <p>Escrito el: <span> 01/09/2019 </span> por: <span> Juan </span> </p>
                    <p>Consejos para usar terciopelo.</p>
                </div>
            </article>

            <article class="entrada-blog">
                <div class="imagen">
                    <a href="entrada.html">
                        <img src="img/retardante.jpg" alt="Entrada de blog">
                    </a>
                </div>
                <div class="texto-entrada">
                    <a href="entrada.html">
                        <h4>Terciopelo Ignifugo</h4>
                    </a>
                    <p>Escrito el: <span> 20/10/2019 </span> por: <span> José </span> </p>
                    <p>Informacion sobre el terciopelo ignifugo o retardante.</p>
                </div>
            </article>
        </section>

        <section class="testimoniales">
            <h3 class="centrar-texto fw-300">Testimoniales</h3>
            <div class="testimonial">

                <blockquote>
                    El personal se comportó de una excelente forma, muy buena atención y el terciopelo que me ofrecierón de buena calidad y a un precio razonable.
                </blockquote>
                <p>- Juan Méndez</p>
            </div>
        </section>

    </div>

    <footer class="site-footer seccion">
        <div class="contenedor contenedor-footer">
            <nav class="navegacion">
                <a href="nosotros.html">Nosotros</a>
                <a href="anuncios.html">Anuncios</a>
                <a href="blog.html">Blog</a>
                <a href="contacto.html">Contacto</a>
                <a target="_blank" href="https://www.facebook.com/CooperativaTercimex/">Facebook</a>
            </nav>
            <p class="copyright">Todos los Derechos Reservados 2020 &copy; </p>
        </div>
    </footer>
</body>

</html>