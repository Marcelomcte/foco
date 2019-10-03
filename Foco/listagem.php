<html lang="pt-BR">

<head>
  <meta charset="UTF-8">

  <title>Foco</title>
  <meta name="author" content="Marcelo Carvalho">
  	<!-- Favicon -->
	<link rel="shortcut icon" href="./assets/img/favicon.ico" type="image/x-icon">
	<!-- Bootstrap -->
	<link rel="stylesheet" href="./assets/css//bootstrap.min.css">
	<!-- CSS -->
	<link rel="stylesheet" href="./assets/css/style.css">
	<!-- Script -->
	<script type="text/javascript" src="./assets/js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="./assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="./assets/js/jquery.mask.min.js"></script>	
</head>

<!-- Incluindo a tabela -->
<?php
  include('createdb.php');
  
  $query = "SELECT * FROM users";
  $result = $db->query($query);

	?>

<body>
  <!-- Navbar -->
  <nav>
    <ul class="nav nav-tabs">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Formulário</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="listagem.php">Lista</a>
      </li>
    </ul>
  </nav>

  <br><h1 class="text-center">Lista de cadastro</h1><br>

  <div class="row">
    <?php
      while($row = $result->fetchArray()){
    ?>
    <div class="col-12 col-md-4 col-sm-6 mb-5">
      <table class="table">
        <tbody>
          <tr>
            <th scope="row">
            <a href="update.php?u_id=<?php echo $row['id']; ?>" class="btn btn-outline-info"><img src="./assets/img/file.png" alt="/"></a>
            <a href="delete.php?u_id=<?php echo $row['id']; ?>" class="btn btn-outline-danger"><img src="./assets/img/delete.png" alt="X"></a></th>
            <td scope="col"><h5><?php echo $row['id']."º CADASTRO"; ?></h5></td>
          </tr>
          <tr>
            <th scope="row">Nome completo</th>
            <td scope="col"><?php echo $row['Nome']; ?></td>
          </tr>
          <tr>
            <th scope="row">Cpf</th>
            <td scope="col"><?php echo $row['Cpf']; ?></td>
          </tr>
          <tr>
            <th scope="row">Telefone</th>
            <td scope="col"><?php echo $row['Telefone']; ?></td>
          </tr>
          <tr>
            <th scope="row">Email</th>
            <td scope="col"><?php echo $row['Email']; ?></td>
          </tr>
          <tr>
            <th scope="row">Cep</th>
            <td scope="col"><?php echo $row['Cep']; ?></td>
          </tr>
          <tr>
            <th scope="row">Logradouro</th>
            <td scope="col"><?php echo $row['Lougadouro']; ?></td>
          </tr>
          <tr>
            <th scope="row">Bairro</th>
            <td scope="col"><?php echo $row['Bairro']; ?></td>
          </tr>
          <tr>
            <th scope="row">Cidade</th>
            <td scope="col"><?php echo $row['Cidade']; ?></td>
          </tr>
          <tr>
            <th scope="row">Estado</th>
            <td scope="col"><?php echo $row['UF']; ?></td>
          </tr>
        </tbody>
      </table>
    </div>
    <?php
      }
    ?>
  </div>

  <!--  Script Bootstrap -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
</body>

</html>