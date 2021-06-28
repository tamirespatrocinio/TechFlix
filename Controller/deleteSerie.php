<?php
include_once('../Model/conexao.php');
include_once('../Model/bancoSerie.php');

extract($_REQUEST, EXTR_OVERWRITE);

if (deleteSerie($conexao, $codserie)) {
    header("location: ../View/VisualizarSerie.php");
    exit();
} else {
    echo ("<p class='alert alert-danger' role='alert'>Série não foi excluída.</p>");
}
