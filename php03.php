<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 03</title>
    <link rel="stylesheet" href="assets/estilo.css">
</head>

<body>
    <h1>Exercicio 03</h1>
    <div class="content">
        <h5>
            Ler um número inteiro entre 1 e 12 e escrever o mês correspondente. Caso o número seja fora desse intervalo, informar que não existe mês com este número.
            <br><b>Utilizando um array.</b>
        </h5>
        <form method="post" action="php03.php">
            <input type="number" name="valor" step="0.01" placeholder="Escreve um número">
            <br>
            <input type="submit" name="verificar" value="Exibir o mês">
        </form>
        <div class="resultado">
            <?php

            if(isset($_POST["verificar"])){
                //criar um vetor com os meses do ano
                $meses=["Janeiro","Fevereiro","Março","Abril","Maio","Junho","Julho","Agosto","Setembro","Outubro","Novembro","Dezembro"];
                //retirar o numero escrito na caixar valor e atribuir a uma variave
                $num=$_POST["valor"];

                //verificar se o numero é valido
                if($num>0 && $num<=12){

                    echo "Ao número $num corresponde o mês de ".$meses[$num-1];
                    
                }else{
                    echo "Mês inválido";
                }
            }
            
            ?>
        </div>
        <p><a href="index.php" class="btn">Voltar ao indice</a></p>
    </div>
</body>

</html>