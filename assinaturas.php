<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Assinatura Terumo</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="shortcut icon" href="favicon.ico" />
<style>
p{
	color:#008D61;
	font-family:'Century Gothic', CenturyGothic, AppleGothic, sans-serif;
	font-size: 18px;
}
h4, h5{
	font-family:'Century Gothic', CenturyGothic, AppleGothic, sans-serif;
	font-size: 14px;
}
table, th, td {
    border: 0px solid black;
    border-collapse: collapse;
	margin-left: 20px; 
}
table {
	margin: 0 auto;
	width: 50%;
	top: 50%;
}
form {
	margin: 0 auto;
	width: 98%;
}
</style>
</head>
<body>
	<br/>
    <table style="width:950px"><tbody>
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
			<b>Terumo Medical do Brasil Ltda</b>
			<br/>P&ccedil;a General Gentil Falc&atildeo,108 - 9&deg; Andar
			<br/>Cidade Mon&ccedil;&otildees - S&atildeo Paulo-SP CEP:04571-150
			<br/>Tel: $telefone | Celular: $celular<br/>Email: $email</h4>";
		?>
	</td>
		<td style="border-left:solid #008D61;"><img src="TERUMO_LOGO.jpg" width="400">
		</td>
	</tr>
	</tbody>
	</table>
	<form method="get" action="index.html">
	<br/><input type="submit" class="btn btn-success" value="VOLTAR"/>
	</form>
</body>
</html>