<?php
    for($n1 = 1; $n1 <= 1000; $n1++){
        $soma = 0;        
        for($y = 1; $y < $n1; $y++){
            if($n1 % $y == 0){
                $soma += $y;
            }
        } 
        if($n1 == $soma){
            echo $n1 . " é perfeito <br>";
        } $soma = 0; 
    }
?>
