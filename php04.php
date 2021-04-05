<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 04</title>
    <link rel="stylesheet" href="assets/estilo.css">
</head>

<body>
    <h1>Exercicio 04</h1>
    <div class="content">
        <h5>
            Ler um número inteiro entre 1 e 12 e escrever o mês correspondente. Caso o número seja fora desse intervalo, informar que não existe mês com este número.
            <br><b>Utilizando um switch.</b>
        </h5>
        <form method="post" action="php04.php">
            <input type="number" name="valor" step="0.01" placeholder="Escreve um número">
            <br>
            <input type="submit" name="verificar" value="Exibir o mês">
        </form>
        <div class="resultado">
            <?php

            if (isset($_POST["verificar"])) {
                //criar um vetor com os meses do ano
                $meses = ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"];
                //retirar o numero escrito na caixar valor e atribuir a uma variave
                $num = $_POST["valor"];

                //verificar se o numero é valido
                switch ($num) {
                    case 1:
                        $mes = $meses[0];
                        break;
                    case 2:
                        $mes = $meses[1];
                        break;
                    case 3:
                        $mes = $meses[2];
                        break;
                    case 4:
                        $mes = $meses[3];
                        break;
                    case 5:
                        $mes = $meses[4];
                        break;
                    case 6:
                        $mes = $meses[5];
                        break;
                    case 7:
                        $mes = $meses[6];
                        break;
                    case 8:
                        $mes = $meses[7];
                        break;
                    case 9:
                        $mes = $meses[8];
                        break;
                    case 10:
                        $mes = $meses[9];
                        break;
                    case 11:
                        $mes = $meses[10];
                        break;
                    case 12:
                        $mes = $meses[11];
                        break;
                    default:
                        $mes = "Inválido";
                        break;
                }
                echo $mes;
            }

            ?>
        </div>
        <p><a href="index.php" class="btn">Voltar ao indice</a></p>
    </div>
</body>

</html>