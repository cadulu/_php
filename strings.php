<!DOCTYPE html>
<html>
<head>
	<title>SoftBlue::Strings</title>
	<style>
		
		@import url('https://fonts.googleapis.com/css?family=Josefin+Sans');
		body { 
			
			font-family: 'Josefin Sans', sans-serif;
			color: #fff;
			background: #808080; }

	</style>
</head>
<body>
	<?php
		define("BR", "<br>");
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
		$x = str_replace("na", "com a", $strExemplo);
		echo "<br>".'Substindo "na" por "com a" em '.'"'.$strExemplo.'", fica: '.$x.'.'.BR;
		$imagem = "worldofwarcraft.jpg";
		echo '<br><img src='.$imagem.'>';
		echo "<br> Substituição da Imagem por MOP:";
		echo "<br>".'<img src='.str_replace("worldofwarcraft.jpg","mistsofpandaria.png",$imagem).">";
		$inversao = "Eduardo Luciano";
		echo "<br>"."O valor da variável é: ".$inversao;
		echo "<br> O Valor inverso é: ".strrev($inversao);
		echo "<br> Versão atual do PHP: ".phpversion();
		echo BR."Criptografia de string:".BR."crypt:".BR;
		$strExemplo = "PHP é na SoftBlue";
		$x = crypt($strExemplo);
		echo "O valor original é: ".$strExemplo.BR."O valor criptografado (crypt) é: ".$x.BR;
		$x = sha1($strExemplo);
		echo "O valor original é: ".$strExemplo.BR."O valor criptografado (sha1) é: ".$x.BR;
		$x = md5($strExemplo);
		echo "O valor original é: ".$strExemplo.BR."O valor criptografado (md5): ".$x.BR;
		echo "Usando o str_split com 4 posições:".BR;
		$x = str_split($strExemplo,4);
		$i=0;
		for ($i=0; $i < 4; $i++) { 
			echo $x[$i].BR;
		}
		$x = trim($strExemplo);
		$x = str_replace(" "," :-) ",$x);
		echo $x.BR;
		$x = ltrim($strExemplo);
		$x = str_replace(" "," :-) ",$x);
		echo $x.BR;
		$x = rtrim($strExemplo);
		$x = str_replace(" "," :-) ",$x);
		echo $x.BR;		
		echo "Casting de valores:".BR;
		$strExemplo = "15";
		print 'Valor da  variável: '.$strExemplo.BR;
		echo'Valor da ++variável: '.(++$strExemplo).BR;
		$strExemplo= "a15b40";
		print "Valor da  variável: ".$strExemplo.BR;
		print "Valor da ++variável: ".++$strExemplo.BR;
		$strExemplo="a15b40c";
		print "Valor da  variável: ".$strExemplo.BR;
		print "Valor da ++variável: ".++$strExemplo.BR;
		

	?>

</body>
</html>

