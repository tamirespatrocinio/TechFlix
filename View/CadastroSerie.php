<?php
include('Header.php');
?>

<div class="container">

    <form action="../Controller/inserirSerie.php" method="get" class="row g-3">

        <div class="col-md-8">
            <label for="inputSerie" class="form-label">Série</label>
            <input type="text" name="serie" class="form-control" id="inputSerie">
        </div>

        <div class="col-md-4">
            <label for="inputGenero" class="form-label">Gênero</label>
            <input type="text" name="genero" class="form-control" id="inputGenero">
        </div>

        <div class="col-md-4">
            <label for="inputAno" class="form-label">Ano</label>
            <input type="text" name="ano" class="form-control" id="inputAno">
        </div>

        <div class="col-md-4">
            <label for="inputAno" class="form-label">Temporada</label>
            <input type="text" name="ano" class="form-control" id="inputAno">
        </div>

        <div class="col-md-4">
            <label for="inputAno" class="form-label">Episódio</label>
            <input type="text" name="ano" class="form-control" id="inputAno">
        </div>

        <div class="col-12">
            <label for="inputCapa" class="form-label">Capa</label>
            <input type="text" name="capa" class="form-control" id="inputCapa">
        </div>

        <div class="col-12">
            <label for="inputURL" class="form-label">URL</label>
            <input type="text" name="url" class="form-control" id="inputURL">
        </div>

        <div class="col-md-12">
            <label for="inputSinopse" class="form-label">Sinopse</label>
            <textarea type="text" class="form-control" name="sinopse" id="inputSinopse" rows="3"></textarea>
        </div>

        <a href="#"><button class="btn">Cadastrar</button></a>


    </form>
</div>
<?php
include('Footer.php')
?>