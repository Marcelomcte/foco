<?php

$dbname = "users.db";

$db = new SQLite3($dbname);

if(!$db){
  die("Ocorrreu um ERROR ao criar a database, por favor verifique se o SQLite3 está ativado para continuar...");
}

$query = " CREATE TABLE IF NOT EXISTS users(id INTEGER PRIMARY KEY,
                                            Nome TEXT,
                                            Cpf CHAR (11),
                                            Telefone CHAR (11),
                                            Email VARCHAR (120),
                                            Cep CHAR (8),
                                            UF VARCHAR (2),
                                            Cidade VARCHAR (30),
                                            Bairro TEXT,
                                            Lougadouro TEXT)";

$db->exec($query);

?>