<?php

$conn = new PDO("mysql:host=localhost;dbname=curso_php", "root", "");

$stmt = $conn->prepare("INSERT INTO tb_usuarios (DESLOGIN, DESSENHA) VALUES(:LOGIN, :PASSWORD)");

$login = "DANIELE SANTOS TEIXEIRA";
$password = "201909";

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam("PASSWORD", $password);
//BINDPARAM SERVE PARA LIGAR UM PARAMETRO A UM VALOR
//LIGUE MEU PARAMETRO AO VALOR QUE ESTA ARMAZENADO DENTRO DA MINHA VARIAVEL


$stmt->execute(); //EXECUTO MEU BLOCO DE CODIGOS A CIMA

echo "Inserido OK";