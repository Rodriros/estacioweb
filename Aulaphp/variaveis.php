<?php

$acesa = FALSE;
if ($acesa){
     print ("primeiro if, Acesa");
    }

    $acesa = TRUE;
     if($acesa){
     Print ("segundo if, acesa");
     }  
     echo "<br/>";

     #Variavelinteira
    $variavelInteira = -1234;

    echo $variavelInteira;
    echo "<br/>";
    #Tipo de ponto flutuante (Float)
    $notaAv1 = 4.5;
    $notaAv2 = 9.5;
     echo $notaAv1 + $notaAv2;
    echo "<br/>";

    #TIpo de Array
    $listacpf = array("fuji"=>"013046", "rodrigo"=>"096450");

    echo $listacpf["fuji"];
    echo "<br/>";
    echo $listacpf["rodrigo"];
              
?>  