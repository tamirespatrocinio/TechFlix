<?php
include_once("../Model/bancoUsuario.php");
liberaAcesso();
include_once("header.php");
include_once("../Model/bancoFuncionario.php");
include_once("../Model/conexao.php");

?>

<div class="container">
    <form action="" method="post" class="row g-3">

        <div class="col-12">
            <label class="form-label">Digite o nome do funcionário:</label>
            <input type="text" required class="form-control" name="nomefun">
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
                <th scope="col">Funcionário</th>
                <th scope="col">Contato</th>
                <th scope="col">Função</th>
                <th scope="col">Deletar</th>
            </tr>
        </thead>

        <tbody>
            <?php
            $funcionario = isset($_POST["nomefun"]) ? $_POST["nomefun"] : "";
            $dado = visuNomeFuncionario($conexao, $funcionario);
            foreach ($dado as $dados) :
            ?>
                <tr>
                    <th scope="row"><?= $dados["codusuFK"] ?></th>
                    <td><?= $dados["nomefun"] ?></td>
                    <td><?= $dados["fonefun"] ?></td>
                    <td><?= $dados["funcaofun"] ?></td>
                    <td>
                        <form action="../Controller/deleteFuncionario.php" method="POST">
                            <input type="hidden" name="codusuFK" value="<?= $dados["codusuFK"] ?>">
                            <button class="btn" type="submit">Deletar</button>
                        </form>
                    </td>
                </tr>
            <?php
            endforeach
            ?>

        </tbody>
    </table>
</div>

<?php
include_once("Footer.php");
?>