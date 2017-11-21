<!DOCTYPE html>
<html>
<head>
	<title>SoftBlue :: Strings - Prática</title>
	<style>
		
		@import url('https://fonts.googleapis.com/css?family=Josefin+Sans');
		body { 
			background: url(https://bnetcmsus-a.akamaihd.net/cms/template_resource/97IJ4U1G9AV41509583487500.jpg);

			background-size: cover;
			background-repeat: no-repeat;
			background-attachment: fixed;
			
			
		}
		div{
			font-family: 'Josefin Sans', sans-serif;
			color: #ebdec2;
			text-shadow: 1px 1px #000;
			background: 808080
			border-radius: 15px;
		}

	</style>
</head>
<body>
	<div id = "container">
	<script type="text/javascript">
		var alfa;
		alfa =3;
		var beta = 'E-book de javascript';
		document.write('__________________________________'+'<br>');
		document.write('o valor de alfa é: ' + alfa);
		document.write('<br>');
		document.write('O valor de beta é: '+ beta + '<br>');
		var alfa = "Eduardo ";
		var beta = 'Luciano';
		var gama = alfa + beta;
		var br = '<br>';
		document.write(gama + br);
		var x = 10;
		var y = 15.5;
		var z = x + y;
		document.write(z + br);
		var resultado = true;
		document.write ('O valor contido na variavel "resultado" é: ' + resultado + br);
		var lista = new Array("Maça", "Laranja", "Abacaxi");
		document.write('O valor do "Array" posição 0 é: ' + lista[0]+ br);
		document.write('O valor do "Array" posição 1 é: ' + lista[1]+br);
		document.write('O valor do "Array" posição 2 é: ' + lista[2]+br);
		var texto = "JavaScript é na SoftBlue";
		document.write('O texto: " '+ texto+'" tem "' + texto.length + " posições." + br);
		document.write('__________________________________'+'<br>');
		//document.write('<br>');
	</script>
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
		echo "Teste de contagem com strlen e substr".BR;
		$senha = "few70912701289731-2";
		$caracter = strlen(utf8_decode($senha));
		if (strlen(utf8_decode($senha))>8) {
			echo "A senha pode ter até 8 caracteres e sua senha possui neste momento ".$caracter.BR."Favor excluir os caracteres ".'"'.substr($senha,8).'"'.".";
			echo "Por favor revise sua senha!".BR;
		}elseif (strlen(utf8_decode($senha))<4) {
			echo "A senha precisa ter mais de 4 caractes e sua senha possui neste momento ".$caracter.BR." Por favor revise sua senha!".BR;
		}
		echo "Aula parada em 21:02 por mal tempo";
		$x = substr($strExemplo, 4);
		echo $x.BR;
		$x = str_replace("composta", "criada", $strExemplo);
		echo $strExemplo;
		echo BR. $x.BR;
		$x = chr(65);
		echo $x.BR;
		$x = strtolower($strExemplo);
		echo $x.BR;
		echo  strtoupper($strExemplo).BR;
		echo ucfirst($strExemplo).BR;
		echo ucwords($strExemplo).BR;
		echo utf8_decode(strrev($strExemplo)).BR;
		$strExemplo = " Carlos  Eduardo Luciano ";
		echo $strExemplo.BR;
		$x = trim($strExemplo);
		$x = str_replace("  ", "_", $x);
		echo $x.BR;
		echo "Aula parada em 37:38 ".BR;
		$x = str_split($strExemplo,5);
		echo $x[0].BR;
		echo $x[2].BR;
		echo $x[3].BR;
		echo $x[4].BR;
		$x = explode(" ", $strExemplo);
		echo $x[0].BR;
		echo $x[2].BR;
		echo $x[3].BR;
		echo $x[4].BR;
		echo "explode() pode ser usado para fazer leitura em arquivos .csv por exemplo".BR;
		echo "Agora algoritimos de HASH".BR;
		$strExemplo = 123456;
		echo sha1($strExemplo).BR;
		echo md5($strExemplo."Teste de tokenseguro@@#!").BR; // Usar sempre Super Token
		echo crypt($strExemplo, "token").BR;
		echo crypt($strExemplo, "token").BR;
		echo "Teste de senha:".BR;
		echo "Senha digitada é: Khadgar88".BR;
		$senha = "jgstom0318";
		$guardar = md5($senha."e8691507bdf77ba0a4e2f319f9b1a491000a574f35b6ff67df074ac5bf49ab1c");
		echo "Prova: ". $guardar.BR;
		$digitei = "jgstom0318";
		echo "Vou digitar a senha: ".$digitei.BR;
		
		$verificar = md5($digitei."e8691507bdf77ba0a4e2f319f9b1a491000a574f35b6ff67df074ac5bf49ab1c");
		if ($verificar == $guardar) {
				echo "Senha Ok. Entrou no Sistema".BR;
			} else {
				echo "Senha não confere. Acesso não permitido".BR;
			}
		?>
	</div>
</body>
</html>
