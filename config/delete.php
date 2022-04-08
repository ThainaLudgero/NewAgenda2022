<?php

include_once('config/conexao.php');
if(isset($_GET['idDel'])){
    $ide = $_GET['idDel'];
    //echo $id;
    $deletar = "DELETE FROM tb_contatos WHERE id_contato = id";
try{
    $result = $conect ->prepare($deletar); $result->bindParam( ':id',$id,PDO:: PARAM_INT);
    $result ->execute ();

$contar = $resultar->rowCount();
if($contar>0){ 
    heard("Location: relatorio.php");
}else{
    header("Location: relatorio.php");
    
}
}catch(PDOException $e){
    echo "<strong>ERRO AO DELETAR: </strong>". $e ->getMessage();
}
}