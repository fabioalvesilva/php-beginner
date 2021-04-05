<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 02</title>
    <link rel="stylesheet" href="assets/estilo.css">
</head>

<body>
    <h1>Exercicio 02</h1>
    <div class="content">
        <h5>
            Crie um algoritmo que solicite a entrada de um número, e exiba a tabuada de 0 a 10 de acordo com o número solicitado,
            <br><b> ex: Entrada = 4 Saída = 4 X 0 = 0...4 X 10 = 40.</b>
        </h5>
        <form method="post" action="php02.php">
            <input type="number" name="valor" step="0.01" placeholder="Escreve um número">
            <br>
            <input type="submit" name="verificar" value="Exibir Tabuada">
        </form>
        <div class="resultado">
            <?php

            if(isset($_POST["verificar"])){

                //retirar o numero escrito na caixar valor e atribuir a uma variave
                $num=$_POST["valor"];

                //verificar se o numero é positivo
                if($num>=0){
                    for($i=0; $i<=10; $i++){
                        echo $num."X".$i."=".$i*$num."<br>";
                    }
                }else{
                    echo "Número inválido";
                }
            }
            
            ?>
        </div>
        <p><a href="index.php" class="btn">Voltar ao indice</a></p>
    </div>
</body>

</html>