<!DOCTYPE html>
<?php
// ex de Select

function verifySelection($base, $try) {
	if ($base == $try)
		return 'selected'; 
}

$tipo=isset($_POST['selMeses'])?$_POST['selMeses']:'';

$m = array('Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro')

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
			<li><a href="text.php">Exemplo Text</a></li>
			<li><a href="check-box.php">Exemplo Checkbox</a></li>
			<li><a href="select-multiple.php">Exemplo Select Multiple</a></li>
			<li><a href="radio.php">Exemplo Radio</a></li>
		</ul>
	</div>
<form class="" action="" method="post">
	<label>Exemplo de PHP - Select</label><br><br>
		<select class="selMeses" name="selMeses">
			<?php
				

				for ($x=0; $x < 12; $x++) {
					$y = $x + 1;
					$status = verifySelection($tipo,$y);
					
					echo "<option value='$y' $status>$m[$x]</option>";
				}
			?>
		</select>
		<br>
		<input type="submit" name="manda" value="send">
</form>
</body>
</html>
