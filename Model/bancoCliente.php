<?php
session_start();
function insereCliente($conexao, $codusuFK, $nomecli, $cpfcli, $emailcli, $fonecli)
{
    $query = "insert into tbcliente(codusuFK, nomecli, cpfcli, emailcli, fonecli) values ('{$codusuFK}', '{$nomecli}', '{$cpfcli}', '{$emailcli}', '{$fonecli}')";
    $resultado = mysqli_query($conexao, $query);

    return $resultado;
};


function visuNomeCliente($conexao, $cliente)
{

    $query = "Select * from tbcliente where nomecli like '%{$cliente}%'";
    $resultado = mysqli_query($conexao, $query);

    return $resultado;
}

function visuCodigoFuncionario($conexao, $codigo)
{
    $query = "Select * from tbcliente where codcli={$codigo}";
    $resultado = mysqli_query($conexao, $query);
    return $resultado;
}

function deleteFuncionario($conexao, $codcli)
{

    $query = "delete from tbcliente where codcli='{$codcli}'";
    $resultado = mysqli_query($conexao, $query);
    return $resultado;
}

function limpaCadastroFuncionario()
{
    session_destroy();
}
