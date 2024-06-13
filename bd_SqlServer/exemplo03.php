<?php

$conn = new PDO("mysql:host=localhost;dbname=curso_php", "root", "");

$smt = $conn->prepare("INSERT INTO tb_usuarios (DESLOGIN, DESSENHA) VALUES(:LOGIN, :PASSWORD)");

$login = "MARCOS LEVI SANTOS TEIXEIRA";