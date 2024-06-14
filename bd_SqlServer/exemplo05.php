<?php
//ATUALIZANDO DADOS NO BANCO DE ADOS
$conn = new PDO("mysql:host=localhost;dbname=curso_php", "root", "");

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE ID = :ID");


$id = 3;

$stmt->bindParam(":ID", $id);
//BINDPARAM SERVE PARA LIGAR UM PARAMETRO A UM VALOR
//LIGUE MEU PARAMETRO AO VALOR QUE ESTA ARMAZENADO DENTRO DA MINHA VARIAVEL


$stmt->execute(); //EXECUTO MEU BLOCO DE CODIGOS A CIMA

echo "Deletado: OK!";

