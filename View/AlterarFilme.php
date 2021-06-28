<?php
include_once("header.php");
include_once('../Model/conexao.php');
include_once('../Model/bancoFilme.php');
liberaAcesso();

$codigo = $_GET["codigo"];
$resul = visuCodigoFilme($conexao, $codigo);
$filme = mysqli_fetch_assoc($resul);
?>

<div class="container">
    <form action="../Controller/alteraFilme.php" method="post" class="row g-3">

        <div class="col-md-1">
            <label for="inputCodigo" class="form-label">Código</label>
            <input type="text" readonly value="<?= $filme['codfil'] ?>" name="codfil" class="form-control" id="inputCodigo">
        </div>

        <div class="col-md-8">
            <label for="inputFilme" class="form-label">Filme</label>
            <input type="text" value="<?= $filme['nomefil'] ?>" name="filme" class="form-control" id="inputFilme">
        </div>

        <div class="col-md-3">
            <label for="inputGenero" class="form-label">Gênero</label>
            <input type="text" value="<?= $filme['generofil'] ?>" name="genero" class="form-control" id="inputGenero">
        </div>

        <div class="col-md-2">
            <label for="inputAno" class="form-label">Ano</label>
            <input type="text" value="<?= $filme['anofil'] ?>" name="ano" class="form-control" id="inputAno" placeholder="2000">
        </div>

        <div class="col-md-10">
            <label for="inputCapa" class="form-label">Capa</label>
            <input type="text" value="<?= $filme['capafil'] ?>" name="capa" class="form-control" id="inputCapa">
        </div>

        <div class="col-md-12">
            <label for="inputURL" class="form-label">URL</label>
            <input type="text" value="<?= $filme['urlfil'] ?>" name="url" class="form-control" id="inputURL">
        </div>

        <div class="form-floating">
            <textarea class="form-control" name="sinopse" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"><?= $filme['sinopsefil'] ?></textarea>
            <label for="floatingTextarea2">Sinopse</label>
        </div>
    </form>

    <div class="btn-group mt-4" role="group">
        <div class="col-auto">
            <button type="submit" class="btn">Salvar</button>
        </div>

        <form method="get">
            <input type="hidden" name="codfil" value="<?= $dados["codfil"] ?>">
            <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal">Deletar</button>
        </form>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="1" aria-labelledby="exampleModalToggle22" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalToggle22">Deseja realmente excluir o filme: <?= $filme['nomefil'] ?> ?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-footer">
                    <?php
                    $r = isset($_POST["codfil"]) ? $_POST["codfil"] : "";
                    ?>
                    <form action="../Controller/deleteFilme.php" method="Post">
                        <input type="hidden" name="codfil" value="<?= $r ?>">
                        <button type="submit" class="btn">Deletar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include("Footer.php")
?>