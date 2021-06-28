<?php
include_once("../Model/bancoFilme.php");
include_once("../Model/conexao.php");

extract($_REQUEST, EXTR_OVERWRITE);

$id = $_GET['codfil'];
deleteFilme($conexao, $codfil);
header("location: ../View/VisualizarFilme.php");
die();
