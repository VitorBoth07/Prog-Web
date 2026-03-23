<?php
/*/9 a 10 → A
7 a 8.9 → B
5 a 6.9 → C
3 a 4.9 → D
0 a 2.9 → F/*/
$nota = 2.9;
$saida = "Erro, digite um número entre 0-10.";
if ($nota <= 2.9 and $nota>=0){
    $saida = "F";}
elseif ($nota <= 4.9 and $nota>=3){
    $saida = "D";
}
elseif ($nota <=6.9  and $nota>=5){
    $saida = "C";
}
elseif ($nota <=8.9 and $nota>=7){
    $saida = "B";
}
elseif ($nota <= 10 and $nota>=9){
    $saida = "A";
}
echo($saida);
