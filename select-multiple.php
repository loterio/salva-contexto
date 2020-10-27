<!DOCTYPE html>
<?php
	$lazeresc=isset($_POST['selLazer'])?$_POST['selLazer']:array();
	$lazer=array('Informática','Música','Basquete','Tenis','Volei');
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
			<li><a href="check-box.php">Exemplo Checkbox</a></li>
			<li><a href="text.php">Exemplo Text</a></li>
			<li><a href="radio.php">Exemplo Radio</a></li>
		</ul>
	</div>
<form class="" action="" method="post">
	<label>Lazer</label><br>
		<select name="selLazer[]" id="selLazer[]" multiple="multiple" size="6">
			<option value="">							</option>
			<?php
			for ($i=0; $i < count($lazer); $i++) {
				if(in_array($lazer[$i],$lazeresc))
					echo "<option value='$lazer[$i]' selected>$lazer[$i]</option>";
				else
					echo "<option value='$lazer[$i]'>$lazer[$i]</option>";
			}
			?>
		</select>
		<input type="submit" value="send">
</form>
<?php

?>
</body>
</html>
