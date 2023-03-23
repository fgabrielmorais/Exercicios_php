

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício - Fibonnacci</title>
</head>
<body>
<h2>Exercícios - Fibonnacci</h2>

<form method="POST">
        <label for="numero">Informe um número inteiro:</label>
        <input type="number" id="numero" name="numeroUser" placeholder="Informe um número inteiro"/>
        <input type="submit" name="calculo" value="Exibir"/>
    </form>


    <?php
    if(isset($_POST['calculo'])){

    $numeroUser = $_POST['numeroUser'];

    $n1 = 0;
    $n2 = 1;
if($numeroUser > 0){
    for($i = 1; $i <= $numeroUser; $i++){
        $soma = $n1 + $n2;
        echo "elemento " . $i . " do fibonnacci: " . $soma . "<br>";
        $n1 = $n2;
        $n2 = $soma;
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



    <hr>
    <a href="index.php">Voltar</a>
</body>
</html>