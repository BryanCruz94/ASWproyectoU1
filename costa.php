<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="assets/js/script_Menu.js"></script>
    <script src="costa/tienda1.php"></script>



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

        /* FIN MENU DESLIZANTE */


        .logo {
            transition: all 0.2s ease-in-out;
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

        .parrafo1 {
            text-align: center;

        }

        .col {
            text-align: center;
        }

        .explicacionTuristico {
            text-align: center;
            padding: 5px;
        }

        .detalleTur {
            text-align: justify;
        }

        .explicacionGastronomia {
            text-align: center;
            padding: 5px;
        }

        .explicacionTradiciones {
            margin: 5x;
            text-align: center;
            background-color: rgb(239, 255, 249);
        }

        .rowtradiciones {
            text-align: justify;
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

        button.accordion {
            background-color: #c7ffad;
            color: #000000;
            cursor: pointer;
            padding: 18px;
            width: 100%;
            border: none;
            text-align: left;
            outline: none;
            font-size: 18px;
            transition: 0.4s;
            margin-bottom: 10px;
        }

        div.panel {
            padding: 0 18px;
            background-color: white;
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.2s ease-out;
        }

        .texto-agrandable {
            transition: font-size 0.5s;
            /* La transición durará 0.5 segundos */
        }

        .texto-agrandable:hover {
            font-size: 17px;
            /* Tamaño máximo durante el hover */
        }

        /* ESTILOS POUBLICIDAD*/
        .ad-container {
            border: 2px solid #ccc;
            padding: 10px;
            text-align: center;
            background-color: #f7f7f7;
        }

        .ad-title {
            font-size: 18px;
            margin-bottom: 5px;
        }

        .ad-image {
            max-width: 100%;
            height: auto;
        }

        .ad-description {
            font-size: 14px;
            color: #666;
        }


        /*cursor*/
        .explicacionTuristico img {
            max-width: 100%;
            height: auto;
            cursor: pointer;
            transition: opacity 0.4s, width 0.2s, height 0.2s;
        }
    </style>

    <script>
        $(document).ready(function () {
            // Ocultar el texto de las tarjetas al iniciar la página
            $("#portadaCosta").hide();
            $("#portadaCosta").fadeIn(2500);
            $('#tituloCosta').animate({
                fontSize: '58px',
                color: 'green'
            }, 2000);

        });

        $(document).ready(function () {
            $('.explicacionTuristico img').click(function () {
                $(this).animate({
                    opacity: 0.5
                }, 400).animate({
                    opacity: 1
                }, 400);
            });

            $('.explicacionTuristico img').hover(function () {
                $(this).animate({
                    width: '+=20px',
                    height: '+=20px'
                }, 200);
            }, function () {
                $(this).animate({
                    width: '-=20px',
                    height: '-=20px'
                }, 200);
            });
        });

        //Animacion para los botones estilo acordeon
        $(document).ready(function () {
            // Obtener todos los botones del acordeón
            var acc = document.getElementsByClassName("accordion");

            // Agregar el evento de clic a cada botón del acordeón
            for (var i = 0; i < acc.length; i++) {
                acc[i].addEventListener("click", function () {
                    /* Alternar entre agregar y quitar la clase "active" para activar el acordeón */
                    this.classList.toggle("active");

                    /* Obtener el contenido asociado con el botón actual */
                    var panel = this.nextElementSibling;

                    /* Si el contenido está abierto, ciérralo; si está cerrado, ábrelo */
                    if (panel.style.maxHeight) {
                        panel.style.maxHeight = null;
                    } else {
                        panel.style.maxHeight = panel.scrollHeight + "px";
                    }
                });
            }
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
            @require_once 'vistas/head.php'

                ?>



            <div class="container">

                <!-- EMPIEZA MENÚ DESPLEGABLE -->
                <div id="menu">
                    <div> <a href="#resumen">
                            <h6 class="text-center">RESÚMEN</h6>
                        </a> </div>
                    <div> <a href="#lugTuristico">
                            <h6 class="text-center">LUGARES TURÍSTICOS</h6>
                        </a></div>
                    <div> <a href="#gastronomia">
                            <h6 class="text-center">GASTRONOMÍA</h6>
                        </a></div>
                    <div> <a href="#tradiciones">
                            <h6 class="text-center">TRADICIONES</h6>
                        </a> </div>
                </div>


                <!-- TERMINA MENPU DESPLEGABLE -->


                <main>
                    <!-- ** A PARTIR DE AQUÍ VA EL CÓDIGO DE CADA REGIÓN *** -->

                    <h2 id="tituloCosta"
                        style="padding: 20px 0px 0px; text-align:center; font-family:Georgia, 'Times New Roman', Times, serif "
                        class="animated-tittle">COSTA ECUATORIANA</h2>
                    <div class="m-2 text-center">

                        <div class="container">
                            <div class="row">
                                <div class="m-1 text-center">
                                    <img src="imgCosta/bannerCosta.jpg" alt="" class="img-fluid" id="portadaCosta">
                                </div>
                                <hr>
                                <hr>
                                <!-- ** PEQUEÑA RESEÑA DE LA REGIÓN COSTA *** -->
                                <div id="resumen" class="parrafo1 col-lg-6">
                                    <p> Bañadas por las aguas del Océano Pacífico y con un clima cálido tropical,
                                        durante
                                        todo el año, la
                                        Costa permite a los viajeros vivir emocionantes aventuras. Montañita, es
                                        conocida
                                        por los fanáticos
                                        de los deportes acuáticos, en particular por surfistas y por los amantes de la
                                        playa. La Isla de la
                                        Plata, Puerto Cayo y Puerto López son destinos ideales para el avistamiento de
                                        las
                                        ballenas
                                        jorobadas, entre junio y octubre llegan al país para vivir la más romántica
                                        historia
                                        de amor.</p>
                                </div>

                                <div class="parrafo1 col-lg-6">
                                    <p> En la profundidad del territorio, alejados del mar, se encuentran, por su parte,
                                        pintorescos
                                        pueblos, ciudades históricas y modernas, conocidas por su gastronomía local, sus
                                        artesanías y sus
                                        atractivos turísticos. La pujante ciudad de Guayaquil, se levanta como el puerto
                                        principal y la
                                        capital económica del país. Kilómetros de plantaciones de cacao, bananas,
                                        palmeras y
                                        arroz,
                                        complementan la riqueza de la Costa cuyos atardeceres de dorados interminables
                                        estallan
                                        caprichosamente.</p>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col col-lg-4">
                                    <!-- ** TURISMO EN LA COSTA *** -->
                                    <button class="accordion" style="text-align: center;">Lugares Turísticos</button>
                                    <div class="panel">
                                        <br>
                                        <img src="imgCosta/lugarT.jpg" height="200px" width="300px">
                                        <br>
                                        <br>
                                        <p>Desde las playas cubiertas de palmeras y gigantescos acantilados que se alzan
                                            sobre profundas cavernas,
                                            hasta los verdes bosques de Mangle o los bosques tropicales secos, los 1600
                                            km
                                            (1.000 millas) de playas
                                            se tornan interminables en la paradisiaca Costa ecuatoriana. Bañadas por las
                                            aguas del Océano Pacífico y
                                            cuenta con un clima cálido tropical, durante todo el año, la Costa permite a
                                            los
                                            viajeros vivir
                                            emocionantes y espectaculares aventuras. Montañita, es conocida por los
                                            fanáticos de los deportes
                                            acuáticos, en particular por surfistas y por los amantes de la playa.</p>
                                    </div>
                                </div>

                                <div class="col col-lg-4">
                                    <button class="accordion" style="text-align: center;">Gastronomía</button>
                                    <div class="panel">
                                        <h4></h4>
                                        <br>
                                        <img src="imgCosta/gastronomia.jpg" height="200px" width="300px">
                                        <br>
                                        <br>
                                        <p>Si de gastronomía se trata, Ecuador es una tierra bendita, como pocos países
                                            en
                                            el
                                            mundo, cuenta con
                                            una extensa y exquisita variedad de productos de origen natural, que han
                                            sido
                                            aprovechados para dar
                                            ‘vida’ a verdaderos manjares, platos dignos de los dioses. Y cada región
                                            tiene
                                            una
                                            oferta distinta,
                                            como por ejemplo, la Costa, en donde predominan platos como el arroz con
                                            menestra y
                                            carne, el seco,
                                            la salchicha; los preparados con verde como el bolón, el tigrillo,
                                            patacones; y
                                            por
                                            supuesto, los
                                            mariscos, camarón, cangrejo, pescado, y muchas delicias más.</p>
                                    </div>
                                </div>


                                <div class="col col-lg-4">
                                    <button class="accordion" style="text-align: center;">Tradiciones</button>
                                    <div class="panel">
                                        <br>
                                        <img src="imgCosta/tradicion.jpg" height="200px" width="300px">
                                        <br>
                                        <br>
                                        <p>La cultura ecuatoriana contemporánea tiene raíces diversas y profundas en una
                                            historia tan rica como
                                            multiétnica. Así es que se investigó sobre las culturas más representativas
                                            de
                                            la
                                            costa, su lengua,
                                            ubicación, vestimenta, tradiciones, etc. Mismas culturas que son: Chorrera,
                                            Bahía,
                                            Guangala, Jama
                                            Coaque, Manteña, Tolita, Valdivia. Cada cultura es interesante debido ya sea
                                            debido
                                            a sus orígenes,
                                            vestimenta, entre otros; analizando lo anterior mencionado se pudo concluir
                                            que
                                            la
                                            Costa ecuatoriana
                                            tiene aún vivas sus culturas, dándonos a conocer extraordinarios
                                            conocimientos
                                            sobre
                                            ellas.</p>
                                    </div>
                                </div>
                                <br>
                                <hr>
                                <br>
                                <script>

                                </script>

                                <!-- ** EXPLICACION DE LUGARES TURISTICOS *** -->
                                <div class="explicacionTuristico col-lg-12">
                                    <h2 id="lugTuristico">LUGARES TURISTICOS</h2>
                                    <br>
                                    <div class="row ">
                                        <br>
                                        <div class="detalleTur col-lg-8">
                                            <br>
                                            <center>
                                                <h5> Montañita</h5>
                                            </center>
                                            <p>Un pequeño pueblo convertido en punto de encuentro para todo turista que
                                                visita el Ecuador;
                                                encuentras gente de distintas partes del mundo, atraídos por sus
                                                reconocidas
                                                olas, buen
                                                clima, el agradable estilo de vida bohemio y las entretenidas farras
                                                nocturnas que goza el
                                                lugar, donde cada día de la semana hay una fiesta distinta.</p>
                                        </div>
                                        <div class="explicacionTuristico col-lg-4">
                                            <br>
                                            <br>
                                            <img src="imgCosta/montañita.jpg" height="100px" width="200px">
                                        </div>

                                        <div class="detalleTur col-lg-8">
                                            <br>
                                            <center>
                                                <h5> Bosque Petrificado Puyango</h5>
                                            </center>
                                            <p>Conformado por árboles con una edad aproximada de 100 millones de años y
                                                es
                                                tal vez la mayor
                                                colección de madera petrificada en el mundo; el ejemplar más grande
                                                tiene 2
                                                m de diámetro y
                                                15 m de largo. También se encuentran fósiles de hojas que corresponden a
                                                cuatro géneros de
                                                plantas primitivas semejantes a los helechos y palmas actuales.
                                            </p>
                                        </div>
                                        <div class="explicacionTuristico col-lg-4">
                                            <br>
                                            <br>
                                            <img src="imgCosta/Bosque.jpg" height="100px" width="200px">
                                        </div>

                                        <div class="detalleTur col-lg-8">
                                            <br>
                                            <center>
                                                <h5> Atacames</h5>
                                            </center>
                                            <p>Se localiza al norte de la región litoral del Ecuador, asentada en una
                                                extensa llanura, a
                                                orillas del océano Pacífico. Es famosa en todo el Ecuador por poseer una
                                                de
                                                las playas más
                                                grandes del Ecuador y una de las más cercanas a Quito; por lo que la
                                                mayoría
                                                de los
                                                habitantes de esta ciudad hacen de este balneario uno de los más
                                                concurridos
                                                y populares del
                                                país.</p>
                                        </div>
                                        <div class="explicacionTuristico col-lg-4">
                                            <br>
                                            <br>
                                            <img src="imgCosta/Atacames.jpg" height="100" width="200">
                                        </div>


                                        <div class="detalleTur col-lg-8">
                                            <br>
                                            <center>
                                                <h5> Playa Los Frailes</h5>
                                            </center>
                                            <p>Una playa encantadora y muy limpia (gracias a que se encuentra dentro del
                                                Parque Nacional
                                                Machalilla,), su arena es blanca, el tono del mar cambia a turquesa y en
                                                el
                                                sitio existe un
                                                mirador –Las Fragatas– que, para llegar a la parte alta y ser testigo de
                                                una
                                                vista única, se
                                                atraviesa primero por un sendero lleno de naturaleza. Por este mismo
                                                camino
                                                se llega a la
                                                playa de La Tortuga, otra orilla natural que no puedes dejar de visitar.
                                            </p>
                                        </div>

                                        <div class="explicacionTuristico col-lg-4">
                                            <br>
                                            <br>
                                            <img src="imgCosta/PalyaFrailes.jpg" height="100px" width="200px">
                                        </div>

                                        <div class="detalleTur col-lg-8">
                                            <br>
                                            <center>
                                                <h5> Malecón 2000</h5>
                                            </center>
                                            <p>Es un proyecto de regeneración urbana del antiguo Malecón Simón Bolívar,
                                                de
                                                2.5 km de
                                                extensión en donde se puede disfrutar de los grandes monumentos de la
                                                historia de Guayaquil,
                                                museos, jardines, fuentes, centro comercial, restaurantes, bares, patios
                                                de
                                                comida, el
                                                primer cine IMAX de Sudamérica, así como muelles, desde donde se puede
                                                abordar embarcaciones
                                                para realizar paseos diurnos y nocturnos por el río Guayas y miradores
                                                entre
                                                otras
                                                atracciones. </p>
                                        </div>
                                        <div class="explicacionTuristico col-lg-4">
                                            <br>
                                            <br>
                                            <img src="imgCosta/Malecon2000.jpg" height="100px" width="200px">
                                        </div>
                                    </div>
                                </div>
                                <hr>


                                <!-- ** EXPLICACION GASTRONOMICA *** -->
                                <div class="explicacionGastronomia">
                                    <h4 id="gastronomia">Gastronomía</h4>
                                    <div class=" explicacionGastronomia col-lg-12">
                                        <br>
                                        <img src="imgCosta/Encocado.jpg" class="rounded float-left" alt="..."
                                            height="200px" width="300px">

                                    </div>

                                    <div class="rowGatronomia col-lg-12">
                                        <br>
                                        <center>
                                            <h5> Encocao </h5>
                                        </center>
                                        <p class="texto-agrandable">Este plato de origen criollo, elaborado con pescado
                                            o mariscos es un estofado
                                            hecho a bases de
                                            leche de coco. Para su preparación es necesario realizar un refrito con
                                            cebolla,
                                            pimiento y ajo
                                            para después hervirlo junto con la leche de coco. Una vez cocinada esta
                                            infusión, se mezcla con
                                            los mariscos y hierbas locales como el oreganón, el chirarán y la
                                            chillangua.
                                            Arroz blanco y
                                            patacones son compañeros ideales para resaltar los sabores de esta suculenta
                                            preparación. En la
                                            provincia verde, Esmeraldas, se extiende el mayor cultivo de palma de coco
                                            del
                                            país.</p>
                                    </div>


                                    <div class=" explicacionGastronomia col-lg-12">
                                        <br>
                                        <img src="imgCosta/Encebollados.jpg" class="rounded float-left" alt="..."
                                            height="200px" width="300px">

                                    </div>
                                    <div class="rowGatronomia  col-lg-12">
                                        <br>
                                        <center>
                                            <h5> Encebollado </h5>
                                        </center>
                                        <p class="texto-agrandable">Es una sopa típica de la costa ecuatoriana, pero en
                                            especial de la provincia
                                            de
                                            Guayas. Su
                                            verdadero nombre es ‘picante de pescado’ y según varios historiadores, su
                                            origen
                                            verdadero se
                                            remonta a la cultura Valdivia, quienes cocinaban el pescado a fuego de leña
                                            en
                                            ollas de
                                            cerámica, y que, tras la conquista, sus descendientes fusionaron el pescado
                                            con
                                            la yuca y otros
                                            ingredientes traídos por los españoles. Con los años, esta preparación llegó
                                            a
                                            la gran ciudad y
                                            se convirtió en un medio de subsistencia y de alimentación para los
                                            astilleros.
                                        </p>
                                    </div>

                                    <div class=" explicacionGastronomia col-lg-12">
                                        <br>
                                        <img src="imgCosta/parrilla.jpeg " class="rounded float-left" alt="..."
                                            height="200px" width="300px">

                                    </div>
                                    <div class="rowGatronomia col-lg-12">
                                        <br>
                                        <center>
                                            <h5> Parrillda </h5>
                                        </center>
                                        <p class="texto-agrandable">Y si hablamos de la Gastronomía de Santo Domingo de
                                            los Tsáchilas, la
                                            exquisita
                                            Parrillada
                                            permite degustar las mejores carnes del Ecuador.
                                            El plato consta principalmente de lomo fino, chuleta, ubre, chorizos y demás
                                            vísceras, aunque
                                            hay variedades que incluyen pollo. Se suele servir en una parrilla con
                                            carbón
                                            encendido y se
                                            acompaña de yuca sea cocida o frita y ensalada fresca de lechuga, tomate y
                                            pimiento, además de
                                            una deliciosa limonada.</p>
                                    </div>

                                    <div class=" explicacionGastronomia col-lg-12">
                                        <br>
                                        <img src="imgCosta/tigrillo.jpg " class="rounded float-left" alt="..."
                                            height="200px" width="300px">

                                    </div>
                                    <div class="rowGatronomia col-lg-12">
                                        <br>
                                        <center>
                                            <h5> Tigrillo </h5>
                                        </center>
                                        <p class="texto-agrandable">Plátano verde majado (cocinado y aplastado),
                                            mezclado con huevo, queso y
                                            chicharrón son los
                                            ingredientes que conforman el plato más representativo de la provincia de El
                                            Oro. Antiguamente,
                                            el pueblo zarumeño, a través de brasas, asaba los plátanos que, al tener
                                            contacto con el fuego,
                                            se tostaban por partes. Posteriormente eran aplastados con una piedra sobre
                                            una
                                            batea de madera.
                                            Las manchas negras que sobresalían sobre color normal del plátano, similares
                                            a
                                            las de un felino,
                                            dieron el nombre a este delicioso platillo que por lo general es acompañado
                                            con
                                            un exquisito
                                            café de aroma frutal cosechado en tierras Zarumeñas.</p>
                                    </div>

                                    <div class=" explicacionGastronomia col-lg-12">
                                        <br>
                                        <img src="imgCosta/viche.jpg " class="rounded float-left" alt="..."
                                            height="200px" width="300px">

                                    </div>
                                    <div class="rowGatronomia col-lg-12">
                                        <br>
                                        <center>
                                            <h5> Viche </h5>
                                        </center>
                                        <p class="texto-agrandable">La fusión de verduras, maní y pescado cocinado a
                                            fuego lento, dan forma a uno
                                            de
                                            los manjares más
                                            exquisitos de Manabí: el viche. Esta icónica receta cautiva a los paladares
                                            más
                                            exigentes de
                                            todo el planeta que llegan hasta esta provincia costera de Ecuador para
                                            probar
                                            su sabor fresco e
                                            intenso.
                                            Este plato es considerado como ancestral ya que sus principales ingredientes
                                            fueron usados por
                                            nuestros antepasados, y es así que de generación en generación se ha pasado
                                            esta
                                            receta que se
                                            puede degustar tanto en la zona costera como rural de la provincia de
                                            Manabí.
                                        </p>
                                    </div>
                                </div>

                                <!-- ** PUBLICIDAD *** -->

                                <div class="ad-container">
                                    <h2 class="ad-title">¡Restaurante!</h2>
                                    <img src="https://miredvista.co/wp-content/uploads/2022/09/sitios-17.jpg " class="rounded float-left" alt=""
                                        height="200px" width="300px">

                                    <p class="ad-description">Aprovecha y visitanos degustando la buena sazón Manabita. ¡No
                                        te lo pierdas!</p>
                                    <a href="costa/tienda1.php" target="_blank">Pide tu comída desde la página WEB</a>
                                </div>



                                <hr>
                                <!-- ** EXPLICACION Tradiciones *** -->
                                <div class="explicacionTradiciones">
                                    <div class="row col-lg-12">
                                        <h4 id="tradiciones">Tradiciones</h4>
                                        <br>
                                        <br>

                                        <div class=" explicacionTradiciones col-lg-3">
                                            <br>
                                            <img class="card-img-top accordion-image" src="imgCosta/RodeoMontubio.jpg "
                                                class="img-thumbnail" height="200px" width="300px">

                                        </div>

                                        <div class="rowtradiciones col-lg-6">
                                            <br>
                                            <center>
                                                <h5> Rodeo Montubio </h5>
                                            </center>
                                            <p>Esta tradición nace de los vaqueros que habitan en las zonas rurales o
                                                del
                                                campo, específicamente en el litoral ecuatoriano. Por medio del rodeo
                                                los
                                                participantes dan una muestra de las costumbres y las habilidades
                                                adquiridas
                                                en el trabajo que diariamente desempeñan principalmente en sitios como
                                                las
                                                haciendas.</p>
                                        </div>
                                        <div class=" explicacionTradiciones col-lg-3">
                                            <br>
                                            <img class="card-img-top accordion-image" src="imgCosta/RodeoMontubio1.jpg "
                                                class="img-thumbnail" height="200px" width="300px">

                                        </div>
                                        <!-- ************* -->
                                        <hr class="mt-3">
                                        <div class=" explicacionTradiciones col-lg-3">
                                            <img class="card-img-top accordion-image" src="imgCosta/Amorfinos.jpg "
                                                class="img-thumbnail" height="200px" width="300px">
                                        </div>

                                        <div class="rowtradiciones col-lg-6">
                                            <br>
                                            <center>
                                                <h5> Amorfinos </h5>
                                            </center>
                                            <p>Como parte de los rodeos se destacan los amorfinos, que consisten en
                                                composiciones cortas poéticas o canciones de origen popular. Estos
                                                forman
                                                parte de la tradición oral de los pueblos, en donde a diferencia de la
                                                copla, se llega a mezclar lo romántico con sentimientos impuestos a
                                                partir
                                                de las vivencias del corazón. </p>
                                        </div>

                                        <div class=" explicacionTradiciones col-lg-3">
                                            <img class="card-img-top accordion-image" src="imgCosta/Amorfinos1.jpeg "
                                                class="img-thumbnail" height="200px" width="300px">

                                        </div>
                                        <!-- ************* -->
                                        <hr class="mt-3">

                                        <div class=" explicacionTradiciones col-lg-3">
                                            <img class="card-img-top accordion-image" src="imgCosta/PolcaMontubia.jpg "
                                                class="img-thumbnail" height="200px" width="300px">
                                        </div>

                                        <div class="rowtradiciones col-lg-6">
                                            <br>
                                            <center>
                                                <h5>Polca Montubia</h5>
                                            </center>
                                            <p>Esta surge gracias al intercambio cultural espontáneo que comenzó a darse
                                                cuando los europeos llegaron a Ecuador.
                                                Los campesinos y esclavos al ver las danzas europeas las imitaban
                                                agregando
                                                sus propios ritmos y pasos y es así como surge esta variación de la
                                                polca
                                                que se fue popularizando en todo el país..</p>
                                        </div>

                                        <div class=" explicacionTradiciones col-lg-3">
                                            <img class="card-img-top accordion-image" src="imgCosta/PolcaMontubia1.jpg "
                                                class="img-thumbnail" height="200px" width="300px">

                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- ** AQUI FINALIZA EL CÓDIGO DE CADA REGIÓN *** -->
                </main>
            </div>

            <?php
            @require_once 'vistas/foot2.php'
                ?>

        </div>
    </div>

</body>

</html>