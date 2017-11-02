<?php /*CARLOS EDUARDO LUCIANO (Eduardo Luciano) cadulu@gmail.com*/ ?>
<?php 
	// Construa um formulário que receba 3 campos:
	//  - Valor inicial - ok
	//  - Valor final - ok
	//  - Valor múltiplo - ok
	// Obtenha a soma dos valores múltiplos de "valor múltiplo",
	// existentes no intervalo de números entre o valor inicial e final (incluindo-os).
	// Para 5, 12 e 2 o resultado é 36.
	// Com validação a prova de falhas de usuário. 
	$br = "<br/>";
	echo "<!doctype html>";
	echo '<html lang="pt-br">';
		echo "<head>";
		echo "<title> Resolução de exercícios Webinar PHP Academy #2 </title>";
		echo '<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">';
		echo '<style type="text/css" media="screen">';
			echo "@import url('https://fonts.googleapis.com/css?family=Bubbler+One');";
			echo "@import url('https://fonts.googleapis.com/css?family=Mogra');";
			echo "body{";
				echo "font-family: 'Bubbler One';";
			echo "}";
			echo "div{";
				echo "display: box;";
				echo "width: 500px;";
				echo "height: auto;";
				echo "position: relative;";
				echo "background-color: #c0c0c0;";
				echo "text-align: center;";
				echo "border: 1px #c0c0c9 outset;";
				echo "padding: auto 100px auto 100px;";
				echo "text-shadow: 2px 2px 2px rgba(0,0,0,.5)";
				echo "border-width: 10px";
				echo "border-style: thin;";
				echo "border-color: #c0c099;";
			echo "}";
			echo "input{";
				echo "font-family: 'Mogra';";
				echo "color:#000000;";
				echo "height: 40px;";
				echo "style-position: middle;";
				echo "padding: 5px;";
				echo "font-size: 24pt;";
			echo "}";
			echo "h1{";
				echo "color:#fcfcfc;";
			
			echo "}";
			echo "form{";
				echo "font-size: 20px;";
			echo "}";
		echo"</style>";
		echo "</head>";
		echo "<body>";
			echo '<div>';
				echo '<form method="POST" action="script.php">';
					echo "<h1>Valor Inicial:".'<input type="number" name="valorInicial" placeholder="0" />'."</h1>";
					echo "<h1>Valor final:  ".'<input type="number" name="valorFinal" placeholder="0"/>'."</h1>";
					echo "<h1>Valor múltiplo:".'<input type="number" name="valorMultiplo" min="1" value="1"/>'."</h1>";
					//echo '<option value="1"></option>';
					echo '<input type="SUBMIT" value="Calcular"/>'.$br.$br;
                    
				echo "</form>";
			echo '</div>'	;
		echo "</body>";
	echo "</html>";
?>