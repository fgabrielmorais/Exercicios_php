


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercícios - Números Primos</title>
</head>
<body>
<h2>Números Primos</h2>
    <form method="POST">
        <label for="numero">Informe um número inteiro:</label>
        <input type="number" id="numero" name="numeroUser" placeholder="Informe um número inteiro"/>
        <input type="submit" name="calculo" value="Exibir"/>
    </form>
 

    <?php
if(isset($_POST['calculo'])){

    $numeroUser = $_POST['numeroUser'];

    $primo = 0;
    $contador = 1;


    if($numeroUser > 0){
    for($i = 1; $i <= $numeroUser; $i++){
        for($x = 2; $x < $i; $x++){
            if($i % $x == 0){
                $primo = 1;
            } 
        }

        if($primo == 0){
            echo $i . "<br>";
        }
        $primo = 0;

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