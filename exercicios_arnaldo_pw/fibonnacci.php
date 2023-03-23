<?php
if(isset($_POST['calculo'])){

    $numeroUser = $_POST['numeroUser'];

    $n1 = 0;
    $n2 = 1;

    for($i = 1; $i <= $numeroUser; $i++){
        $soma = $n1 + $n2;
        echo "elemento " . $i . " do fibonnacci: " . $soma . "<br>";
        $n1 = $n2;
        $n2 = $soma;
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