<?php
if(isset($_POST['calculo'])){

$numeroUser = $_POST['numeroUser'];

$alternativa = $numeroUser;
$multiplicado = 0;

//fazendo a contagem valer até o valor do usuário recebido em outra variável
for($i = 1; $i <= $alternativa; $i++){

    //fazendo a contagem valer até o valor do usuário
    for($x = 1; $x <= $numeroUser; $x++){
        
    //multiplicando esse valor pelos números da contagem
    $multiplicado = $x * $numeroUser;
    echo $multiplicado . " ";
}

echo "<br>";
//subtraindo por menos um o valor do usuário
$numeroUser = $numeroUser - 1;
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