<!DOCTYPE html>
<?php
// ex de Checkbox
$lazeresc = isset($_POST['selLazer'])?$_POST['selLazer'] : array();
var_dump($lazeresc);
$lazer = array('Informática','Música','Basqueste','Tenis','Volei');

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
		<li><a href="select.php">Exemplo Select</a></li>
		<li><a href="text.php">Exemplo Text</a></li>
		<li><a href="select-multiple.php">Exemplo Select Multiple</a></li>
		<li><a href="radio.php">Exemplo Radio</a></li>
	</ul>
</div>
<form class="" action="" method="post">
	<label>Exemplo de PHP - Checkbox</label><br><br>
		<?php
		for ($i=0; $i < count($lazer); $i++) { 
			if (in_array($lazer[$i], $lazeresc)) {
				echo "<input type='checkbox' name='selLazer[]' id='selLazer[]'".
				" value='$lazer[$i]' checked>$lazer[$i]";
			}else{
				echo "<input type='checkbox' name='selLazer[]' id='selLazer[]'".
				" value='$lazer[$i]'>$lazer[$i]";
			}
		}
		?>
		<br>
		<input type="submit" value="send">
</form>
<?php

?>
</body>
</html>
