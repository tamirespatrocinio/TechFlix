<?php
include_once("../Model/bancoUsuario.php");
liberaAcesso();
include('Header.php');
?>

<div class="container">
    <form action="../Controller/inserirUsuario.php" method="post" class="formUsuario g-3">

        <div class="row mb-3">
            <div class="col-md-6 mb-2">
                <label for="inputLogin" class="form-label">Email:</label>
                <input type="e-mail" class="form-control" name="login" id="inputLogin" />
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6 mb-2">
                <label for="inputSenha" class="form-label">Senha:</label>
                <input type="password" class="form-control" name="senha" id="inputSenha" />

            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6 mb-2">
                <label for="inputPin" class="form-label">PIN:</label>
                <input type="number" min="00001" max="99999" class="form-control" name="pin" id="inputPin" placeholder="Número com 5 dígitos" />

            </div>

            <div class="mt-2">
                <button type="submit" class="btn">Salvar</button>
            </div>

        </div>
    </form>
</div>

<?php
include('Footer.php');
?>