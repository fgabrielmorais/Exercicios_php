
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício - Número Perfeito</title>
</head>
<body>

<h2>Números Perfeitos</h2>
    
    <?php
    for($n1 = 1; $n1 <= 10000; $n1++){
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

<hr>
<a href="index.php">Voltar</a>

</body>
</html>