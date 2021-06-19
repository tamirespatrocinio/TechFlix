<?php
session_start();
function insereFuncionario($conexao, $codusuFK, $nomefun, $fonefun, $funcaofun)
{
    $query = "insert into tbfuncionario(codusuFK,nomefun,fonefun,funcaofun) values ('{$codusuFK}', '{$nomefun}', '{$fonefun}', '{$funcaofun}')";
    $resultado = mysqli_query($conexao, $query);

    return $resultado;
};

function limpaCadastroFuncionario()
{
    session_destroy();
}
