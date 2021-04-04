<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Assinatura Terumo</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="shortcut icon" href="favicon.ico" />
	<link rel="stylesheet" href="_css/estilo.css"/>
</head>
<body>
	<br/>
    <table id="assinatura"><tbody>
	<tr>
	<td>
		<?php 
			$nome = $_GET["nome"];
			$cargo = $_GET["cargo"];
			$telefone = $_GET["telefone"];
			$celular = $_GET["celular"];
			$email = $_GET["email"];
/* DADOS ASSINATURA */
			echo "<p><b>$nome</b><sub><br/><i>$cargo</i></sub></p>";
			echo "<h5>
			<b>Empresa Ltda</b>
			<br/>Endereço da empresa, nº
			<br/>Bairro - Cidade - Estado CEP: 0000-000
			<br/>Tel: $telefone | Celular: $celular<br/>Email: $email</h4>";
		?>
	</td>
		<td id="logo"><img src="_imagens/logo_google.jpg" width="300">
		</td>
	</tr>
	</tbody>
	</table>
	<form method="get" action="index.html">
	<br/><input type="submit" class="btn btn-success" value="VOLTAR"/>
	</form>
</body>
</html>