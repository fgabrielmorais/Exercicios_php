<?php
if(isset($_POST['calculo'])){

$numeroUser = $_POST['numeroUser'];

$multiplicado = 0;


if($numeroUser > 0){

for($i = 1; $i < $numeroUser; $i++){
    
    for($x = 1; $x <= $i; $x++){
        $multiplicado = $i * $x;
        echo $multiplicado . " ";
    }
    echo "<br>";
}

for($i = $numeroUser; $i >= 1; $i--){

    for($x = 1; $x <= $i; $x++){

        $multiplicado = $i * $x;
        echo $multiplicado . " ";
    }

    echo "<br>";

}

}
else{
    echo 'NÃO PODE NÚMERO NEGATIVO';
}
}



else{
    echo 'Informe um valor';
}
?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercícios</title>
</head>
<body>
    <form method="POST">
        <label for="numero">Informe um número inteiro:</label>
        <input type="number" id="numero" name="numeroUser" placeholder="Informe um número inteiro"/>
        <input type="submit" name="calculo" value="Exibir"/>
    </form>
</body>
</html>