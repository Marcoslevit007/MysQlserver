<?php

//Conectando com o banco de dados Mysql server

$conn = new PDO("sqlsrv:database=dbphp8;server=localhost ;ConnectionPooling=0", "sa","98752" );
$smt =  $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");//Executando comandos sql
$smt->execute();

$results = $smt->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($results);
//Passos para conexão de pdo na maioria dos bancos de dados mysql

//O primeiro parametro dessa conexão é declarar qual o tipo de banco que vamos trabalhar
//mysql: banco de dados declarado como mysql
//=======================================================
//Segundo parametro seria o nome do meu banco que e dbphp7
//dbname: "NOME DO MEU BANCO";
//=======================================================
//Terceiro parametro seria o local onde o meu banco esta
//host="LOCALIZAÇÃO DO MEU BANCO DE DADOS"
//=======================================================
//Terceiro e ultimo parametro são o nome do usuario e senha
