<?php
include_once("../Model/bancoUsuario.php");
liberaAcesso();
include_once("../Model/bancoSerie.php");
include_once("../Model/conexao.php");
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

        <div class="container">
            <form id="formCliente" action="" method="post" class="row g-3">

                <div class="col-12">
                    <label class="form-label">Digite o nome da série:</label>
                    <input type="text" required class="form-control" name="serie">
                    </br>
                    <div class="col-12">
                        <button type="submit" class="btn">Localizar</button>
                    </div>
                </div>
            </form>

            <table class="table table-striped">
                <thead class="tableColor">
                    <tr>
                        <th scope="col">Serie</th>
                        <th scope="col">Capa</th>
                        <th scope="col">Temporada</th>
                        <th scope="col">Trailer</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    $serie = isset($_POST["serie"]) ? $_POST["serie"] : "";
                    $dado = visuNomeSerie($conexao, $serie);
                    foreach ($dado as $dados) :
                    ?>
                        <tr>
                            <th scope="row"><?= $dados["nomeserie"] ?></th>
                            <td><img src="<?= $dados["capaserie"] ?>" width="100"> </td>
                            <td><?= $dados["temporadaserie"] ?></td>
                            <td><iframe src="<?= $dados["urlserie"] ?>" width="200px" frameborder="0"></iframe></td>
                        </tr>
                    <?php
                    endforeach
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <?php
    include_once("Footer.php");
    ?>