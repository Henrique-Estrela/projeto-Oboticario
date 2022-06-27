<?php 
$id=$_POST['id'];
echo $id;

            require 'config.php';
            $id = $_POST['id'];
             $sql = "DELETE FROM cad_Produto WHERE id = $id";
            mysqli_query($mysqli,$sql);
         $sucess = "deu certo";
         ?>
          
    