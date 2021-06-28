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
    <title>Acesso ao Sistema de Funcionários</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="img/logo.png" alt="logo" style="max-width:120px"></a>
    </nav>

    <div class="banner">
        <img src="img/banner2.jpg" class="bg" alt="banner">
        <div class="container">
            <div class="content">
                <form action="../Controller/logarFuncionario.php" method="post" class="formUsuario g-3">
                    <div class="row mb-3">
                        <div class="col-md-6 mb-2">
                            <?php
                            session_start();
                            $msg = isset($_SESSION["msg"]) ? $_SESSION["msg"] : "";
                            echo ($msg);
                            ?>
                            <label for="inputLoginFun" class="form-label">Email:</label>
                            <input type="e-mail" class="form-control" name="email" id="inputLoginFun" />
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6 mb-2">
                            <label for="inputSenha" class="form-label">Senha:</label>
                            <input type="password" class="form-control" name="senha" id="inputSenha" />
                        </div>
                    </div>

                    <p><a href="formEsqueciSenha.php">Esqueceu a senha?</p>

                    <div class="mt-2">
                        <button type="submit" class="btn">Entrar</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
    <?php
    include_once("Footer.php")
    ?>