<?php
require 'config.php';
// se o id não estiver vazio entra no if
if(isset($_GET['id']) && !empty($_GET['id'])){
    //pegou o id salva em outra variavel chamada id
    $id = addslashes($_GET['id']);
    
    $sql = "Delete FROM usuarios where id= '$id'";
    
    $pdo->query($sql);
    
    header("Location: index.php");
}  else {
   // se não volta para a pagina inicial
   header("Location: index.php");
}
?>