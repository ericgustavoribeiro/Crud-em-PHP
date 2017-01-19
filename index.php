  <?php
    require 'config.php';
   ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <a href="cadastrar.php">Adicionar usuário</a>
        <table border="0" width="100%">
            <tr>
                <th> Nome</th>
                <th> E-mail</th>
                <th>Ações </th>   
            </tr>   
            
            <?php
            
           
                 $sql = "SELECT * FROM usuarios";
                $sql = $pdo-> query($sql);
            
            if($sql->rowCount() > 0){
               
                foreach ($sql->fetchAll() as $usuario){
                   echo '<tr>'; 
                   echo '<td>'.$usuario['nome'].'</td>';
                   echo '<td>'.$usuario['email'].'</td>';
                   echo '<td><a href="update.php?id='.$usuario['id'].'">Editar</a> - <a href="delet.php?id='.$usuario['id'].'">Excluir</a></td>';
                   echo '</tr>';
                }
            }
           
           
            ?>
            
        </table>
        
     
    </body>
</html>