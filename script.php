<?php 
// Aqui começa a programação do arquivo script.php responsavel por tratar os dados do formulario.
 ?>

<?php 
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
				/**/
			echo "}";
			echo "h1#erro{";
				echo "color:#800000;";
				/**/
			echo "}";
			echo "form{";
				echo "font-size: 20px;";
			echo "}";
		echo"</style>";
		echo "</head>";
		echo "<body>";
			echo '<div>';
			// valorInicial valorFinal valorMultiplo
			echo "<div>";
    		$v1 = isset($_POST['valorInicial'])?$_POST['valorInicial']:0;
			$v2 = isset($_POST['valorFinal'])?$_POST['valorFinal']:0;
			$v3 = isset($_POST['valorMultiplo'])?$_POST['valorMultiplo']:1;
			$voltar = $br.'<input type="SUBMIT" value="Voltar" onClick="history.go(-1)"/>'.$br.$br;
			$resultado = 0;
			if ($v1 >= $v2){
				echo '<h1 id="erro">O VALOR FINAL precisa ser maior que o VALOR INICIAL<h1>';
				echo $voltar;
			}elseif ($v3 > $v2) {
				echo '<h1 id="erro">O VALOR MULTIPLO precisa ser menor que o VALOR FINAL</h1>';
				echo $voltar;
			}else{

			//echo "$v1 $v2 $v3".$br;
			/*if ($v2 < $v1){
				echo "<h1> O valor inicial não pode ser menor que o valor final</h1>";
			} elseif($v3 = 0){
				echo "<h1> O valor do Múltiplo não pode ser igual a zero</h1>";
			}*/

			$i = 0;
			for ( $i; $i<=$v2;$i = $i + $v3){
				if ($i >= $v1) {
					$resultado += $i;
				}				
			}
			echo "<h1>A soma dos multiplos de $v3 entre $v1 e $v2 é $resultado.</h1>";
			echo $voltar;
		}
			//echo "Validações:$br";
			/*while ($v1 <= $v2) {

			}*/


			//$array = array($resultado);
			//print_r($array);
			

			//echo $array;
			//echo $br.$resultado;
		/*	for ($i=$v1; $i<=$v2; $i = $i * $v3){
				$resultado += $i;
			}*/
			echo '</div>'	;
		echo "</body>";
	echo "</html>";
?>