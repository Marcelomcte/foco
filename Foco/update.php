<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<title>Update</title>
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
	<script type="text/javascript">
		$(document).ready(function () {
			$("#cpf").mask("000.000.000-00")
			$("#cep").mask("00.000-000")
			$("#tel").mask("(00) 0000-00009")

			$("#tel").blur(function (event) {
				if ($(this).val().length == 15) {
					$("#tel").mask("(00) 00000-0009")
				} else {
					$("#tel").mask("(00) 0000-00009")
				}
			})
		})		

		function Onlychars(e){
			var tecla=new Number();
			if(window.event) {
				tecla = e.keyCode;
			}
			else if(e.which) {
				tecla = e.which;
			}
			else {
				return true;
			}
			if((tecla >= "48") && (tecla <= "57")){
				return false;
			}
		}
	</script>
</head>

<body>
<!-- create database -->
	<?php
  include('createdb.php');
  
  $u_id = $_GET['u_id'];

  $query = "SELECT * FROM users WHERE id='$u_id'";

  $res = $db->query($query);
	?>

	<!-- Fómulário de Update -->
	<h1>Atulizar cadastro</h1>
	<div class="quadro">
		<form action="editar.php" method="post">
    <?php
    	while($row = $res->fetchArray()){
    ?>
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
			<div class="row">
				<div class="form-group col-12">
					<label>Nome:</label>
					<input type="text" class="form-control" onkeypress="return Onlychars(event)" patern="[a-z\s]+$" required value="<?php echo $row['Nome']; ?>" name="nome" >
				</div>
				<div class="form-group col-12 col-md-6 col-sm-6">
					<label>Cpf:</label>
					<input type="text" class="form-control" patern="^(([0-9]{3}.[0-9]{3}.[0-9]{3}-[0-9]{2})|([0-9]{11}))$" id="cpf" value="<?php echo $row['Cpf']; ?>" name="cpf" >
				</div>
				<div class="form-group col-12 col-md-6 col-sm-6">
					<label>Telefone:</label>
					<input type="tel" class="form-control" patern="\([0-9]{2}\) [0-9]{4,6}-[0-9]{3,4}$" id="tel" value="<?php echo $row['Telefone']; ?>" name="tel" >
				</div>
				<div class="form-group col-12 col-md-6 col-sm-6">
					<label>Email:</label>
					<input type="email" class="form-control" patern="^(([0-9]{3}.[0-9]{3}.[0-9]{3}-[0-9]{2})|([0-9]{11}))$" required value="<?php echo $row['Email']; ?>" name="email" >
				</div>
				<div class="form-group col-6 col-md-3 col-sm-6">
					<label>Cep:</label>
					<input type="text" class="form-control" patern="\d{5}-?\d{3}" id="cep" value="<?php echo $row['Cep']; ?>" name="cep" >
				</div>
				<div class="form-group col-6 col-md-3 col-sm-6">
					<label>UF:</label>
					<select type="text" class="form-control" value="<?php echo $row['UF']; ?>" name="uf">
						<option value="AC">Acre</option>
						<option value="AL">Alagoas</option>
						<option value="AP">Amapá</option>
						<option value="AM">Amazonas</option>
						<option value="BA">Bahia</option>
						<option value="CE">Ceará</option>
						<option value="DF">Distrito Federal</option>
						<option value="ES">Espírito Santo</option>
						<option value="GO">Goiás</option>
						<option value="MA">Maranhão</option>
						<option value="MT">Mato Grosso</option>
						<option value="MS">Mato Grosso do Sul</option>
						<option value="MG">Minas Gerais</option>
						<option value="PA">Pará</option>
						<option value="PB">Paraíba</option>
						<option value="PR">Paraná</option>
						<option value="PE">Pernambuco</option>
						<option value="PI">Piauí</option>
						<option value="RJ">Rio de Janeiro</option>
						<option value="RN">Rio Grande do Norte</option>
						<option value="RS">Rio Grande do Sul</option>
						<option value="RO">Rondônia</option>
						<option value="RR">Roraima</option>
						<option value="SC">Santa Catarina</option>
						<option value="SP">São Paulo</option>
						<option value="SE">Sergipe</option>
						<option value="TO">Tocantins</option>
						<option value="EX">Estrangeiro</option>
					</select>
				</div>
				<div class="form-group col-12 col-md-4 col-sm-6">
					<label>Cidade:</label>
					<input type="text" class="form-control" onkeypress="return Onlychars(event)" patern="[a-z\s]+$" required value="<?php echo $row['Cidade']; ?>" name="city" >
				</div>
				<div class="form-group col-12 col-md-4 col-sm-6">
					<label>Bairro:</label>
					<input type="text" class="form-control" onkeypress="return Onlychars(event)" patern="[a-z\s]+$" required value="<?php echo $row['Bairro']; ?>" name="bairro" >
				</div>
				<div class="form-group col-12 col-md-4 col-sm-6">
					<label>Lougadouro:</label>
					<input type="text" class="form-control" onkeypress="return Onlychars(event)" patern="[a-z\s]+$" required value="<?php echo $row['Lougadouro']; ?>" name="place" >
				</div>
				<?php
        	}
      	?>
				<div class="col-3">
					<input type="submit" class="btn btn-lg btn-primary"  value="Atualizar" data-toggle="tooltip"
					data-placement="right" title="Confira os dados antes de atualizar">
				</div>
			</div>
		</form>
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