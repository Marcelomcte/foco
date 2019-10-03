<?php

include('createdb.php');

$uid = $_POST['id'];
$unome = $_POST['nome'];
$ucpf = $_POST['cpf'];
$utel = $_POST['tel'];
$uemail = $_POST['email'];
$ucep = $_POST['cep'];
$uuf = $_POST['uf'];
$ucity = $_POST['city'];
$ubairro = $_POST['bairro'];
$uplace = $_POST['place'];

$query = "UPDATE users SET Nome='$unome', Cpf='$ucpf', Telefone='$utel' , Email='$uemail' , Cep='$ucep' , UF='$uuf' , Cidade='$ucity' , Bairro='$ubairro' , Lougadouro='$uplace' WHERE id='$uid'";

if($db->exec($query)){
  echo "<script>alert('Atualizado com sucesso!');</script>";
  header('location: listagem.php');
}else{
  echo "<script>alert('Não foi possível atualizar!');</script>";
  header('location: index.php');
}

?>