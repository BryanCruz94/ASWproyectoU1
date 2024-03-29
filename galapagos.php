<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/css/bootstrap.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <title>ECUA-TRAVELS</title>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>



  <style>
    /* ESTILOS PARA MENÚ DESLIZANTE */

    .menu {
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

    .menu>div {
      font: bold;
      margin-bottom: 40px;
      transition: all 0.3s;

    }

    .menu>div a {
      color: inherit;
      text-decoration: none;
    }

    .menu>div:hover {
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



    @keyframes walk {
      0% {
        transform: translate(0, 0);
      }

      50% {
        transform: translate(200px, 50px);
      }

      100% {
        transform: translate(400px, 100px);
      }


    }

    #walking-gif {
      position: absolute;
    }

    .accordion .card-header {
      background-color: #ffffff;
      border-bottom: 1px solid black;
      padding: 15px;
      position: relative;
    }

    .accordion .card-header :hover {
      background-color: #ebfafd;
    }

    .accordion .card-header h2 {
      font-size: 18px;
      font-weight: 600;
      margin: 0;
    }

    .accordion .card-header .btn {
      color: #5c5959;
      font-size: 18px;
      font-weight: 600;
      text-decoration: none;
      text-align: left;
      width: 100%;
      padding-left: 30px;
      background: transparent url('https://www.yachaytech.edu.ec//wp-content/uploads/2017/08/logo-galapagos.jpg') no-repeat left center;
      background-size: 50px 50px;
    }

    .accordion .card-header .btn:hover {
      color: #000000;
      font-size: 20px;
      font-weight: 700;
      text-decoration: none;
      text-align: left;
      width: 100%;
      padding-left: 30px;
      background: transparent url('https://www.yachaytech.edu.ec//wp-content/uploads/2017/08/logo-galapagos.jpg') no-repeat left center;
      background-size: 50px 50px;
    }

    .accordion .card-header .btn.collapsed {
      background-image: none;
    }

    .accordion .card-header .btn:focus {
      box-shadow: none;
    }

    .accordion .card-body {
      padding: 15px;
    }

    .accordion .card-body p {
      margin-bottom: 0;
    }

    .imgcevi {
      display: block;
      margin-left: 300px;
      margin-right: auto;
    }

    .nuevocev {
      display: block;
      margin-left: 0px;
      margin-right: auto;
    }

    .accordion-image {
      transition: transform 0.3s ease-in-out;
    }

    .accordion-image:hover {
      transform: scale(1.1);
    }

    .card-title {
      text-align: center;
    }

    .ref{
      display: block;
      
    }
  </style>

  <script>
    $(document).ready(function() {
      // Ocultar el texto de las tarjetas al iniciar la página
      $("#portadaGalapagos").hide();
      $("#portadaGalapagos").fadeIn(8000);

      // Con jQuery
      $("#walking-gif").animate({
        left: "400px",
        top: "100px"
      }, 7000, function() {
        $(this).fadeOut();
      });

      // Con JavaScript
      const walkingGif = document.getElementById("walking-gif");
      walkingGif.animate([{
          transform: 'translate(0, 0)'
        },
        {
          transform: 'translate(900px, 400px)'
        }
      ], {
        duration: 5500,
      }).onfinish = function() {
        walkingGif.style.display = "none";
      };



      $(".ctex").hide();

      $(".card").hover(
        function() {
          $(this).find("#marinero").slideDown().stop(); // Mostrar el texto al pasar el cursor
        },
        function() {
          $(this).find("#marinero").slideUp().stop(); // Ocultar el texto al quitar el cursor
        }
      );


      $('.collapse').on('show.bs.collapse', function() {
        $(this).prev('.card-header').find('.btn').addClass('active');
        $(this).prev('.card-header').find('.btn').removeClass('collapsed');
        $(this).prev('.card-header').find('.btn').attr('aria-expanded', true);
      });

      $('.collapse').on('hide.bs.collapse', function() {
        $(this).prev('.card-header').find('.btn').removeClass('active');
        $(this).prev('.card-header').find('.btn').addClass('collapsed');
        $(this).prev('.card-header').find('.btn').attr('aria-expanded', false);
      });


      $("#ceviche").hide();
      $('#imgcevi').click(function() {
        $(this).attr("class", "card-img-top nuevocev");
        $("#ceviche").fadeIn(1000);
      });


      $('#myButton').on('click', function() {
        $(this).hide();
        $('.myContent').fadeIn(1000);
      });



      $('#tituloAmaz').animate({
        fontSize: '58px',
        color: 'green'
      }, 2000);





      $(".menu").hover(function() {

        $(this).animate({
          left: "-22px"
        }, 500, "easeInSine");
      }, function() {
        $(this).stop().animate({
          left: "-150px"
        }, 1500, "easeOutBounce")
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
        <div class="menu">
          <div> <a href="#gastronomia">
              <h6 class="text-center">GASTRONOMÍA</h6>
            </a></div>
          <div> <a href="#lugTuristicos">
              <h6 class="text-center">LUGARES TURÍSTICOS</h6>
            </a> </div>
          <div> <a href="#costTradiciones">
              <h6 class="text-center">COSTUMBRES Y TRADICIONES</h6>
            </a> </div>
        </div>


        <!-- TERMINA MENPU DESPLEGABLE -->




        <main>

          <h2 id="tituloAmaz" style="padding: 20px 0 0 0 ; text-align:center; font-family:Georgia, 'Times New Roman', Times, serif " class="animated-tittle">GALÁPAGOS</h2>

          <img id="walking-gif" src="assets/imgGalapagos/trutr.gif">

          <div class="m-2 text-center">
            <img src="assets/imgGalapagos/Back.png" alt="" class="img-fluid" id="portadaGalapagos">
          </div>

          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="accordion" id="accordionExample">
                  <div class="card">
                    <div class="card-header" id="headingOne">
                      <h2 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                          <p id="gastronomia" style="text-align: center;">La deliciosa gastronomia</p>
                        </button>
                      </h2>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                      <div class="card-body">
                        <div class="collapse-content">
                          <div class="card-body">
                            <div class="row justify-content-center">
                              <div class="col-lg-4 col-md-8" style="padding: 20px">
                                <!--Clase de la tarjeta modificada en el centrado del texto y el background de la tarjeta-->
                                <div class="card text-center  mb-3">
                                  <img src="assets/imgGalapagos/30d4adef40e916e7e201a9d1d1c8f61a.jpg" style="height: 260px;" class="card-img-top" alt="" />
                                  <div class="card-body">
                                    <h5 class="card-title">Arroz Marinero</h5>
                                    <p class="card-text ctex" style="text-align: justify;" id="marinero">
                                      Tal y como su propio nombre indica, el principal ingrediente es el arroz, al cual
                                      se le
                                      añaden
                                      camarones, conchas, calamares, mejillones… en definitiva, todo tipo de mariscos y
                                      pescados.
                                      También suele llevar ajo, cebolla, pimiento, un toque de cilantro y especias
                                      variadas.
                                    </p>
                                  </div>
                                </div>
                              </div>
                              <div class="col-lg-4 col-md-8" style="padding: 20px">
                                <div class="card text-center mb-3">
                                  <img src="assets/imgGalapagos/bacalao.jpg" style="height: 260px;" class="card-img-top" alt="..." id="image-1" />
                                  <div class="card-body">
                                    <h5 class="card-title">Bacalao con papas</h5>
                                    <p class="card-text ctex" style="text-align: justify;" id="marinero">
                                      Este plato tan tradicional de las islas Galápagos son simples: bacalao y patatas.
                                      Aparte
                                      de eso,
                                      se le añade un sofrito a base de pimientos, tomate, ajo, cebolleta… Es un guiso
                                      con una
                                      gran
                                      historia a sus espaldas, si bien hay quienes le añaden ingredientes adicionales
                                      tales
                                      como
                                      arroz.
                                    </p>
                                  </div>
                                </div>
                              </div>
                              <div class="col-lg-4 col-md-8" style="padding: 20px">
                                <div class="card text-center ">
                                  <img src="assets/imgGalapagos/ceviche.jpg" style="height: 282px;" class="card-img-top" alt="..." />
                                  <div class="card-body">
                                    <h5 class="card-title">Ceviche de canchalagua</h5>
                                    <p class="card-text ctex" style="text-align: justify;" id="marinero">
                                      La textura de la canchalagua es dura, similar a la del pulpo, pero su sabor es
                                      parecido
                                      al de
                                      las almejas o conchas. Para la elaboración de este plato, se emplean tomates,
                                      pimientos
                                      y
                                      cebolla también, así como jugo de limón para potenciar su sabor.
                                    </p>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div class="row justify-content-center">
                              <div class="col-lg-12 col-md-8" style="padding: 10px">
                                <div class="card text-center justify-content-center">
                                  <div class="row no-gutters">
                                    <div class="col-lg-4 col-md-12 col-xs-12">
                                      <img src="assets/imgGalapagos/ceviche.jpg" height="" class=" imgcevi card-img-top" alt="..." id="imgcevi" />
                                    </div>
                                    <div class="col-lg-8 col-md-12 col-xs-12" id="ceviche">
                                      <div class="card-body">
                                        <h5 class="card-title">Ceviche de canchalagua</h5>
                                        <p class="card-text " style="text-align: justify;">
                                          La textura de la canchalagua es dura, similar a la del pulpo, pero su sabor es
                                          parecido al de las almejas o conchas. Para la elaboración de este plato, se
                                          emplean
                                          tomates, pimientos y cebolla también, así como jugo de limón para potenciar su
                                          sabor.
                                        </p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>





                          </div>
                        </div>
                      </div>
                    </div>

                  </div>

                  <div class="card">
                    <div class="card-header" id="headingTwo">
                      <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          <p id="lugTuristicos" style="text-align: center;">La diversidad de lugares
                            turisticos</p>
                        </button>
                      </h2>
                    </div>

                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                      <div class="card-body">
                        <div class="collapse-content">
                          <div class="card-body">

                            <div class="row">
                              <div class="col-lg-4 col-md-6 mb-4">
                                <div class="card">
                                  <img src="assets/imgGalapagos/garrapatero.png " class="card-img-top accordion-image" alt="El Garrapatero">
                                  <div class="card-body">
                                    <h5 class="card-title" s>El Garrapatero</h5>
                                    <p class="card-text">El Garrapatero se encuentra en la costa sureste de la Isla
                                      Santa
                                      Cruz, en las
                                      Islas Galápagos. Se puede ingresar a este sector tanto por vía terrestre como por
                                      vía
                                      marítima.
                                      A más de ser utilizado como un lugar de visita para los turistas que llegan a
                                      Galápagos,
                                      es
                                      también usado por la comunidad como un sitio para realizar actividades de
                                      esparcimiento.
                                      Se
                                      puede observar una gran cantidad de especies de aves, entre las que destacan los
                                      pinzones de
                                      Darwin y flamencos.
                                    </p>
                                  </div>
                                </div>
                              </div>
                              <div class="col-lg-4 col-md-6 mb-4">
                                <div class="card">
                                  <img src="assets/imgGalapagos/centro.jpeg" class="card-img-top accordion-image" alt="Centro de Crianza Fausto Llerena">
                                  <div class="card-body">
                                    <h5 class="card-title">Centro de Crianza Fausto Llerena</h5>
                                    <p class="card-text">El Centro de Crianza Fausto Llerena fue creado en el año 1965.
                                      Con el
                                      objeto
                                      de cumplir con el programa de crianza en cautiverio, aquí se encuentran tortugas
                                      de las
                                      especies
                                      presentes en las islas Santa Cruz, Santiago, Española, Pinzón y Pinta. Además, se
                                      localiza el
                                      sendero La Ruta de la Tortuga en donde existe un espacio de exhibición del
                                      emblemático
                                      Solitario
                                      George.</p>
                                  </div>
                                </div>
                              </div>
                              <div class="col-lg-4 col-md-6 mb-4">
                                <div class="card">
                                  <img src="assets/imgGalapagos/tortuga.png" class="card-img-top accordion-image" alt="Tortuga Bay">
                                  <div class="card-body">
                                    <h5 class="card-title">Tortuga Bay</h5>
                                    <p class="card-text">Bahía Tortuga es una hermosa playa de arena blanca, ubicada en
                                      la
                                      isla Santa
                                      Cruz, provincia de Galápagos. Lleva ese nombre por ser un sitio de anidación de
                                      tortugas
                                      marinas. Existe vegetación de la parte baja de la zona de transición, de la zona
                                      seca y
                                      de la
                                      zona costera. Es un sitio ideal para realizar surf y practicar snorkel.</p>
                                  </div>
                                </div>
                              </div>
                              <div class="col-lg-4 col-md-6 mb-4">
                                <div class="card">
                                  <img src="assets/imgGalapagos/laguna.jpg" class="card-img-top accordion-image" alt="LAGUNA LAS NINFAS">
                                  <div class="card-body">
                                    <h5 class="card-title">LAGUNA LAS NINFAS</h5>
                                    <p class="card-text">Esta laguna se encuentra en el cantón Santa Cruz, provincia de
                                      Galápagos,
                                      rodeada de un bosque de manglar y el agrietamiento del manto de lava que da lugar
                                      a un
                                      barranco
                                      de más de 15 m de alto. Aquí se observa vegetación típica de la zona árida. Su
                                      nombre
                                      hace
                                      referencia a que en esta laguna antiguamente acudían a bañarse algunas mujeres
                                      desnudas,
                                      por lo
                                      que los hombres de aquella época le pusieron el nombre de Laguna de las Ninfas.
                                      Una
                                      visita a
                                      este sitio puede transmitir la paz necesaria para contemplar su paisaje.
                                    </p>
                                  </div>
                                </div>
                              </div>
                              <div class="col-lg-4 col-md-6 mb-4">
                                <div class="card">
                                  <img src="assets/imgGalapagos/volcan.jpg" class="card-img-top accordion-image" alt="VOLCÁN SIERRA NEGRA">
                                  <div class="card-body">
                                    <h5 class="card-title">VOLCÁN SIERRA NEGRA</h5>
                                    <p class="card-text">Es considerado como el más antiguo de los volcanes de la isla.
                                      Su
                                      caldera
                                      tiene 10 km de diámetro y es la segunda caldera activa más grande del mundo, se
                                      ubica en
                                      el
                                      cantón Isabela, provincia de Galápagos. Durante la época de lluvia en el volcán se
                                      presenta una
                                      intensa neblina, la misma que reduce la observación del paisaje en la mayoría del
                                      sendero; en
                                      época seca se disfruta de su espectacular paisaje. Es uno de los mejores sitios
                                      para
                                      realizar
                                      interpretaciones geológicas.</p>
                                  </div>
                                </div>
                              </div>
                              <div class="col-lg-4 col-md-6 mb-4">
                                <div class="card">
                                  <img src="assets/imgGalapagos/tintoreras.jpeg" class="card-img-top accordion-image" alt="LAS TINTORERAS">
                                  <div class="card-body">
                                    <h5 class="card-title">LAS TINTORERAS</h5>
                                    <p class="card-text">El islote Las Tintoreras se encuentra ubicado al sur de Puerto
                                      Villamil,
                                      cantón Isabela provincia Galápagos. Tiene una pequeña bahía de aguas completamente
                                      tranquilas de
                                      color turquesa, donde se pueden apreciar lobos marinos, tortugas marinas, iguanas
                                      marinas. Dicha
                                      bahía está conectada a una grieta de aguas cristalinas de poca profundidad donde
                                      se
                                      puede ver
                                      cómo nadan las tintoreras. Existe una grieta de agua en donde se observa
                                      ocasionalmente
                                      el
                                      tiburón punta blanca (Triaenodon obesus) llamado tintorera, que llega al sitio a
                                      descansar. La
                                      mayor parte del sendero es de lava de tipo AA, a excepción de dos playas de arena
                                      blanca
                                      y una
                                      de piedras negras.</p>
                                  </div>
                                </div>
                              </div>
                              <div class="col-lg-4 col-md-6 mb-4">
                                <div class="card">
                                  <img src="assets/imgGalapagos/ratonera.png" class="card-img-top accordion-image" alt="LA RATONERA">
                                  <div class="card-body">
                                    <h5 class="card-title">LA RATONERA</h5>
                                    <p class="card-text">La Ratonera, ubicada en Santa Cruz, Galápagos, está localizada
                                      junto
                                      a la
                                      Estación Científica Charles Darwin, cuenta con una playa de arena blanca. Es un
                                      lugar
                                      perfecto
                                      para observar la puesta de sol sobre Academy Bay. A pesar de los afloramientos
                                      rocosos,
                                      este es
                                      un lugar favorito para los surfistas.
                                    </p>
                                  </div>
                                </div>
                              </div>
                              <div class="col-lg-4 col-md-6 mb-4">
                                <div class="card">
                                  <img src="assets/imgGalapagos/gemelos.jpg" class="card-img-top accordion-image" alt="LOS GEMELOS">
                                  <div class="card-body">
                                    <h5 class="card-title">LOS GEMELOS</h5>
                                    <p class="card-text">
                                      Los Gemelos son una formación geológica ubicada en el cantón Santa Cruz,
                                      Galápagos,
                                      formadas por
                                      hundimientos de origen volcánico, cuando las islas estaban aún activas. Es el
                                      único
                                      lugar de la
                                      isla rodeado de un bosque nativo de escalecias. Aquí habitan varias especies de
                                      aves
                                      terrestres
                                      entre las cuales está el pájaro brujo.</p>
                                  </div>
                                </div>
                              </div>
                              <div class="col-lg-4 col-md-6 mb-4">
                                <div class="card">
                                  <img src="assets/imgGalapagos/playa.png" class="card-img-top accordion-image" alt="PLAYA DE LA ESTACIÓN">
                                  <div class="card-body">
                                    <h5 class="card-title">PLAYA DE LA ESTACIÓN</h5>
                                    <p class="card-text">La Playa de la Estación, ubicada en Santa Cruz, Galápagos, está
                                      localizada en
                                      el camino a la Estación Científica Charles Darwin, es una encantadora playa
                                      rodeada de
                                      un sitio
                                      de descanso donde se puede disfrutar de realizar actividades como snorkel y
                                      natación,
                                      además de
                                      tomar el sol y observar la flora y fauna del lugar.</p>
                                  </div>
                                </div>
                              </div>


                            </div>


                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="card">
                    <div class="card-header" id="headingThree">
                      <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                          <p id="costTradiciones" style="text-align: center;">Tradiciones</p>
                        </button>
                      </h2>
                    </div>

                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                      <div class="card-body">


                        <div class="collapse-content">
                          <div class="card-body">

                            <style>
                              .tradicion {
                                margin-bottom: 50px;
                              }

                              .tradicion h2 {
                                font-size: 2rem;
                                margin-bottom: 20px;
                              }

                              .tradicion p {
                                font-size: 1.2rem;
                                line-height: 1.5;
                              }

                              .tradicion img {
                                max-width: 100%;
                                margin-bottom: 20px;
                              }
                            </style>

                            <div class="container">
                              <h1 class="text-center my-5">Tradiciones de Galápagos</h1>
                              <div class="row">
                                <div class="col-lg-6 col-md-12">
                                  <div class="tradicion">
                                    <img src="assets/imgGalapagos/baile.png" width="500px" height="300px" alt="Imagen del baile ">
                                    <div class="myContent" style="display: none;">
                                      <h3>12 de febrero, el Día de Galápagos provincialización </h3>
                                      <p>El 12 de febrero de todos los años se conmemora el día de las Islas Galápagos,
                                        la
                                        celebración se realiza en los cantones de Santa Cruz y San Cristóbal donde los
                                        turistas pueden disfrutar de las maravillas que Galápagos ofrece como desfiles
                                        cívicos, pregón con carros alegóricos, comparsas, competencias náuticas,
                                        ciclismo
                                        y
                                        programas artísticos.
                                    </div>
                                  </div>

                                </div>
                                <div class="col-lg-6 col-md-12">
                                  <div class="tradicion">
                                    <img src="assets/imgGalapagos/Agueda.jpg" width="500px" height="300px" alt="Imagen de la virgen del Agueda">
                                    <div class="myContent" style="display: none;">
                                      <h2>Las Fiestas de Santa Agueda</h2>
                                      <p> tienen su comienzo con el encendido de la hoguera en honor Santa Agueda la
                                        noche
                                        anterior a su día. En este día se consume vino dulce y los tradicionales bollos
                                        a
                                        todos los asistentes. Al día siguiente, el 6 de febrero, se celebra el día de la
                                        Santa
                                        Aguedilla. Se realizan misas, procesiones y paradas de fe en las cuales se
                                        reparte
                                        comida a los feligreses.</p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <h3 class="btn" id="myButton" style="margin-left: 420px; background: rgb(148, 241, 252);">
                                Mostrar contenido</h3>
                            </div>


                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <br>
          <br>

          <a href="Galapagos/pago2.php" class="ref btn btn-primary"><i class="fas fa-credit-card"></i> <span style="margin-left: 10px;">Buscas paquetes, reserva ahora ya!</span></a>

        </main>
      </div>


      <?php
      @require_once 'vistas/foot2.php'
      ?>

    </div>
  </div>

</body>

</html>