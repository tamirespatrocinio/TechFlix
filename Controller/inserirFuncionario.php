<?php
session_start();
require_once("../Model/bancoFuncionario.php");
require_once("../Model/conexao.php");

extract($_REQUEST, EXTR_OVERWRITE);

if (insereFuncionario($conexao, $codusuFK, $nomefun, $fonefun, $funcaofun)) {
    session_destroy();
    echo ("Funcionário cadastrado com sucesso");
} else {
    echo ("O Funcionário não foi para o banco de dados");
}
