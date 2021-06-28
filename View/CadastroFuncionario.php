<?php
include_once("../Model/bancoUsuario.php");
liberaAcesso();
include("header.php");


$email = isset($_SESSION["emailusubusca"]) ? $_SESSION["emailusubusca"] : "";
$codusu = isset($_SESSION["codusubusca"]) ? $_SESSION["codusubusca"] : "";

if ($email) {
    $aparenciaForm2 = "visible";
    $aparenciaForm1 = "invisible";
} else {
    $aparenciaForm2 = "invisible";
    $aparenciaForm1 = "visible";
}

?>
<div class="container">
    <form action="../Controller/buscaEmailUsuario.php" method="post" class="row g-3 <?= $aparenciaForm1 ?>">

        <div class="col-12">
            <label class="form-label"> Digite um e-mail de usuário válido </label>
            <input type="e-mail" class="form-control" name="email">
        </div>

        <div class="col-12">
            <button type="submit" class="btn"> Localizar </button>
        </div>
    </form>

    <form action="../Controller/inserirFuncionario.php" method="post" class="row g-3 <?= $aparenciaForm2 ?>">

        <input type="hidden" name="codusuFK" value="<?= $codusu ?>">

        <div class="col-12">
            <label class="form-label"> E-mail de usuário validado </label>
            <input type="e-mail" disabled value="<?= $email ?>" class="form-control" name="email">
        </div>

        <div class="col-12">
            <label for="inputNome" class="form-label">Nome</label>
            <input type="text" name="nomefun" class="form-control" id="inputNome">
        </div>

        <div class="col-md-4">
            <label for="inputFone" class="form-label">Fone</label>
            <input type="text" name="fonefun" class="form-control" id="inputFone">
        </div>

        <div class="col-md-8">
            <label for="inputFun" class="form-label">Função</label>
            <select required name="funcaofun" class="form-select form-select" aria-label=".form-select-lg example">
                <option value="" selected>Escolha a função</option>
                <option value="Gerente">Gerente</option>
                <option value="Operador">Operador</option>
            </select>
        </div>

        <div class="col-12">
            <a href="#"><button type="submit" class="btn">Salvar</button></a>
        </div>
    </form>
</div>
<?php
include("Footer.php");
?>