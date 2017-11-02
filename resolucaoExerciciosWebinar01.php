<?php /*CARLOS EDUARDO LUCIANO (Eduardo Luciano) cadulu@gmail.com*/ ?>

<?php
    // Imprima na tela a soma de todos os números pares de 50 a 100 (incluindo-os).
    // O resultado deve ser 1950.
    // Desafio: Existe uma forma de construir sem o uso de comandos de decisão.
    // Declaração de Variáveis:
    $i = 50;
    $resultado=0;
    for ($i=50; $i<=100; $i+=2){
    	$resultado += $i; 
    }
    echo $resultado;
      /*while($resultado <= 1950){
    $resultado = $i;
    $soma = $soma + $resultado;
    for($i=50; $i<=100;$i+=2){
	echo "$soma <br/>";   	
    }
    }*/

    //print_r($vetor);
    //$somatoria = array_sum($vetor);
    //echo $somatoria;
    //echo 'A somatória é: '. number array_sum($somatoria)."<br/>";
    /*while ($i <= 1950) {
    $i = $i+2;
 			//$i++;
 			echo $i;
 	}*/
 	//echo '$num, ';
?>

<?php 
//    // Escreva um código que retorne o fatorial do número informado na variável $x.
//    // Para o valor 4 o resultado deve ser 24.
//    // Declaração de Variáveis:
    $base=1;
    echo "<br/><br/>";
    $x=isset($_GET['x'])?$_GET['x']:4;
    $guardax=$x;
    for ($i=$x;$i>0;$i--){
    	//$x = $i * $i;
    	$base*=$i;
    	//echo "x  no laço = ".$x."<br/>";
    	//echo "i  no laço = ".$i."<br/>";
    }
    //$x *= $i;
    $x=$base;
    echo  "o fatorial de $guardax! é: ".$x;
?>
<?php 
//    // Escreva um código que calcule o salário de um vendedor. O código deve receber
//    // o valor do salário fixo e o valor das vendas do mês do vendedor, que ganha
//    // 3% do valor total das vendas, e mais 5% do valor que exceder de 1500.
//    // Para o salário de 800 e vendas em 2000 deve resultar em 885.
//    // Declaração de variáveis:
    echo "<br/><br/>";
    $salario  = isset($_GET['s'])?$_GET['s']:800.00; 
    $vendas   = isset($_GET['v'])?$_GET['v']:2000.00;
    $comissao = $vendas*0.03; // Até 1.500,00
    $excesso  = ($vendas >= 1500)?$vendas =(($vendas - 1500) * 0.05):$vendas = 0; // Comissão sobre o que exceder 1.500,00
    $total    = $salario+$comissao+$excesso;
    echo "Salário do Vendedor:     ".number_format($salario,2)."<br/>";
    echo "Total de Vendas no mês:  ".number_format($vendas,2)."<br/>";
    echo "Total de comissões a 3%: ".number_format($comissao,2)."<br/>";
    echo "Total de comissões a 5%: ".number_format($excesso,2)."<br/>";
    echo "Total a receber:         ".number_format($total,2)."<br/>";

?>