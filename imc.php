<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>IMC</title>
	</head>
	<body>
		<?php
			if(isset($imc["valor"])){
				echo "<h3>O usuário ".$arr["nome"]." com peso ".$arr["peso"]." e altura ".$arr["altura"]."</h3>";
				echo "<h3>Foi classificado como ".$imc["classificacao"]." Grau de obesidade ".$imc["grau"]."</h3>";
			}
		?>
		
		<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
			Nome: <input type="text"name="nome"><br>
			Altura: <input type="text"name="altura"><br>
			Peso: <input type="text"name="peso"><br>
			<input type="submit">
		</form>
	</body>
</html>