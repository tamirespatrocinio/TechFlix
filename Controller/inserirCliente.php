<?php
session_start();
require_once("../Model/bancoCliente.php");
require_once("../Model/conexao.php");

extract($_REQUEST, EXTR_OVERWRITE);

if (insereCliente($conexao, $codcli, $nomecli, $cpfcli, $emailcli, $fonecli)) {
    session_destroy();
    header("Location: ../View/AreaCliente.php");
} else {
    header("Location: ../View/AreaCliente.php");
}
