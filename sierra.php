<?php
function validarNombre($nombre): bool
{
    $patron = '/^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+$/';
    return preg_match($patron, $nombre) === 1;
}
// Verifica si se ha enviado el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Verifica si se han llenado todos los campos
    if (!empty($_POST['nombre']) && !empty($_POST['correo']) && !empty($_POST['visita']) && !empty($_POST['comentarios'])) {
        // Obtiene los datos del formulario
        $nombre = $_POST['nombre'];
        $correo = $_POST['correo'];
        $visita = $_POST['visita'];
        $comentarios = $_POST['comentarios'];

        if (!validarNombre($nombre)) {
            echo "<script>alert('Revise que su nombre este escrito correctamente')</script>";
        } else {
            // Crea el archivo en la carpeta noticias y guarda los datos
            $archivo = fopen('sierra.txt', 'a');
            fwrite($archivo, "Nombre: " . $nombre . "\n");
            fwrite($archivo, "Correo: " . $correo . "\n");
            fwrite($archivo, "Visita: " . $visita . "\n");
            fwrite($archivo, "Comentarios: " . $comentarios . "\n\n");
            fclose($archivo);

            // Limpia los campos
            $_POST['nombre'] = '';
            $_POST['correo'] = '';
            $_POST['visita'] = '';
            $_POST['comentarios'] = '';

            // Muestra una alerta de éxito
            echo "<script>alert('Los datos se han guardado correctamente.')</script>";
        }
    } else {
        // Muestra una alerta de error si no se han llenado todos los campos
        echo "<script>alert('Por favor, llene todos los campos antes de enviar el formulario.')</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.css">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

    <script src="assets/js/script_Menu.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <title>ECUA-TRAVELS</title>
    <style>
        /* ESTILOS PARA MENÚ DESLIZANTE */

        #menu {
            width: 180px;
            background-color: rgb(46, 48, 49);
            color: white;
            border: 3px solid whitesmoke;
            border-radius: 20px;
            padding: 20px 20px 0 20px;
            position: fixed;
            z-index: 100;
            left: -150px;
            top: 180px;
        }

        #menu>div {
            font: bold;
            margin-bottom: 40px;
            transition: all 0.3s;

        }

        #menu>div a {
            color: inherit;
            text-decoration: none;
        }

        #menu>div:hover {
            font-size: 50;
            transform: scale(1.2);
        }

        /* FIN ESTILOS PARA MENÚ DESLIZANTE */

        .logo {
            transition: all 0.3s ease-in-out;
        }

        .logo:hover {
            margin-left: 8px;
            transform: scale(1.5);
        }

        nav {

            border-top: 1px solid;
            border-bottom: 2px solid;
        }

        #encabezado {

            height: 160px;

        }

        #encabezado::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            background-image: url('assets/imgIndex/encabezado2.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            opacity: 0.48;
            height: 150px;
        }

        /* estilos solo de index */

        .image-container {
            overflow: hidden;
            transition: all 0.3s ease-in-out;
        }

        .image-container:hover {
            transform: scaleX(1.5);
        }

        .accordion-image,
        .accordion-image-title,
        .accordion-image-text {
            transition: transform 0.3s ease-in-out;
        }

        .accordion-image:hover,
        .accordion-image-title:hover,
        .accordion-image-text:hover {
            transform: scale(1.1);
        }
    </style>
    <script>
        $(document).ready(function() {
            // Ocultar el texto de las tarjetas al iniciar la página
            $("#portadaSierra").hide();
            $("#portadaSierra").fadeIn(2500);
            $('#tituloSierra').animate({
                fontSize: '58px',
                color: 'green'
            }, 2000);

            $(".card-text").hide();

            $(".card").hover(
                function() {
                    $(this).find(".card-text").slideDown(); // Mostrar el texto al pasar el cursor
                },
                function() {
                    $(this).find(".card-text").slideUp(); // Ocultar el texto al quitar el cursor
                }
            );
        });
    </script>

</head>

<body>

    <div class="row mt-2">
        <div class="col">
            <?php
            $nombreArchivo = basename(__FILE__);
            ?>
            <?php
            @require_once 'vistas/head.php';
            ?>

            <div class="container">


                <!-- EMPIEZA MENÚ DESPLEGABLE -->
                <div id="menu">
                    <div> <a href="#lugTuristicos">
                            <h6 class="text-center">LUGARES TURÍSTICOS</h6>
                        </a> </div>
                    <div> <a href="#gastronomia">
                            <h6 class="text-center">GASTRONOMÍA</h6>
                        </a></div>
                    <div> <a href="#culturas">
                            <h6 class="text-center">CULTURAS</h6>
                        </a></div>
                    <div> <a href="#costTradiciones">
                            <h6 class="text-center">COSTUMBRES Y TRADICIONES</h6>
                        </a> </div>
                </div>
                <!-- TERMINA MENPU DESPLEGABLE -->


                <main>
                    <!-- *************** A PARTIR DE AQUÍ VA EL CÓDIGO DE CADA REGIÓN ****************** -->
                    <h2 id="tituloSierra" style="padding: 20px 0px 0px; text-align:center; font-family:Georgia, 'Times New Roman', Times, serif " class="animated-tittle">SIERRA ECUATORIANA</h2>
                    <div class="m-2 text-center">
                        <img src="assets/imgSierra/bannerSierra.jpg" alt="" class="img-fluid" id="portadaSierra">
                    </div>
                    <center>
                        <h1 id="lugTuristicos">Lugares Turísticos</h1>
                    </center>
                    <div class="row mt-4 mb-3">
                        <div class="col-sm-12 col-lg-6">
                            <div class="card mb-3">
                                <div class="row g-0">
                                    <div class="col-12 text-center">
                                        <img id="cotopaxi" src="assets/imgSierra/ParqueCotopaxi.jpg" style="max-height: 150px;" class="img-fluid rounded-start" alt="">
                                    </div>
                                    <div class="col-12 ">
                                        <div class="card-body">
                                            <h5 class="card-title text-center">Parque Nacional Cotopaxi</h5>
                                            <p id="texto1" class="card-text">El volcán Cotopaxi es un nevado
                                                caracterizado por la
                                                increíble perfección cónica en su forma, que yergue a más de 5000 metros
                                                de altura sobre el nivel del mar.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-6">
                            <div class="card mb-3">
                                <div class="row g-0">
                                    <div class="col-12 text-center">
                                        <img id="diablo" src="assets/imgSierra/Nariz-del-Diablo-1.jpg" style="max-height: 150px;" class="img-fluid rounded-start" alt="">
                                    </div>
                                    <div class="col-12">
                                        <div class="card-body">
                                            <h5 class="card-title text-center">Tren de la Nariz del Diablo</h5>
                                            <p class="card-text">La Nariz del Diablo representa una roca enorme en forma
                                                de nariz por cuyas faldas pasa un tren. En esta elevación las rocas son
                                                puntiagudas.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-6">
                            <div class="card mb-3">
                                <div class="row g-0">
                                    <div class="col-12  text-center">
                                        <img id="baños" src="assets/imgSierra/Baños-de-Agua-Santa.jpg" style="max-height: 150px; width: 290px;" class="img-fluid rounded-start" alt="">
                                    </div>
                                    <div class="col-12 ">
                                        <div class="card-body">
                                            <h5 class="card-title text-center">Baños de Agua Santa</h5>
                                            <p class="card-text">Baños de Agua Santa es una ciudad ecuatoriana, y la más
                                                grande y poblada de la provincia Tungurahua, además está localizada en
                                                la región interandina.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-6">
                            <div class="card mb-3">
                                <div class="row g-0">
                                    <div class="col-12 text-center">
                                        <img id="quilotoa" src="assets/imgSierra/quilotoa-3.jpg" style="height: 150px;" class="img-fluid rounded-start" alt="">
                                    </div>
                                    <div class="col-12 ">
                                        <div class="card-body">
                                            <h5 class="card-title text-center">Laguna del Quilotoa y Volcán</h5>
                                            <p class="card-text">El Quilotoa representa una especie de caldera llena de
                                                agua con una extensión de 3 km de ancho y se encuentra a una altura de
                                                3800 metros.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <center>
                        <h1 id="gastronomia">Gastronomía</h1>
                    </center>
                    <div class="row mt-4 mb-3">
                        <div class="text-justify">
                            <p>En la sierra del Ecuador, podrás encontrar una enorme diversidad de platos típicos,
                                entre
                                sopas, platos fuertes y postres. Los platos típicos de la sierra tiene como base la
                                carne de chancho y de res, que se combinan con la papa, el mote, entre otros. Estos
                                platos son de alta calidad y, generalmente, requieren mucho tiempo de preparación.
                                Te
                                queremos contar un poco acerca de algunos platos típicos e invitarte a probarlos
                                durante
                                tu estancia en la sierra del Ecuador.</p>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-md-3">
                                <h5 class="card-title mb-2" style="text-align: center;">Locro de papa</h5>
                                <img class="card-img-top accordion-image" src="assets/imgSierra/Locro-Papa.jpg" style="max-width: 100%; height: auto;" alt="">
                            </div>
                            <div class="col-sm-12 col-md-3">
                                <h5 class="card-title mb-2" style="text-align: center;">Cuy asado</h5>
                                <img class="card-img-top accordion-image" src="assets/imgSierra/Cuy-asado.jpg" style="max-width: 100%; height: auto;" alt="">
                            </div>
                            <div class="col-sm-12 col-md-3">
                                <h5 class="card-title mb-2" style="text-align: center;">Llapingachos</h5>
                                <img class="card-img-top accordion-image" src="assets/imgSierra/llapingachos.jpg" style="max-width: 100%; height: auto;" alt="">
                            </div>
                            <div class="col-sm-12 col-md-3">
                                <h5 class="card-title mb-2" style="text-align: center;">Yahuarlocro</h5>
                                <img class="card-img-top accordion-image" src="assets/imgSierra/Yahuarlocro.jpg" style="max-width: 100%; height: auto;" alt="">
                            </div>
                        </div>
                    </div>
                    <center>
                        <h1 id="culturas">Culturas</h1>
                    </center>
                    <div class="row mt-4 mb-3">
                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner" style="height: 450px;">
                                <div class="carousel-item active">
                                    <img src="assets/imgSierra/cult2.jpg" class="d-block w-100" alt="">
                                </div>
                                <div class="carousel-item">
                                    <img src="assets/imgSierra/cultura-de-Ecuador.jpg" class="d-block w-100" alt="">
                                </div>
                                <div class="carousel-item">
                                    <img src="assets/imgSierra/cult.jpg" class="d-block w-100" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="text-justify">
                            <br>
                            <p>En la sierra ecuatoriana se pueden distinguir siete grandes culturas, son: los Caranquis,
                                Yumbos, Quitus, Panzaleos, Puruháes, Cañaris y Paltas. Los Caranquis-Cayambes fueron una
                                de
                                las culturas más interesantes del Ecuador, fueron un Estado diárquico, con capitales en
                                Caranqui y Cayambe. Esta diarquía corresponde a una dualidad muy típica en el mundo
                                andino.
                                Hicieron ciudades y centros administrativos que estaban conformados por pirámides
                                escalonadas y truncadas; la función de estas sería ceremonial, astronómica y vivencial,
                                además de las pirámides hicieron tolas o montículos de tierra artificiales, que tuvieron
                                funciones ceremoniales, vivenciales y funerarias.</p>

                        </div>

                        <h3 id="costTradiciones">Costumbres y tradiciones</h3>

                        <div class="row">
                            <div class="col-md-4" style="padding: 20px">
                                <div class="card text-center mb-3">
                                    <img src="assets/imgSierra/mamaNegra.jpg" style="height: 260px;" class="card-img-top accordion-image" alt="">
                                    <div class="card-body">
                                        <h5 class="card-title accordion-image-title">La Mama Negra</h5>
                                        <p class="card-text accordion-image-text">
                                            Es una fiesta que se realiza, dos veces al año, en la ciudad ecuatoriana de
                                            Latacunga,
                                            capital de la Provincia de Cotopaxi.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4" style="padding: 20px">
                                <div class="card text-center mb-3">
                                    <img src="assets/imgSierra/intiRaymi.jpg" class="card-img-top accordion-image" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title accordion-image-title">Inti Raymi</h5>
                                        <p class="card-text accordion-image-text">
                                            El Inti Raymi muestra el sincretismo de la cultura andina y occidental, y el
                                            Aya Uma
                                            es un ejemplo de ello.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4" style="padding: 20px">
                                <div class="card text-center ">
                                    <img src="assets/imgSierra/Diablada de pillaro.jpg" class="card-img-top accordion-image" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title accordion-image-title">Diablada de pillaro</h5>
                                        <p class="card-text accordion-image-text">
                                            Los diablos bofean en las calles de Píllaro al ritmo de pasacalles y
                                            pasillos que
                                            entonan las bandas de pueblo
                                        </p>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <!--Bloque de Texto-->
                        <hr style="border:0px; border-top: 5px double #000;">
                        <h2 class="text-bg-dark text-center" id="demo">PREGUNTAS</h2>
                        <hr style="border:0px; border-top: 5px double #000;">

                        <!--Formulario-->
                        <form id="form-noticias" method="POST" action="">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="nombre">
                                <label for="nombre">Nombre y Apellido</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="correo" name="correo" placeholder="name@gmail.com">
                                <label for="correo">Correo</label>
                            </div>
                            <div class="form-floating mb-3">
                                <textarea class="form-control" id="visita" name="visita" style="height: 100px"></textarea>
                                <label for="visita">¿Has visitado la sierra ecuatoriana antes? Dónde?</label>
                            </div>
                            <div class="form-floating mb-3">
                                <textarea class="form-control" id="comentarios" name="comentarios" style="height: 100px"></textarea>
                                <label for="comentarios">Déjanos tus comentarios para mejorar el sitio web.</label>
                            </div>
                            <div class="d-grid gap-2 col-6 mx-auto">
                                <button class="btn btn-dark" type="submit">Enviar</button>
                            </div>
                        </form><br><br>
                    </div>
                    <!-- *************** AQUI FINALIZA EL CÓDIGO DE CADA REGIÓN ****************** -->
                </main>
            </div>

            
            <?php
                require_once 'vistas/foot2.php'
            ?>

        </div>
    </div>

</body>

</html>