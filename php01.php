<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 01</title>
    <link rel="stylesheet" href="assets/estilo.css">
</head>
<body>
    <h1>Exercicio 01</h1>
    <div class="content">
        <h5>Crie um algoritmo que receba um número digitado pelo utilizador e verifique se esse valor é positivo, negativo ou igual a zero.
        <br><b> A saída deve ser: "Valor Positivo", "Valor Negativo" ou "Igual a Zero".</b>
        </h5>
        <form method="get" action="php01.php">
            <input type="number" name="valor" placeholder="Escreve um número">
            <br>
            <input type="submit" name="verificar" value="Verificar">
        </form>
        <div class="resultado">
            <?php

            //verificar se existe o botao e se ele foi clicado
            if(isset($_GET["verificar"])){

                //echo "Cliquei";
                //Colocar o valor da caixa de texto numa variavel
                $numero=$_GET["valor"];

                if($numero<0){
                    $res = "O valor " .$numero. " é menor do que zero.";
                }elseif($numero==0){
                    $res = "O valor " .$numero. " é zero.";
                }else{
                    $res = "O valor " .$numero. " é maior do que zero.";
                }

                echo "<br> $res";

            }else{
                echo "Não cliquei";
            }
            ?>
        </div>
        <p><a href="index.php" class="btn">Voltar ao indice</a></p>
    </div>
</body>
</html>