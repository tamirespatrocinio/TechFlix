<?php
session_start();
include_once("../Model/conexao.php");
include_once("../Model/bancoUsuario.php");

$email = $_POST["email"];
$pin = $_POST["pin"];
$novasenha = $_POST["novasenha"];
$info = trocarsenhausuario($conexao, $email, $novasenha, $pin);

if ($info === "erro") {
  $_SESSION["msg"] = "<div class='alert alert-danger' role='alert'> Os dados não conferem... tente novamente.</div>";
  header("Location: ../View/formEsqueciSenha.php");
} else {
  $_SESSION["msg"] = "<div class='alert alert-danger' role='alert'> Sua senha foi alterada com sucesso.</div>";
  header("Location: ../View/AcessoFuncionario.php");
}
