<!DOCTYPE html>
<?php
// ex de radio
$strText=isset($_POST['rbSexo'])?$_POST['rbSexo']:'M';

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
			<li><a href="exSelect.php">Exemplo Select</a></li>
			<li><a href="exCheckBox.php">Exemplo Checkbox</a></li>
			<li><a href="exSelectMultiple.php">Exemplo Select Multiple</a></li>
			<li><a href="exText.php">Exemplo Text</a></li>
		</ul>
	</div>
<form class="" action="" method="post">
	<label>Exemplo de PHP - Radio</label><br><br>
		<input type="radio" name="rbSexo" id="rbSexo" value="M" <?php if($strText=='M') echo 'checked';?>>Masculino
		<input type="radio" name="rbSexo" id="rbSexo" value="F" <?php if($strText=='F') echo 'checked';?>>Feminino<br>
		<input type="submit" value="send">
</form>
<?php

?>
</body>
</html>
