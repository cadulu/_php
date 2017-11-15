<!DOCTYPE html>
<html>
<head>
	<title>SoftBlue :: Strings - Prática</title>
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
		$strExemplo = "Frase composta de exemplo para aula.";
		echo "$strExemplo".BR;
		echo "Qual o tamanho da string?".BR;
		$x = strlen($strExemplo);
		echo "A string possui ".$x." caracteres entre imprimiveis e não imprimiveis.".BR;
		$strExemplo = "Frasé composta de exemplo para aula.";
		$x = strlen($strExemplo);
		echo "A string possui ".$x." caracteres entre imprimiveis e não imprimiveis.".BR;
		// Acentos e caracters especiais: utilize o utf8_decode
		$x = strlen(utf8_decode($strExemplo));
		echo "A string possui ".$x." caracteres entre imprimiveis e não imprimiveis.".BR;
		$pos = "a";
		/*$x = strpos($strExemplo,$pos);
		echo $strExemplo.BR;
		echo "O caractere ". '"'.$pos. '"'." está na posição ". $x.BR;
		$x = strpos($strExemplo,$pos,3);
		echo $strExemplo.BR;
		echo "O caractere ". '"'.$pos. '"'." está na posição ". $x.BR;*/
		echo $strExemplo.BR;
		
		for ($i=0; $i < strlen(utf8_decode($strExemplo)); $i++) { 
			$x = strpos($strExemplo,$pos,$i++);			
			echo "O caractere ". '"'.$pos. '"'." está na posição ". $x.BR;
			//++$i;
		}
		echo "----------------------------------------------".BR;
		echo "De acordo com teoria da aula:".BR;
		$posicao = strpos($strExemplo,"a");
		while($posicao !== FALSE){
			echo "Posição: ".$posicao.BR;
			$posicao = strpos($strExemplo,$pos,$posicao+1);
		}
		echo "----------------------------------------------".BR;
		$x = strchr($strExemplo, " ");
		echo $x.BR;
		$x = strchr($strExemplo, "d");
		echo $x.BR;
		$x = strrchr($strExemplo, " ");
		echo $x.BR;
		echo "----------------------------------------------".BR;
		echo "Teste de contagem com strchr, strrchr e strlen".BR;
		$senha = "few70912701289731-2";
		$caracter = strlen(utf8_decode($senha));
		if (strlen(utf8_decode($senha))>8) {
			echo "A senha pode ter até 8 caracteres e sua senha possui neste momento ".$caracter.BR;
			echo "Por favor revise sua senha!".BR;
		}elseif (strlen(utf8_decode($senha))<4) {
			echo "A senha precisa ter mais de 4 caractes e sua senha possui neste momento ".$caracter.BR."Por favor revise sua senha!".BR;
		}
		echo "Aula parada em 21:02 por mal tempo";
	?>
</body>
</html>
