<?php
include_once("Header.php");
include_once('../Model/conexao.php');
include_once('../Model/bancoSerie.php');

$codigo = $_GET["codigo"];
$resul = visuCodigoSerie($conexao, $codigo);
$serie = mysqli_fetch_assoc($resul);
?>

<div class="container">
    <form action="../Controller/alteraSerie.php" method="post" class="row g-3">

        <div class="col-md-1">
            <label for="inputCodigo" class="form-label">Código</label>
            <input type="text" readonly value="<?= $serie['codserie'] ?>" name="codserie" class="form-control" id="inputCodigo">
        </div>

        <div class="col-md-8">
            <label for="inputSerie" class="form-label">Série</label>
            <input type="text" value="<?= $serie['nomeserie'] ?>" name="serie" class="form-control" id="inputSerie">
        </div>

        <div class="col-3">
            <label for="inputGenero" class="form-label">Gênero</label>
            <input type="text" value="<?= $serie['generoserie'] ?>" name="genero" class="form-control" id="inputGenero">
        </div>

        <div class="col-md-2">
            <label for="inputTemporada" class="form-label">Temporada</label>
            <input type="text" value="<?= $serie['temporadaserie'] ?>" name="temporada" class="form-control" id="inputTemporada">
        </div>

        <div class="col-md-2">
            <label for="inputEpisodio" class="form-label">Episódio</label>
            <input type="text" value="<?= $serie['episodioserie'] ?>" name="episodio" class="form-control" id="inputEpisodio">
        </div>

        <div class="col-md-8">
            <label for="inputCapa" class="form-label">Capa</label>
            <input type="text" value="<?= $serie['capaserie'] ?>" name="capa" class="form-control" id="inputCapa">
        </div>

        <div class="col-md-12">
            <label for="inputURL" class="form-label">URL</label>
            <input type="text" value="<?= $serie['urlserie'] ?>" name="url" class="form-control" id="inputURL">
        </div>
    </form>

    <div class="btn-group mt-4" role="group">
        <div class="col-auto">
            <button type="submit" class="btn">Salvar</button>
        </div>

        <form method="get">
            <input type="hidden" name="codserie" value="<?= $dados["codserie"] ?>">
            <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal">Deletar</button>
        </form>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="1" aria-labelledby="exampleModalToggle22" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalToggle22">Deseja realmente excluir a série: <?= $serie['nomeserie'] ?> ?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-footer">
                    <?php
                    $r = isset($_POST["codserie"]) ? $_POST["codserie"] : "";
                    ?>
                    <form action="../Controller/deleteSerie.php" method="Post">
                        <input type="hidden" name="codserie" value="<?= $r ?>">
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