<?php
//importação
require 'config.php';
// o campo nome não estiver vazio enviou o fomulario
if(isset($_POST['nome']) && !empty($_POST['nome'])){
    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $senha = addslashes($_POST['senha']);
    
    $sql = "INSERT INTO usuarios SET nome = '$nome', email = '$email', senha = '$senha'";
    $pdo->query($sql);
    
    //volta para o index
    header("Location: index.php");
}
?>

<form method="POST">
    
    Nome:<br/>
    <input type="text" name="nome"/><br/><br/>
    E-mail:<br/>
    <input type="text" name="email"/><br/><br/>
    Senha: <br/>
    <input type="password" name="senha"/><br/><br/>
    <input type="submit" value="Cadastrar"/>
</form>