<?php
include_once("../View/Header.php");
include_once('../Model/conexao.php');
include_once('../Model/bancoSerie.php');

extract($_REQUEST, EXTR_OVERWRITE);

if (deleteSerie($conexao, $codserie)) {
    echo ("<p class='alert alert-primary pt-10' role='alert'>Série excluída.</p>");
} else {
    echo ("<p class='alert alert-danger' role='alert'>Série não foi excluída.</p>");
}

include_once("../View/Footer.php");
