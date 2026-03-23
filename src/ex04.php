<?php
/*/Escreva um script que escreva a data atual do computador por extenso. Exemplo: Quinta-feira, 29
de dezembro de 2024. Dica: uso da função date/*/
date_default_timezone_set('America/Sao_Paulo');

$diaDaSemana = date("D");
$diaMes = date("d");
$mes = date ("m");
$ano = date("Y");
switch ($diaDaSemana) {
    case "Mon":
        $diaDaSemana = "Segunda-feira";
        break;
    case "Tue":
        $diaDaSemana =  "Terça-feira";
        break;
    case "Wed":
        $diaDaSemana =  "Quarta-feira";
        break;
    case "Thu":
        $diaDaSemana =  "Quinta-feira";
        break;
    case "Fri":
        $diaDaSemana =  "Sexta-feira";
        break;
    case "Sat":
        $diaDaSemana =  "Sábado";
        break;
    case "Sun":
        $diaDaSemana =  "Domingo";
        break;
}
switch ($mes) {
    case "01": $mes = "janeiro"; break;
    case "02": $mes = "fevereiro"; break;
    case "03": $mes = "março"; break;
    case "04": $mes = "abril"; break;
    case "05": $mes = "maio"; break;
    case "06": $mes = "junho"; break;
    case "07": $mes = "julho"; break;
    case "08": $mes = "agosto"; break;
    case "09": $mes = "setembro"; break;
    case "10": $mes = "outubro"; break;
    case "11": $mes = "novembro"; break;
    case "12": $mes = "dezembro"; break;
}
echo($diaDaSemana. " , " . $diaMes." de " . $mes . " de " . $ano);
