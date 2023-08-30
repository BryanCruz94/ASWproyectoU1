<body>


    <header class="row justify-content-center align-items-center" id="encabezado">
        <div class="col-1  ">
            <div class="row justify-content-end mt-1 ml-1">
                <div class="col align-self-end">
                    <a href="#"> <img class="logo" src="assets/imgIndex/logotipo-de-instagram.png" width="20px" alt=""></a>
                </div>
            </div>
            <div class="row justify-content-end mt-1 ml-1">
                <div class="col align-self-end">
                    <a href="#"> <img class="logo" src="assets/imgIndex/facebook.png" width="20px" alt=""></a>
                </div>
            </div>
            <div class="row justify-content-end mt-1 ml-1">
                <div class="col align-self-end">
                    <a href="#"> <img class="logo" src="assets/imgIndex/correo-electronico-vacio.png" width="25px" alt=""></a>
                </div>
            </div>


        </div>

        <div class="col-10">
            <H1 class="text-center ">ECUA-TRAVELS</H1>
            <div class="text-center  h5">Al menos una vez en la vida debes visitar Ecuador, y vivir la
                aventura
                de conocer un país de paisajes tan variados y entretenimiento por montón</div>

        </div>


    </header>

    <nav class=" navbar-expand-lg navbar-light bg-light">


        <ul class="nav navbar-nav  justify-content-center text-center">
            <div class="col">
                <li class="nav-item">
                    <?php
                    if ($nombreArchivo == 'index.php') {
                        echo '<a class="nav-link text-light bg-dark  fw-bold" href="index.php">INICIO</a>';
                    } else {
                        echo '<a class="nav-link " href="index.php">INICIO</a>';
                    }
                    ?>

                </li>
            </div>
            <div class="col">
                <li class="nav-item">
                    <?php
                    if ($nombreArchivo == 'costa.php') {
                        echo '<a class="nav-link text-light bg-dark  fw-bold" href="costa.php">COSTA</a>';
                    } else {
                        echo '<a class="nav-link " href="costa.php">COSTA</a>';
                    }
                    ?>
                </li>
            </div>
            <div class="col">
                <li class="nav-item">
                <?php
                    if ($nombreArchivo == 'sierra.php') {
                        echo '<a class="nav-link text-light bg-dark  fw-bold" href="sierra.php">SIERRA</a>';
                    } else {
                        echo '<a class="nav-link " href="sierra.php">SIERRA</a>';
                    }
                    ?>
                </li>
            </div>
            <div class="col">
                <li class="nav-item">
                    <a class="nav-link" href="amazon.html">AMAZONÍA</a>
                </li>
            </div>
            <div class="col">
                <li class="nav-item">
                <?php
                    if ($nombreArchivo == 'galapagos.php') {
                        echo '<a class="nav-link text-light bg-dark  fw-bold" href="galapagos.php">GALAPAGOS</a>';
                    } else {
                        echo '<a class="nav-link " href="galapagos.php">GALAPAGOS</a>';
                    }
                    ?>
                </li>
            </div>
        </ul>

    </nav>



</body>