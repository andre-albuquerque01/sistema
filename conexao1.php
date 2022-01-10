<?php 
   // USUARIO DO SERVIDOR
   $usuario = 'root';
   // SENHA DO SERVIDOR
   $senha = '';   
      try{
       $pdo = new PDO('mysql:host=localhost;dbname=projeto_pt2', $usuario, $senha);
       $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      
   }catch(PDOException $e){
       echo "Erro ao Conectar ";
   }