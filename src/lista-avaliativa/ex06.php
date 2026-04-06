<?php
/*/Um número perfeito é aquele cuja soma de seus divisores próprios (excluindo ele mesmo) é igual
ao próprio número. Escreva um script que analisa se um número é perfeito ou não.
Exemplos:
6 é um número perfeito porque seus divisores próprios são 1, 2 e 3, e a soma desses números é 6.
28 também é um número perfeito, pois os divisores são 1, 2, 4, 7 e 14, e a soma deles é 28/*/

$n1 = 28;
$soma = 0;
for($i = 1; $i < $n1; $i++){
    if($n1%$i == 0){
        $soma += $i;
    }
}
if( $soma == $n1){
    echo("O número " . $n1 . " é perfeito!");
}else{
    echo("O número " . $n1 . " não é perfeito!");
}
