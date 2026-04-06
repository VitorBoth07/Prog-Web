<?php
/*1. Escreva uma função que receba um número (entre 1 e 10) e escreva a tabuada deste número.
*/
$n1=6;
function tabuadaNumero($n1){
    for($i=1; $i<11; $i++ ){
    echo($i."x".$n1."=".$n1*$i."<br>");}}
    tabuadaNumero($n1);