<!DOCTYPE html>
<html>
<head>
	<title>SoftBlue :: Strings e Funções Especiais > Exercícios Propostos</title>
	<style>
		
		@import url('https://fonts.googleapis.com/css?family=Josefin+Sans');
		body { 
			background: url(https://bnetcmsus-a.akamaihd.net/cms/template_resource/D5JYNL4AKBAH1465510037833.jpg);

			background-size: cover;
			background-repeat: no-repeat;
			background-attachment: fixed;
			
			
		}
		div{
			font-family:"Open Sans",Arial,Helvetica,sans-serif;font-weight:400;
			font-size:1.08rem;
			line-height:1.5em;
			color:#ebdec2;
			text-shadow: 1px 1px #000000;
			background: 808080
			border-radius: 15px;
		}

	</style>
</head>
<body>
	<div id = "exercicios">
		Exercício 1 <br>
		Construa uma função que capitaliza (converte para maiúscula) a primeira letra de todas as palavras existentes em uma string passada como parâmetro, considerando que as palavras da string em questão são separadas com o caracter de espaço em branco.<br>
		Para a string "exemplo de string para ser capitalizada" o resultado deve ser "Exemplo De String Para Ser Capitalizada ".<br> 
		<div id = "php">
			<?php
				define('BR', '<br>');
				$varstrings = "Este módulo trata com profundidade o tipo de dado string e as principais funções disponibilizadas pelo PHP para manipulação, tratamento e formatação deste tipo de informação.";
				echo BR."Valor armazenado na variável ".'"$varstrings": '.$varstrings.BR;
				$conversao = ucwords($varstrings);
				echo BR."Valor armazenado na variável ".'"$varstrings", com a primeira letra de cada palavra em maiúscula: '.$conversao.BR;
				
			?>
		</div>
		Exercício 2 <br>
		Construa uma versão própria da função strrev sem utilizar a função em seu código.<br>  
		Para a string "Exemplo de string" o resultado deve ser "gnirts ed olpmexE ".<br> 
				<div id = "php">
			<?php
				$varstrings = "Exemplo de string";
				echo BR."Valor armazenado na variável ".'"$varstrings": '.$varstrings.BR;
				/*$conversao = ucwords($varstrings);
				echo BR."Valor armazenado na variável ".'"$varstrings", com a primeira letra de cada palavra em maiúscula: '.$conversao.BR;*/
				$contagem = strlen($varstrings);
				echo $contagem.BR;
				echo strchr($contagem, " ",1).BR;
				//while ( $varstrings <= $contagem) {
				//	$posicao = strpos($varstrings)
				//}

				
			?>
		</div>
		Exercício 3<br> 
		Construa uma versão própria da função strpos sem utilizar a função em seu código.<br>  
		Para a string "Exemplo de string" o resultado deve ser 2.<br> 
		Exercício 4<br> 
		Construa uma versão própria da função strchr sem utilizar a função em seu código.<br>  
		Para a string "Exemplo de string de teste" o resultado deve ser "de string de teste ". 
		Exercício 5<br> 
		Construa uma versão própria da função strrchr sem utilizar a função em seu código.<br>  
		Para a string "Exemplo de string de teste" o resultado deve ser "de teste ".<br> 
	</div>
	<div id = "php">
		<?php
			define('BR', '<br>');
			$varstrings = "Este módulo trata com profundidade o tipo de dado string e as principais funções disponibilizadas pelo PHP para manipulação, tratamento e formatação deste tipo de informação.";
			echo "Valor armazenado na variável ".'"$varstrings": '.$varstrings.BR;
			
		?>
	</div>
</body>
</html>