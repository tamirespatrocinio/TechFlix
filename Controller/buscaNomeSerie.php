<?php
include_once("../Model/bancoSerie.php");
include_once("../Model/conexao.php");

$filme = isset($_POST["serie"]) ? $_POST["serie"] : "";

if (visuNomeSerie($conexao, $serie)) {
    header("Location:../View/VisualizarSerie.php");
} else {
    echo ("Erro!");
}
