<?php
include_once("../Model/bancoUsuario.php");
liberaAcesso();
include_once("header.php");
include_once("../Model/bancoFilme.php");
include_once("../Model/conexao.php");
?>

<div class="container">
    <form action="" method="post" class="row g-3">

        <div class="col-12">
            <label class="form-label">Digite o nome do filme:</label>
            <input type="text" required class="form-control" name="filme">
            </br>
            <div class="col-12">
                <button type="submit" class="btn">Localizar</button>
            </div>
        </div>
    </form>

    <table class="table table-striped">
        <thead class="tableColor">
            <tr>
                <th scope="col">Código</th>
                <th scope="col">Filme</th>
                <th scope="col">Gênero</th>
                <th scope="col">Ano</th>
                <th scope="col">Capa</th>
                <th scope="col">Alterar</th>
            </tr>
        </thead>

        <tbody>
            <?php
            $filme = isset($_POST["filme"]) ? $_POST["filme"] : "";
            $dado = visuNomeFilme($conexao, $filme);
            foreach ($dado as $dados) :
            ?>
                <tr>
                    <th scope="row"><?= $dados["codfil"] ?></th>
                    <td><?= $dados["nomefil"] ?></td>
                    <td><?= $dados["generofil"] ?></td>
                    <td><?= $dados["anofil"] ?></td>
                    <td><img src="<?= $dados["capafil"] ?>" width="50"> </td>
                    <td>
                        <a class="btn" href="AlterarFilme.php?codigo=<?= $dados["codfil"] ?>">Alterar</a>
                    </td>
                </tr>
            <?php
            endforeach
            ?>
        </tbody>
    </table>

    <?php
    include_once("Footer.php");
    ?>