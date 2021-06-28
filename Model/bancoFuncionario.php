  
<?php

function insereFuncionario($conexao, $codusuFK, $nomefun, $fonefun, $funcaofun)
{
    $query = "insert into tbfuncionario(codusuFK,nomefun,fonefun,funcaofun) values ('{$codusuFK}', '{$nomefun}', '{$fonefun}', '{$funcaofun}')";
    $resultado = mysqli_query($conexao, $query);

    return $resultado;
};

function visuNomeFuncionario($conexao, $funcionario)
{

    $query = "Select * from tbfuncionario where nomefun like '%{$funcionario}%'";
    $resultado = mysqli_query($conexao, $query);

    return $resultado;
}

function visuCodigoFuncionario($conexao, $codigo)
{
    $query = "Select * from tbfuncionario where codfun={$codigo}";
    $resultado = mysqli_query($conexao, $query);
    return $resultado;
}

function deleteFuncionario($conexao, $codfun)
{

    $query = "delete from tbfuncionario where codfun='{$codfun}'";
    $resultado = mysqli_query($conexao, $query);
    return $resultado;
}

function limpaCadastroFuncionario()
{
    session_destroy();
}
