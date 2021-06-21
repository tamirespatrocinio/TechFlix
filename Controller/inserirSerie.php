<?php
require_once("../Model/bancoSerie.php");
require_once("../Model/conexao.php");

extract($_REQUEST, EXTR_OVERWRITE);

if (insereSerie($conexao, $serie, $temporada, $episodio, $genero, $capa, $url)) {
    echo ("Série cadastrada com sucesso");
} else {
    echo ("Série não foi para o banco de dados");
}
