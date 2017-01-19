<?php
$dsn = "mysql:dbname=blog;host=localhost";
$dbuser = "root";
$dbpass = "root";
try{
    $pdo = new PDO($dsn, $dbuser, $dbpass);
} catch (PDOException $ex) {
echo "Falhou  a conexão: ".$e->getMessage();
}
?>