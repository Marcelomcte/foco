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
	?>

	<!-- Navbar -->
	<ul class="nav nav-tabs">
		<li class="nav-item">
			<a class="nav-link active" href="index.php">Formulário</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="listagem.php"">Lista</a>
		</li>
	</ul>

	<!-- Fómulário -->
	<div class="quadro">
		<form action="inserir.php" method="post">
			<div class="row">
				<div class="form-group col-12">
					<label>Nome:</label>
					<input type="text" class="form-control" onkeypress="return Onlychars(event)" patern="[a-z\s]+$" required name="nome" placeholder="Nome Completo"/>
				</div>
				<div class="form-group col-12 col-md-6 col-sm-6">
					<label>Cpf:</label>
					<input type="text" class="form-control" patern="^(([0-9]{3}.[0-9]{3}.[0-9]{3}-[0-9]{2})|([0-9]{11}))$" required name="cpf" id="cpf" placeholder="000.000.000-00">
				</div>
				<div class="form-group col-12 col-md-6 col-sm-6">
					<label>Telefone:</label>
					<input type="tel" class="form-control" patern="\([0-9]{2}\) [0-9]{4,6}-[0-9]{3,4}$" required name="tel" id="tel" placeholder="99 99999-9999">
				</div>
				<div class="form-group col-12 col-md-6 col-sm-6">
					<label>Email:</label>
					<input type="email" class="form-control" patern="^\w*(\.\w*)?@\w*\.[a-z]+(\.[a-z]+)?$" required name="email" placeholder="email@mail.com">
				</div>
				<div class="form-group col-6 col-md-3 col-sm-6">
					<label>Cep:</label>
					<input type="text" class="form-control" patern="\d{5}-?\d{3}" required name="cep" placeholder="00000-000" id="cep">
				</div>
				<div class="form-group col-6 col-md-3 col-sm-6">
					<label>UF:</label>
					<select type="text" class="form-control" required name="uf">
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
					<input type="text" class="form-control" onkeypress="return Onlychars(event)" patern="[a-z\s]+$" required name="city" placeholder="Salvador">
				</div>
				<div class="form-group col-12 col-md-4 col-sm-6">
					<label>Bairro:</label>
					<input type="text" class="form-control" onkeypress="return Onlychars(event)" patern="[a-z\s]+$" required name="bairro" placeholder="Rio Vermelho">
				</div>
				<div class="form-group col-12 col-md-4 col-sm-6">
					<label>Lougadouro:</label>
					<input type="text" class="form-control" onkeypress="return Onlychars(event)" patern="[a-z\s]+$" required name="place" placeholder="Rua, Avenida, Lameida">
				</div>
				<div class="col-12 col-md-9 col-sm-6">
					<input type="submit" class="btn btn-lg btn-primary"  value="Enviar" data-toggle="tooltip"
					data-placement="right" title="Confira os dados antes de enviar">
				</div>	
				<div class="col-12 col-md-3 col-sm-6 mt-2">
					<img src="./assets/img/logo_foco.png" alt="logo">
				</div>	
			</div>
		</form>
	</div>



</body>

</html>