<!DOCTYPE html>
<?php
// ex de Select
$tipo=isset($_POST['selMeses'])?$_POST['selMeses']:'';
?>
<html lang="pt-BR">
<head>
	<meta charset="utf-8">
	<title><?php  ?></title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div>
		<ul>
			<li><a href="exText.php">Exemplo Text</a></li>
			<li><a href="exCheckBox.php">Exemplo Checkbox</a></li>
			<li><a href="exSelectMultiple.php">Exemplo Select Multiple</a></li>
			<li><a href="exRadio.php">Exemplo Radio</a></li>
		</ul>
	</div>
<form class="" action="" method="post">
	<label>Exemplo de PHP - Select</label><br><br>
		<select class="selMeses" name="selMeses">
			<option value="1"<?php if($tipo == '1') echo 'selected'; ?>>Janeiro</option>
			<option value="2"<?php if($tipo == '2') echo 'selected'; ?>>Fevereiro</option>
			<option value="3"<?php if($tipo == '3') echo 'selected'; ?>>Março</option>
			<option value="4"<?php if($tipo == '4') echo 'selected'; ?>>Abril</option>
			<option value="5"<?php if($tipo == '5') echo 'selected'; ?>>Maio</option>
			<option value="6"<?php if($tipo == '6') echo 'selected'; ?>>Junho</option>
			<option value="7"<?php if($tipo == '7') echo 'selected'; ?>>Julho</option>
			<option value="8"<?php if($tipo == '8') echo 'selected'; ?>>Agosto</option>
			<option value="9"<?php if($tipo == '9') echo 'selected'; ?>>Setembro</option>
			<option value="10"<?php if($tipo == '10') echo 'selected'; ?>>Outubro</option>
			<option value="11"<?php if($tipo == '11') echo 'selected'; ?>>Novembro</option>
			<option value="12"<?php if($tipo == '12') echo 'selected'; ?>>Dezembro</option>
		</select>
		<br>
		<input type="submit" name="manda" value="send">
</form>
<?php

?>
</body>
</html>
