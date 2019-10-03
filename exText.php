<!DOCTYPE html>
<?php
$texto=isset($_POST['texto'])?$_POST['texto']:'';
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
		<li><a href="exRadio.php">Exemplo Radio</a></li>
	</ul>
</div>
<form class="" action="" method="post">
	<label>Exemplo de PHP - Text</label><br>
	<textarea name="texto" id="texto" rows="8" cols="80"><?php echo $texto; ?></textarea><br>
	<input type="submit" name="btn" value="send"><br>
	<textarea name="textoNovo" id="textoNovo" rows="8" cols="80" readonly><?php echo $texto; ?></textarea>
</form>
</body>
</html>
