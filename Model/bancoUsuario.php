<?php
session_start();

function insereUsuario($conexao, $email, $senha)
{

    $option = ['cost' => 8]; //confirmar se é cost ou const

    $senhacryp = password_hash($senha, PASSWORD_BCRYPT, $option);

    $query = "insert into tbusuario(loginusu,senhausu)values('{$email}','{$senhacryp}')";
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
