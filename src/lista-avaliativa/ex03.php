<?php
/*/Escreva um script que apresente as mensagens de “Bom dia”, “Boa tarde” ou “Boa noite”,
conforme o horário que o usuário estiver acessando a página. Dica: uso da função date/*/
$hora = date("H");
$turno = "Manhã";
if($hora>12){
    $turno = "Tarde";
}elseif($hora>18){
    $turno="Noite";
}
echo$hora;
echo$turno;
