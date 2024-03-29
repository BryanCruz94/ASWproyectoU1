<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.css">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

    <script src="assets/js/script_Menu.js"></script>

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

        /*estilo de título */
        .animated-title {
            font-size: 48px;
            color: green;
            text-align: center;
        }

        /* Estilo al hacer hover en los títulos */
        .custom-title:hover {
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            /* Cambia esta fuente al deseado */
            color: #1b801b;
            /* Cambia este color al deseado */
        }

        #animated-border:before {
            content: "";
            position: absolute;
            top: 0px;
            left: 20px;
            width: 100%;
            height: 100%;
            border: 8px solid transparent;
            box-sizing: border-box;
            transition: border-color 0.10s ease;
        }

        /* Cambia este color al deseado */
        #animated-border:hover:before {
            border-color: #25e64f;
        }


    </style>

    <script>
        $(document).ready(function () {
            // Ocultar el texto de las tarjetas al iniciar la página
            $("#PortadaAmazonia").hide();
            $("#PortadaAmazonia").fadeIn(4500);

            $('#tituloAmaz').animate({ fontSize: '58px', color: 'green' }, 2000);

            //


            //oculta el texto de la car-text
            $(".card-text").hide();


            // Mostrar el texto al pasar el cursor
            $(".card").hover(
                function () {
                    $(this).find(".card-text").slideDown();
                },

                // Ocultar el texto al quitar el cursor
                // function () {
                //    $(this).find(".card-text").slideUp();
                //}
            );

            //cambiar imagen aventura y deportes
            $("#imgAventura").click(
                function () {
                    $("#imgAventura").attr("src", "assets/imgAmazon/mix2.jpg");
                }
            );

            //cambiar imagen gastronomía
            $("#imgGastronomia").dblclick(
                function () {
                    $("#imgGastronomia").attr("src", "assets/imgAmazon/gastronomia2.jpg");
                }
            );

            $("#imgCultura").hover(
                function () {
                    $("#imgCultura").attr("src", "assets/imgAmazon/culturaCamb.jpg");
                }
            );

            //Cambiar fuente y color a los tres subtítulos
            // Agregar clase inicial a los títulos
            $('h3').addClass('custom-title');

            // Al hacer clic en el botón, ocultar el botón y mostrar el contenido
            $('#myButton').on('click', function () {
                $(this).hide();
                $('#myContent').show();
            });

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
                    <div> <a href="#tituloAv">
                            <h6 class="text-center">AVENTURA Y NATURZALEZA</h6>
                        </a> </div>
                    <div> <a href="#gastronomia">
                            <h6 class="text-center">GASTRONOMÍA</h6>
                        </a></div>
                    <div> <a href="#cultura">
                            <h6 class="text-center">CULTURAS</h6>
                        </a></div>
                </div>


                <!-- TERMINA MENPU DESPLEGABLE -->


                <main>
                    <!-- ***** A PARTIR DE AQUÍ VA EL CÓDIGO DE CADA REGIÓN ****** -->


                    <h2 id="tituloAmaz"
                        style="padding: 20px 0px 0px; text-align:center; font-family:Georgia, 'Times New Roman', Times, serif "
                        class="animated-tittle">AMAZONÍA ECUATORIANA</h2>

                    <div id="animated-border" class="col-12 text-center col-md-12 col-sm-12">
                        <img src="assets/imgAmazon/img.jpeg" class="img-rounded img-fluid" alt="imagen publicidad"
                            id="PortadaAmazonia">
                    </div>
                    <button class="btn btn-success" id="myButton"
                        style="text-align: center; margin-top: 55px; margin-left: 500px; padding-bottom:10px">
                        Conoce más de la historia amazónica..! Haz Click</button>

                    <div id="myContent" style="display: none;">
                        <p style="padding-top: 10px; text-align:justify ">
                            Cada 12 de febrero, en Ecuador rendimos homenaje a la región más grande y natural de nuestro
                            país: la Amazonía.
                            Este paraíso verde nos invita a descubrir un mundo de diversidad infinita, partiendo desde
                            sus
                            habitantes –integrantes de pueblos indígenas ancestrales–,
                            pasando por su rica flora, fauna, ríos, paisajes, gastronomía y variedad de actividades para
                            realizar.
                            Desde 1944, el 12 de febrero fue declarado como el Día de la Amazonía ecuatoriana, debido a
                            que,
                            en el mismo día, del año 1542 se dio el descubrimiento del Río Amazonas,
                            considerado el más largo y caudaloso del mundo.
                            Actualmente, esta región está conformada por seis provincias (Sucumbíos, Orellana, Napo,
                            Pastaza, Morona Santiago y Zamora Chinchipe),
                            cada una de ellas con diferentes cualidades y atractivos turísticos, ideales para vivir
                            experiencias auténticas y reconectarse con la naturaleza.
                        </p>
                    </div>

                    <!-- PRIMERA PARTE  -->
                    <div class="row justify-content-end">
                        <div class=" col-lg-4 col-md-12 col-sm-12" style="padding-top: 10px;">
                            <h3 id="tituloAv" class="font-italic text-success"
                                style="text-align: center; padding-top:15px;">
                                AVENTURA Y NATURALEZA</h3>
                        </div>
                        <div class=" col-2"></div>
                    </div>


                    <div class="row justify-content-center">
                        <div class="col-lg-12 col-md-12" style="padding: 10px">
                            <div class="card text-center justify-content-center">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                        <div class="row justify-content-center align-items-center pl-1"
                                            style=" height: 100%;">

                                            <div class="col">
                                                <img src="assets/imgAmazon/aventura.jpg" class="card-img " alt="..."
                                                    id="imgAventura" />
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-12">
                                        <p class="card-text" style="text-align: justify; padding: 20px;">
                                            Los extensos bosques, los grandes ríos, las hermosas cascadas y los largos
                                            senderos son recursos ideales para practicar turismo de aventura. En la
                                            provincia de Napo, en compañía de guías especializados, es posible dejar
                                            fluir la adrenalina a través de la práctica de kayak y rafting en los ríos
                                            Quijos, Cosanga, Hollín, Jondachi, Jatunyacu y Misahuallí, que cuentan con
                                            niveles para principiantes y expertos. Los costos varían según el tour que
                                            se contrate, desde $60,00 por persona, por día. Asimismo, se puede realizar
                                            senderismo y paseo en canoa en los ríos y lagunas que ofrecen facilidades
                                            para disfrutar de las frescas aguas.Uno de los sitios ideales para
                                            conectarse con la
                                            naturaleza mientras se realiza un paseo en canoa es la Laguna
                                            Taracoa, administrado por el Centro de Turismo Comunitario Ila
                                            Kucha, en Orellana. El costo aproximado es de $5,00 por persona.

                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



            </div>
            <!-- ............... -->
            <div class="row">
                <div class="col-md-4 col-sm-12" style="padding: 20px">
                    <!--Clase de la tarjeta modificada en el centrado del texto y el background de la tarjeta-->
                    <div class="card text-center  mb-3">
                        <img src="assets/imgAmazon/cuyabeno.jpg" height=300px class="card-img-top" alt="Cuyabeno" />
                        <div class="card-body">
                            <h5 class="card-title text-success">Cuyabeno</h5>
                            <p class="card-text">
                                El Cuyabeno pertenece al Sistema Nacional de Áreas Protegidas del MAE,
                                se encuentra situada en Sucumbíos. El área protegida toma el nombre del río
                                Cuyabeno, que en su
                                curso medio se desborda originando un complejo de 14 lagunas.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12" style="padding: 20px">
                    <div class="card text-center mb-3 card-img-top">
                        <img src="assets/imgAmazon/NAPO-MISAHUALLÍ.jpg" height=300px alt="Misahualli" />
                        <div class="card-body">
                            <h5 class="card-title text-success">Misahualli</h5>
                            <p class="card-text">
                                Misahuallí, en la provincia de Napo, cantón Tena, es un destino para recorrer
                                bosques, ríos y
                                cascadas que te harán enamorar de la Amazonía ecuatoriana.
                                Además, mediante los Centros de Turismo Comunitario (CTC) se conocerá las
                                tradiciones de pueblos
                                milenarios .

                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12" style="padding: 20px">
                    <div class="card text-center ">
                        <img src="assets/imgAmazon/yasuni.jpg" height=300px class="card-img-top" alt="Yasuni " />
                        <div class="card-body">
                            <h5 class="card-title text-success">Yasuní</h5>
                            <p class="card-text">
                                El Parque Nacional Yasuní es uno de los lugares más biodiversos de la tierra, en
                                donde los amantes
                                de la aventura tendrán contacto directo con la naturaleza en su máximo esplendor, es
                                el área protegida más
                                grande del Ecuador continental, es un lugar lleno de paz y armonía.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <br>
            <!-- Segunda parte -->
            <div class="row justify-content-start">
                <div class=" col-lg-4 col-md-12 col-sm-12">
                    <h3 class="font-italic text-primary" style="text-align: center;" id="gastronomia">
                        GASTRONOMÍA</h3>
                </div>
                <div class=" col-2"></div>
            </div>


            <div class="row justify-content-center">
                <div class="col-lg-12 col-md-12" style="padding: 10px">
                    <div class="card text-center justify-content-center">
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-12">
                                <div class="d-flex align-items-center h-100">
                                    <p class="card-text m-auto" style="text-align: justify; padding: 20px;">
                                        Por la conservación de sus saberes ancestrales, la gastronomía amazónica es una
                                        de las menos intervenidas de Latinoamérica. En sus destinos es posible
                                        encontrarse con exquisitas y exóticas preparaciones como los pinchos de gusanos
                                        (mayores), los destacados maitos de pescado o ricas bebidas como la chicha de
                                        chonta, yuca o guayusa. Según el Mapa Gastronómica del país, en las provincias
                                        amazónicas se destacan otros platos como: casabe de yuca y sinchicara, en
                                        Sucumbíos; uchumanka y jugo de cocona, en Orellana; maito de filete de pescado y
                                        té de guayusa, en Napo; maito de pescado y té de guayusa, en Pastaza; ayampaco y
                                        chuchuguaso, en Morona Santiago; y caldo de corroncho y licor sietepingas, en
                                        Zamora Chinchipe. Los platos típicos se pueden degustar desde los $5,00.
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <div class="row justify-content-center align-items-center pl-1 h-100">
                                    <div class="col">
                                        <img src="assets/imgAmazon/maito-amazonia-ecuatoriana.jpeg" class="card-img"
                                            alt="..." id="imgGastronomia" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <!-- ............... -->
        <div class="row">
            <div class="col-md-4 col-sm-12" style="padding: 20px">
                <!--Clase de la tarjeta modificada en el centrado del texto y el background de la tarjeta-->
                <div class="card text-center  mb-3">
                    <img src="assets/imgAmazon/ayampaco 2.jpg" height=300px class="card-img-top" alt="Ayampaco" />
                    <div class="card-body">
                        <h5 class="card-title text-primary">Ayampaco</h5>
                        <p class="card-text">
                            Uno de los ingredientes principales del ayampaco es la hoja de bijao, se lo
                            puede preparae con diferentes carnes bien sazonadas, entre ellas estápescado,
                            chancho y pollo
                            . Su preparación no es complicada.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12" style="padding: 20px">
                <div class="card text-center mb-3 card-img-top">
                    <img src="assets/imgAmazon/chontacuro.jpg" height=300px alt="Chontacuro" />
                    <div class="card-body">
                        <h5 class="card-title text-primary">Chontacuros</h5>
                        <p class="card-text">
                            También conocido como mayón. es un gusano que crece en la palma de chonta, son
                            usados para remedios
                            caseros para problemas respiratorias y desnutrición. Se los puede degustar
                            crudos, asados a la plancha,
                            en maito,etc.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12" style="padding: 20px">
                <div class="card text-center ">
                    <img src="assets/imgAmazon/seco_de_guanta-6.jpg" height=300px class="card-img-top" alt="Guanta " />
                    <div class="card-body">
                        <h5 class="card-title text-primary">Guanta</h5>
                        <p class="card-text">
                            Los platos de guanta son muy nutritivos, además de deliciosos; este muy fácil de
                            preparar y
                            podría decirse
                            que es un plato emblemático del oriente ecuatoriano. La carne suele usarse en
                            seco, ahumada, caldo, guisado, etc.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- tercera parte de las culturas  -->
        <div class="row justify-content-end">
            <div class=" col-lg-4 col-md-12 col-sm-12">
                <h3 class="font-italic text-danger" style="text-align: center;" id="cultura">
                    CULTURAS</h3>
            </div>
            <div class=" col-2"></div>
        </div>
<!-- cambios realizados  -->

        <div class="row justify-content-center">
            <div class="col-lg-12 col-md-12" style="padding: 10px">
                <div class="card text-center justify-content-center">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="row justify-content-center align-items-center pl-1" style=" height: 100%;">

                                <div class="col">
                                    <img src="assets/imgAmazon/ii.jpg" class="card-img " alt="..." id="imgCultura" />
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-12">
                            <div class="d-flex align-items-center h-100">
                                <p class="card-text m-auto" style="text-align: justify; padding: 20px;">
                                    En la región habitan 10 nacionalidades y pueblos indígenas distribuidos entre las 6
                                    provincias, cada uno con diferentes costumbres ancestrales, que mediante los
                                    emprendimientos y Centros de Turismo Comunitario comparten con los visitantes.
                                    En la actualidad, muchos de estos pueblos mantienen prácticas como la recolección de
                                    frutos,pesca, caza, danza, shamanismo, gastronomía y medicina natural. Los costos
                                    para
                                    presenciar estas experiencias varían según la provincia, la nacionalidad y
                                    actividades
                                    que se practiquen. En El Coca, se puede visitar emprendimientos turísticos por un
                                    valor
                                    que va desde los $25,00 por persona, en grupos mínimos de 6 personas.
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>
    <!-- ............... -->
    <div class="row">
        <div class="col-md-4 col-sm-12" style="padding: 20px">
            <!--Clase de la tarjeta modificada en el centrado del texto y el background de la tarjeta-->
            <div class="card text-center mb-3">
                <img src="assets/imgAmazon/shuar.jpg" height=300px class="card-img-top" alt="Ayampaco" />
                <div class="card-body">
                    <h5 class="card-title text-danger">Shuar</h5>
                    <p class="card-text">
                        Es una cultura amazónica que ha desarrollado su estilo de vida respondiendo a las
                        exigencias
                        ambientales y contactos interculturales desde los tiempos remotos.Son habiles en la
                        caza y por su tradición
                        de reducción de cabezas, conocida como Tzantsa
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-12" style="padding: 20px">
            <div class="card text-center mb-3 card-img-top">
                <img src="assets/imgAmazon/cofan.jpg" height=300px alt="Cofan" />
                <div class="card-body">
                    <h5 class="card-title text-danger">Cofan</h5>
                    <p class="card-text">
                        Cofán, Kofán o A'i es un pueblo amerindio que habita al noroccidente de la Amazonía
                        en la frontera
                        entre Colombia y Ecuador, entre el río Guamuez, afluente del río Putumayo, y el río
                        Aguarico,
                        afluente del río Napo, en la provincia de Sucumbíos.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-12" style="padding: 20px">
            <div class="card text-center ">
                <img src="assets/imgAmazon/secoya.jpg" height=300px class="card-img-top" alt="Secoya" />
                <div class="card-body">
                    <h5 class="card-title text-danger">Secoya</h5>
                    <p class="card-text">
                        Los Siekopa̱ai del presente se ubican en las orillas del río Aguarico en la
                        provincia de
                        Sucumbíos del Ecuador, con los centros San Pablo de Katëtsiaya y Siecoya Remolino.
                        El termino
                        nativo para la lengua Secoya es Pa̱aikoka, literalmente “la lengua (koka) de la
                        gente”.
                    </p>
                </div>
            </div>
        </div>

    </div>
    <a href="Amazonia/index.php"><button class="ref btn btn-success" style="text-align: center; margin-left: 720px; padding-bottom:10px">Conoce sobre nuestros interesantes paquetes turisticos..!!</button></a> 

    </div>
    <!-- ***** AQUI FINALIZA EL CÓDIGO DE CADA REGIÓN ****** -->
    </main>
    </div>

  <?php
     @require_once 'vistas/foot2.php';
  ?>

    </div>
    </div>

</body>

</html>