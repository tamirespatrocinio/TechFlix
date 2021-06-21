<?php

function insereSerie($conexao, $serie, $temporada, $episodio, $genero, $capa, $url)
{
    $query = "insert into tbserie(nomeserie, temporadaserie, episodioserie, generoserie, capaserie, urlserie) values('{$serie}', '{$temporada}', '{$episodio}', '{$genero}', '{$capa}','{$url}')";
    $resultado = mysqli_query($conexao, $query);
    return $resultado;
}


function visuNomeSerie($conexao, $serie)
{
    $query = "Select * from tbserie where nomeserie like '%{$serie}%'";
    $resultado = mysqli_query($conexao, $query);

    return $resultado;
}
function visuCodigoSerie($conexao, $codigo)
{
    $query = "Select * from tbserie where codserie={$codigo}";
    $resultado = mysqli_query($conexao, $query);

    return $resultado;
}

function alterarSerie($conexao, $codserie, $serie, $temporada, $episodio, $genero, $capa, $url)
{
    $query = "update tbserie set nomeserie='{$serie}', temporadaserie='{$temporada}', episodioserie ='{$episodio}', generoserie = '{$genero}', capaserie = '{$capa}', urlserie = '{$url}' where codserie='{$codserie}' ";

    $resultado = mysqli_query($conexao, $query);
    return $resultado;
}

function deleteSerie($conexao, $codserie)
{

    $query = "delete from tbserie where codserie='{$codserie}'";
    $resultado = mysqli_query($conexao, $query);
    return $resultado;
}
