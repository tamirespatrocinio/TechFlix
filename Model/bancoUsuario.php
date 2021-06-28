<?php
session_start();

function insereUsuario($conexao, $email, $senha, $pin)
{

    $option = ['cost' => 8];

    $senhacryp = password_hash($senha, PASSWORD_BCRYPT, $option);

    $query = "insert into tbusuario(loginusu,senhausu, pinusu)values('{$email}','{$senhacryp}', '{$pin}')";
    $resul = mysqli_query($conexao, $query);

    return $resul;
}

function buscarUsuario($conexao, $email)
{
    $query  = "select * from tbusuario where loginusu= '{$email}'";

    $resul = mysqli_query($conexao, $query);

    $infoemail = mysqli_fetch_assoc($resul);

    $_SESSION["emailusubusca"] = $infoemail["loginusu"];
    $_SESSION["codusubusca"] = $infoemail["codusu"];

    return $infoemail;
}

function buscarAcesso($conexao, $email, $senha)
{

    $query  = "select * from tbusuario where loginusu= '{$email}'";

    $resul = mysqli_query($conexao, $query);

    if (mysqli_num_rows($resul) > 0) {
        $linha = mysqli_fetch_assoc($resul);
        if (password_verify($senha, $linha["senhausu"])) {
            $_SESSION["email"] = $linha["loginusu"];
            $_SESSION["codusu"] = $linha["codusu"];

            $_SESSION["funcionario"] = buscarNomeUsuario($conexao, $linha["codusu"]);

            return $linha["loginusu"];
        } else {
            return "Senha não confere";
        }
    }
    return "Email não cadastrado";
}

function trocarsenhausuario($conexao, $email, $novasenha, $pin)
{
    //verificar se o email e o pin estão corretos
    $query = "Select * from tbusuario where loginusu='{$email}' and  pinusu='{$pin}'";
    $retorno = mysqli_query($conexao, $query);

    if (mysqli_num_rows($retorno) > 0) {
        $retornoArray = mysqli_fetch_assoc($retorno);
        $codusu = $retornoArray["codusu"];

        //criptografar a senha
        $option = ['cost' => 8];
        $senha = password_hash($novasenha, PASSWORD_BCRYPT, $option);

        //Alterar a senha o banco
        $query = "update tbusuario set senhausu='{$senha}' where codusu = '{$codusu}'";
        $resultado = mysqli_query($conexao, $query);
        return $resultado;
    } else {
        $resultado = "erro";
        return $resultado;
    }
}

function logout()
{
    return session_destroy();
}

function liberaAcesso()
{

    $email = isset($_SESSION["email"]);

    if (!$email) {

        $_SESSION["msg"] = "<div class='alert alert-danger' role='alert'> Faça login para ter acesso ao sistema.</div>";
        header("Location: ../View/AcessoFuncionario.php");
        die();
    }
}

function buscarNomeUsuario($conexao, $codusu)
{

    $query = "Select * from tbfuncionario where codusuFK = '{$codusu}'";
    $resul = mysqli_query($conexao, $query);

    $resulArray = mysqli_fetch_assoc($resul);

    $nome = $resulArray["nomefun"];

    return $nome;
}
