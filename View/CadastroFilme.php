<?php
include('Header.php');
?>


<div class="container">

    <form action="../Controller/inserirFilme.php" method="get" class="row g-3">

        <div class="col-md-8">
            <label for="inputFilme" class="form-label">Filme</label>
            <input type="text" class="form-control" name="filme" id="inputFilme" />
        </div>

        <div class="col-md-4">
            <label for="inputGenero" class="form-label">Gênero</label>
            <input type="text" class="form-control" name="genero" id="inputGenero" />
        </div>

        <div class="col-md-2">
            <label for="inputAno" class="form-label">Ano</label>
            <input type="text" class="form-control" name="ano" id="inputAno" />
        </div>

        <div class="col-md-10">
            <label for="inputCapa" class="form-label">Capa</label>
            <input type="text" class="form-control" name="capa" id="inputCapa" />
        </div>

        <div class="col-md-12">
            <label for="inputUrl" class="form-label">URL</label>
            <input type="text" class="form-control" name="capa" id="inputUrl" />
        </div>

        <div class="col-md-12">
            <label for="inputSinopse" class="form-label">Sinopse</label>
            <textarea type="text" class="form-control" name="sinopse" id="inputSinopse" rows="3"></textarea>
        </div>


        <a href="#"><button class="btn">Cadastrar</button></a>
    </form>


</div>

<?php
include('Footer.php');
?>