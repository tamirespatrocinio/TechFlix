<?php
include_once("../View/Header.php");
include_once('../Model/conexao.php');
include_once('../Model/bancoFilme.php');

extract($_REQUEST, EXTR_OVERWRITE);

if (deleteFilme($conexao, $codfil)) {
    echo ("<p class='alert alert-primary' role='alert'>O Filme foi excluído.</p>");
} else {
    echo ("<p class='alert alert-danger' role='alert'>O Filme não foi excluído.</p>");
}

include_once("../View/Footer.php");
