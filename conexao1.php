<?php 
   // USUARIO DO SERVIDOR
   $usuario = 'root';
   // SENHA DO SERVIDOR
   $senha = '';   
   // Try é usado para executar trexos de códigos sem condições. 
   try{
                           // HOST é o SERVIDOR de banco de dados
                                           // dbname é o nome do banco de dados criado
       $pdo = new PDO('mysql:host=localhost;dbname=projeto_pt2', $usuario, $senha);
       $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      //echo "CONECTADO";
   // Catch é usado como ELSE que informa o erro caso houver
   }catch(PDOException $e){
       echo "Erro ao Conectar ".$e;
   }
?>