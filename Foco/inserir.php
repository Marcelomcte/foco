<?php 

include('createdb.php');

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$tel = $_POST['tel'];
$email = $_POST['email'];
$cep = $_POST['cep'];
$uf = $_POST['uf'];
$city = $_POST['city'];
$bairro = $_POST['bairro'];
$place = $_POST['place'];

$query = "INSERT INTO users(Nome, Cpf, Telefone, Email, Cep, UF, Cidade, Bairro, Lougadouro) VALUES('$nome','$cpf','$tel','$email','$cep','$uf','$city','$bairro','$place')";

if($db->exec($query)){
  echo "<script>alert('Cadastro com sucesso!');</script>";
  header("Location:listagem.php");
}else{
  echo "<script>alert('Error ao cadastrar');</script>";
}