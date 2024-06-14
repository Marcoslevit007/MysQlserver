<?php
//ATUALIZANDO DADOS NO BANCO DE ADOS
$conn = new PDO("mysql:host=localhost;dbname=curso_php", "root", "");

$stmt = $conn->prepare("UPDATE tb_usuarios SET DESLOGIN = :LOGIN, DESSENHA = :PASSWORD WHERE ID = :ID");

$login = "RAFAEL VALE";
$password = "18256";
$id = 1;
$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);
$stmt->bindParam(":ID", $id);
//BINDPARAM SERVE PARA LIGAR UM PARAMETRO A UM VALOR
//LIGUE MEU PARAMETRO AO VALOR QUE ESTA ARMAZENADO DENTRO DA MINHA VARIAVEL


$stmt->execute(); //EXECUTO MEU BLOCO DE CODIGOS A CIMA

echo "Alterado: OK!";
