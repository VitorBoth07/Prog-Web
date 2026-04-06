<?php
/*/Escreva um script que execute um laço de repetição de 1 a 500 e exiba os números na tela. Caso
o número seja divisível por 3 deve escrever Fizz, caso seja divisível por 5, deve escrever Buzz,
caso seja divisível pelos dois divisores, deve escrever FizzBuzz
/*/
$n = 1;
    for($i=1; $i<=500; $i++){
       
          if($i%3==0 and $i%5== 0){
            echo "FizzBuzz <br>";
        }elseif ($i%3 == 0 ){
            echo"Fizz <br>";}
        elseif($i%5==0){
            echo"Buzz <br>";
        }
      
        else{
         echo ($i . " <br> ");
    }}