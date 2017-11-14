<!DOCTYPE html>
<html>
<head>
	<title>SoftBlue::Strings</title>
	<style>
		@import url('https://fonts.googleapis.com/css?family=Indie+Flower');
		body { font-family: 'Indie Flower', cursive; }
	</style>
</head>
<body>
	<?php  
		$strExemplo = "PHP é na SoftBlue";
		echo ($strExemplo);
		$tamanho = strlen($strExemplo);
		echo ", possui: ".$tamanho." caracteres, incluindo espaços e não imprimíveis.";
		$x = strpos($strExemplo, "P");
		echo "<br>"."Localização da letra P: ".$x;
		$x = strpos($strExemplo, "P",1);
		echo "<br>"."A segunda letra P está em: ".$x ;
		$x = strchr($strExemplo," ");
		echo "<br>"."O primeiro espaço começa em: ".'"'.$x.'"';
		$x = strchr($strExemplo,"na");
		echo "<br>".'A palavra "na" está localizada em: '.'"'.$x.'"';
		$x = strrchr($strExemplo, " ");
		echo "<br>". "O último espaço da frase está em: ".'"'.$x.'"';
		$x = strrchr($strExemplo, "na");
		echo "<br>". 'O último "na" da frase está em: '.'"'.$x.'"';
		$strExemplo = "PHP é na SoftBlue ";
		$x = substr($strExemplo, 4);
		echo "<br>"."A substring de:".'"'.$strExemplo.'"'." a partir da posição 4 é: ".$x;
		$x = substr($strExemplo, 4,6);
		echo "<br>"."A substring de:".'"'.$strExemplo.'"'." com 6 caracteres a partir da 4a posição é: ".'"'.$x.'"';
	?>

</body>
</html>

