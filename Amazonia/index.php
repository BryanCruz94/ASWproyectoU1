<?php
include 'procesar_reserva.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paquetes Turísticos del Oriente</title>
    <!-- Enlace a la hoja de estilo de Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css"> 
</head>
<body>
    <header class="bg-dark text-white">
        <div class="container">
            <h1 class="py-4">Agencia de Viajes "-------"</h1>
            <nav>
                <ul class="nav">
                    <li class="nav-item"><a class="nav-link" href="#paqueteA">Paquete A</a></li>
                    <li class="nav-item"><a class="nav-link" href="#paqueteB">Paquete B</a></li>
                    <li class="nav-item"><a class="nav-link" href="#paqueteC">Paquete C</a></li>
                </ul>
            </nav>
        </div>
    </header>
    
    <section id="inicio" class="bg-light py-5">
        <div class="container text-center">
            <h2 class="display-4">Explora el Encanto del Oriente</h2>
            <p class="lead">Descubre paquetes turísticos emocionantes y experiencias inolvidables.</p>
        </div>
    </section>

    <!-- ... (secciones de paquetes) ... -->

    <section id="paqueteA" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="img/tour1.jpg" alt="Exploración Cultural" class="img-fluid">
                </div>
                <div class="col-md-6">
                    <h3>Paquete A: El sabor de la vida amazónica</h3>
                    <p>Sumérgete en la rica cultura del oriente mientras visitas lugares emblemáticos...</p>
                    <ul>
                        <li>Transporte a y desde La Casa del Suizo</li>
                        <li>Alojamiento por 2 noches</li>
                        <li>Transporte acuático durante las actividades</li>
                        <li>Guia bilingue</li>
                        <li>Actividades guiadas</li>
                        <li>Alimentación completa</li>
                    </ul>
                    <p>Duración: 3 días/2 noches | Fechas: Todo el año |  Precio: $ <?php echo $precio_por_persona; ?> </p>

                    <form action="formulario_reserva.php" method="post">
                <input type="hidden" name="valor" value=165>
                <input type="submit" class="btn btn-primary" name="valorA" value="Reservar Ahora"> </input>
                </form>
                </div>
                </div>
            </div>
        </div>

    </section>

  <!-- Paquete B  -->
<section id="paqueteB" class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="img/tour2.jpg" alt="Exl" class="img-fluid">
            </div>
            <div class="col-md-6">
                <h3>Paquete B: Exploración Cultural Amazónica</h3>
                <p>Sumérgete en la rica cultura del oriente mientras visitas lugares emblemáticos...</p>
                <ul>
                    <li>Visitas a sitios históricos del Cuyabeno</li>
                    <li>Visitas a comunidades indígenas</li>
                    <li>Interacción con la población local</li>
                    <li>Cocina ancestral con una familia nativa</li>
                    <li>Guia Bilingue</li>
                    <li>Alojamiento por 3 noches</li>
                    <li>Todas las comidas incluidas</li>
                </ul>
                <p>Duración: 4 días | Fechas: Marzo-Abril-Mayo |  Precio: $ <?php echo $precio_por_personaB; ?> </p>
                <form action="formulario_reserva.php" method="post">
                <input type="hidden" name="valor" value=150>
                <input type="submit" class="btn btn-primary" name="valorB" value="Reservar Ahora"> </input>
                 
                </form>
            
            </div>
            </div>
        </div>
    </div>

</section>

  <!-- Paquete C  -->
  <section id="paqueteC" class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="img/tour3C.jpg" alt="Exl" class="img-fluid">
            </div>
            <div class="col-md-6">
                <h3>Paquete C: Intérnate más en la selva </h3>
                <p>Sumérgete en la aventura de la selva, su deliciosa gastronomia y cascadas relucientes...</p>
                <ul>
                    <li>Visitas a las termas de Papallacta</li>
                    <li>Visita a la ciudad portuaria Punta Ahuano</li>
                    <li>Interacción con la población local</li>
                    <li>Visita a AmaZOOnico, centro de rescate para animales</li>
                    <li>Guia Nativo y bilingue</li>
                    <li>Ritual de Limpieza espiritual </li>
                    <li>Visita al mariposario</li>
                    <li>Todas las comidas incluidas</li>
                </ul>
                <p>Duración: 4 días/3noches | Fechas: Todo el año |  Precio: $ <?php echo $precio_por_personaC; ?> </p>
                <form action="formulario_reserva.php" method="post">
                <input type="hidden" name="valor" value=180>
                <input type="submit" class="btn btn-primary" name="valorC" value="Reservar Ahora"> </input>
                 
                </form>
            
            </div>
            </div>
        </div>
    </div>

</section>


    <!-- ... FOOTER... -->

    <footer class="bg-dark text-white">
        <div class="container py-4">
            <div class="row">
                <div class="col-md-6">
                    <h4>Contacto</h4>
                    <p>Dirección: [Tu dirección]</p>
                    <p>Teléfono: [Tu número de teléfono]</p>
                    <p>Correo: [Tu correo electrónico]</p>
                </div>
                <div class="col-md-6">
                    <h4>Síguenos en Redes Sociales</h4>
                    <a href="https://web.facebook.com/?_rdc=1&_rdr" class="text-white">Facebook</a>
                    <br>
                    <a href="https://twitter.com/?lang=es" class="text-white">Twitter</a>
                    <br>
                    <a href="https://www.instagram.com/" class="text-white">Instagram</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Enlace a la librería de JavaScript de Bootstrap -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
