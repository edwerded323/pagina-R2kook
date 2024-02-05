<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with FoodHut landing page.">
    <meta name="author" content="Devcrud">
    <title>R2Dcook | </title>

    <!-- font icons -->
    <link rel="stylesheet" href="vistas\assets/vendors/themify-icons/css/themify-icons.css">

    <link rel="stylesheet" href="vistas\assets/vendors/animate/animate.css">

    <!-- Bootstrap + FoodHut main styles -->
    <link rel="stylesheet" href="vistas\assets/css/foodhut.css">



</head>

<body data-spy="scroll" data-target=".navbar" data-offset="40" id="inicio">

    <!-- logo y barra -->
    <nav class="custom-navbar navbar navbar-expand-lg navbar-dark fixed-top" data-spy="affix" data-offset-top="10">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-expand-xl " href="inicio">
            <img src="vistas\assets/imgs/logo1.0.png">
            <span class="brand-txt h1 ">R2Dcook</>

        </a>


        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">

                <?php if (isset($_GET['ruta'])) : ?>

                    <?php if ($_GET['ruta'] == "inicio") : ?>

                        <li class="nav-item">
                            <a class="nav-link active " href="index.php?ruta=inicio">Principal</a>
                        </li>

                    <?php else : ?>

                        <li class="nav-item">
                            <a class="nav-link " href="index.php?ruta=inicio">Principal</a>
                        </li>

                    <?php endif ?>
                    <?php if ($_GET['ruta'] == "recetas") : ?>

                        <li class="nav-item">
                            <a class="nav-link active " href="index.php?ruta=recetas">Recetas</a>
                        </li>

                    <?php else : ?>

                        <li class="nav-item">
                            <a class="nav-link " href="index.php?ruta=recetas">Recetas</a>
                        </li>

                    <?php endif ?>

                    <?php if ($_GET['ruta'] == "niveles") : ?>

                        <li class="nav-item">
                            <a class="nav-link active " href="index.php?ruta=niveles">Niveles</a>
                        </li>

                    <?php else : ?>

                        <li class="nav-item">
                            <a class="nav-link " href="index.php?ruta=niveles">Niveles</a>
                        </li>

                    <?php endif ?>
                    <?php if ($_GET['ruta'] == "especiales") : ?>

                        <li class="nav-item">
                            <a class="nav-link active " href="index.php?ruta=especiales">Especiales</a>
                        </li>

                    <?php else : ?>

                        <li class="nav-item">
                            <a class="nav-link " href="index.php?ruta=especiales">Especiales</a>
                        </li>

                    <?php endif ?>




                <?php endif ?>








               

            <ul class="navbar-nav">


                <li class="nav-item">
                    <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#registro">Inicio de sesion</button>

                </li>
            </ul>
        </div>
    </nav>

    <?php

    include "inicio.php";
    include "registro.php";



    if (isset($_GET['ruta'])) {



        if (
            $_GET['ruta'] == "niveles" ||
            $_GET['ruta'] == "recetas" ||
            $_GET['ruta'] == "niveles" ||
            $_GET['ruta'] == "especiales"
        ) {

            include $_GET['ruta'] . ".php";
        } else {
        }
    };




    ?>










    <!-- book a table Section  -->



    <!-- inicio de sesion-->


    <!-- end of page footer -->

    <!-- core  -->
    <script src="vistas\assets/vendors/jquery/jquery-3.4.1.js"></script>
    <script src="vistas\assets/vendors/bootstrap/bootstrap.bundle.js"></script>

    <!-- bootstrap affix -->
    <script src="vistas\assets/vendors/bootstrap/bootstrap.affix.js"></script>

    <!-- wow.js -->
    <script src="vistas\assets/vendors/wow/wow.js"></script>


    <script src="vistas\assets/js/foodhut.js"></script>

</body>

</html>