<?php
 session_start();

 $ediarResgistro = ControladorFormularios::ctrMostrarRegis();
?>



<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with FoodHut landing page.">
    <meta name="author" content="r2d">
    <title>R2Dcook | </title>

    <!-- font icons -->
   

    <link rel="stylesheet" href="vistas/assets/vendors/animate/animate.css">

    <!-- Bootstrap + FoodHut main styles -->
    <link rel="stylesheet" href="vistas/assets/css/estilos.css">

    <!-- sweetalert2-->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">



</head>

<body data-spy="scroll" data-target=".navbar" data-offset="40" id="inicio">

    <!-- logo y barra -->
    <nav class="custom-navbar navbar navbar-expand-lg navbar-dark fixed-top" data-spy="affix" data-offset-top="10">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-expand-xl " href="index.php?ruta=inicio">
            <img src="vistas\assets/imgs/logo1.0.png">
            <span class="brand-txt h1 ">R2Dcook</>
        </a>

        <!-- Barra de navegacion-->
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
                    <?php
                            if (isset($_SESSION["rol"])):?>
                            <?php if ($_SESSION["rol"] == 1) : ?>
                    <?php if ($_GET['ruta'] == "ingresorecetas") : ?>
                        <li class="nav-item">
                            <a class="nav-link active " href="index.php?ruta=ingresorecetas">Ingresos Recetas</a>
                        </li>
                    <?php else : ?>
                        <li class="nav-item">
                            <a class="nav-link " href="index.php?ruta=ingresorecetas">Ingresos Recetas</a>
                        </li>
                    <?php endif ?>
                    <?php endif ?>
                    <?php endif ?>

                    <!-- Barra superiro inicial-->
                <?php else : ?>
                    <li class="nav-item">
                        <a class="nav-link active " href="index.php?ruta=inicio">Principal</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="index.php?ruta=recetas">Recetas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  " href="index.php?ruta=niveles">Niveles</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  " href="index.php?ruta=especiales">Especiales</a>
                    </li>
                   
                <?php endif ?>
                        <?php
                            if (isset($_SESSION["rol"])):?>
                  <ul class="navbar-nav">
                    <li class="nav-item">
                    
                    <a href=" " class="btn btn-warning" data-toggle="modal" data-target="#editar">Actualizar Datos</button>
                    <a href="index.php?ruta=cerrarSesion" class="btn btn-outline-warning">Cerrar Sesion</a>
                    </li>
                    


                </ul>
                

                <?php else : ?>
                        
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#registro">Inicio de sesion</button>
                    </li>
                </ul>
                <?php endif ?>
        </div>
    </nav>
    <!-- NOMBRE E IMAGEN DE BIENVENIDA  -->
    <header id="inicio" class="header">
        <div class="overlay text-white text-center">
            <h1 class="display-2 font-weight-bold my-3">R2Dcook</h1>
            <h2 class="display-4 mb-5">Tu asistente en la cocina</h2>


        </div>

    


    



    <?php

    include "registro.php";
     include "editar.php"; 

    if (isset($_GET['ruta'])) {

        if (
            $_GET['ruta'] == "inicio" ||
            $_GET['ruta'] == "recetas" ||
            $_GET['ruta'] == "niveles" ||
            $_GET['ruta'] == "ingresorecetas" ||
            $_GET['ruta'] == "cerrarSesion" ||
            $_GET['ruta'] == "especiales"
        ) {
            include $_GET['ruta'] . ".php";
        } else {
            include "404.php";
        }
    };

    ?>
    <!-- enlase js -->
    <script src="vistas/assets/vendors/jquery/jquery-3.4.1.js"></script>
    <script src="vistas/assets/vendors/bootstrap/bootstrap.bundle.js"></script>
       <script src="vistas/assets/vendors/bootstrap/bootstrap.affix.js"></script>
    <!-- wow.js -->
   

</body>
  


</html>