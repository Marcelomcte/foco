<?php

$id = $_GET['u_id'];

include('createdb.php');

$query = "DELETE FROM users WHERE id='$id'";

if($db->exec($query)){
  echo "<script>alert('Deletado com sucesso');</script>";
  header('location: listagem.php');
}else{
  echo  "<script>alert('Não foi possível Deletar');</script>";
  header('location: index.php');
}


