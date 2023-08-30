<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

    <title>ECUA-TRAVELS</title>
    <style>
        * {
            /* border: 1px solid; */
        }

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
    </style>


    <script src="assets/js/script_Index.js">
        //    SCRIPT REALIZADO EN DOCUMENTO SEPARADO
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
                


                <main>
                    <!-- *************** A PARTIR DE AQUÍ VA EL CÓDIGO DE CADA REGIÓN ****************** -->
                    <div class="container mt-2">
                        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="assets/imgIndex/costa.jpg" class="d-block w-100" alt="costa" style="height: 600px;">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h4>COSTA</h4>
                                        <p style="font-size: 18px;">En la Costa, disfruta de kilómetros de playas de
                                            arena dorada, perfectas para
                                            el surf, el buceo
                                            y el relajamiento bajo el sol. Explora manglares, avista ballenas y descubre
                                            la rica biodiversidad
                                            marina que habita en estas aguas</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="assets/imgIndex/sierra_portada2.jpg" class="d-block w-100" alt="sierra" style="height: 600px;">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h4>SIERRA</h4>
                                        <p style="font-size: 18px;">En la Sierra, maravíllate con los majestuosos
                                            volcanes, las
                                            pintorescas ciudades coloniales y los paisajes impresionantes. Recorre los
                                            coloridos mercados indígenas, camina por senderos de montaña y admira
                                            lagunas
                                            cristalinas que te dejarán sin aliento</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="assets/imgIndex/amazonia_portada2.jpg" class="d-block w-100" alt="amazonia" style="height: 600px;">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h4>AMAZONÍA</h4>
                                        <p style="font-size: 18px;">En la Amazonía, adéntrate en la selva tropical más
                                            diversa del
                                            mundo. Explora la exuberante vegetación, escucha los sonidos de la fauna
                                            salvaje
                                            y aprende de las culturas indígenas que han habitado estas tierras por
                                            siglos.
                                            Vive una experiencia única de conexión con la naturaleza en su estado más
                                            puro.</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="assets/imgIndex/galapagos_portada2.jpg" class="d-block w-100" alt="amazonia" style="height: 600px;">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h4>GALÁPAGOS</h4>
                                        <p style="font-size: 18px;">Por último, pero no menos importante, visita las
                                            Islas
                                            Galápagos, un verdadero paraíso natural donde la vida silvestre y las
                                            especies
                                            endémicas te sorprenderán. Nada con tortugas marinas, observa aves únicas en
                                            su
                                            hábitat natural y sumérgete en las aguas cristalinas junto a leones marinos
                                            curiosos.</p>
                                    </div>
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Anterior</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Siguiente</span>
                            </button>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col">
                            <h1 class="text-center mt-1 font-italic">¡Descubre las maravillas de las cuatro regiones
                                naturales de
                                Ecuador!</h1>
                            <p class="text-center" style="font-size: 18px;">
                                Sumérgete en la diversidad geográfica y paisajística de este hermoso país. Desde las
                                costas del Pacífico, pasando por las tierras altas de la Sierra, adentrándote en la
                                exuberante selva amazónica y alcanzando las islas encantadoras de Galápagos, Ecuador
                                ofrece una experiencia única en cada una de sus regiones.
                            </p>

                            <p class="text-center" style="font-size: 18px;">
                                Bienvenidos a nuestra página web sobre los lugares turísticos de Ecuador.
                                Este hermoso país sudamericano es conocido por su impresionante belleza natural, su rica
                                cultura y su patrimonio histórico. Ecuador está dividido en cuatro regiones geográficas
                                distintas: la Costa, la Sierra, la Amazonía y las Islas Galápagos. Cada una de estas
                                regiones ofrece una experiencia única y emocionante para los visitantes que buscan
                                explorar lo mejor que Ecuador tiene para ofrecer.
                            </p>

                            <p class="text-center" style="font-size: 18px;">
                                En esta página web informativa, te proporcionaremos información detallada sobre los
                                lugares turísticos más destacados de cada una de estas regiones, para que puedas
                                planificar tu viaje a Ecuador de manera efectiva. Además, te daremos consejos útiles
                                sobre cómo moverte por el país, dónde alojarte y qué actividades hacer en cada región.
                                Esperamos que esta página web te sea útil y te ayude a descubrir todo lo que Ecuador
                                tiene para ofrecer. ¡Disfruta tu viaje!
                            </p>
                        </div>
                    </div>

                    <div class="container">
                        <div class="row mt-3 no-gutters">
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="image-container img-fluid rounded">
                                    <img src="assets/imgIndex/costa.jpg" alt="Imagen 1" class="img-fluid">
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="image-container img-fluid rounded">
                                    <img src="assets/imgIndex/sierra.jpg" alt="Imagen 2" class="img-fluid">
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="image-container img-fluid rounded">
                                    <img src="assets/imgIndex/amazonia.jpg" alt="Imagen 3" class="img-fluid">
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="image-container img-fluid rounded">
                                    <img src="assets/imgIndex/galapagos.jpg" alt="Imagen 4" class="img-fluid">
                                </div>
                            </div>

                        </div>
                    </div>
                    <hr>






                    <!-- *************** AQUI FINALIZA EL CÓDIGO DE CADA REGIÓN ****************** -->
                </main>
            </div>

            <?php
            @require_once 'vistas/foot.php';
            ?>

        </div>
    </div>

</body>

</html>