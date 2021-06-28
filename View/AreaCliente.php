<?php
include_once("../Model/bancoUsuario.php");
liberaAcesso();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="20x20" href="img/icon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style2.css">
    <title>Área Cliente</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="img/logo.png" alt="logo" style="max-width:120px"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="AreaCliente.php">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Filme
                        </a>
                        <ul class="dropdown-menu bg-dark" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item nav-link" href="../View/VisualizarClienteFilme.php">Buscar</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Série
                        </a>
                        <ul class="dropdown-menu bg-dark" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item nav-link" href="../View/VisualizarClienteSerie.php">Buscar</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown"><a class="nav-link" href="#"> Olá, <?php echo ($_SESSION["usuario"]); ?></a>
                    </li>
                    <li class="nav-item dropdown ">
                        <a class="nav-link" href="../Controller/logout.php">
                            Sair
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="banner">
        <img src="img/banner2.jpg" class="bg" alt="banner">
        <div class="content">

            <p id="welcomeFun">Seja bem-vindo(a) <?php echo ($_SESSION["usuario"]); ?>!</p>

            <?php
            include("Footer.php");
            ?>