<?php

//identificao de variaveis
$nome="Fabio";
$apelido="Silva";

//escrever o valor da variavel
echo $nome;
print $apelido;
echo "<br>";
//Ao usar '' o php não reconhece as variaveis
echo 'O nome é $nome e o apelido é $apelido';
echo "<br>";
//Temos de usar "" para reconhecer o valor das variaveis
echo "O nome é $nome e o apelido é $apelido";
echo "<br>";
//Usar concatenação
echo 'O nome é ' .$nome. ' e o apelido é ' .$apelido;
$idade = 27;
$num_anos= "12";
echo "<br>";
echo "Idade é $idade";

//Usar condições em PHP

if($idade === $num_anos){
    echo "<br> A idade = $idade";
}else{
    echo "<br> A idade é diferente";
}

//A utilização de === valida o conteudo e o tipo de variavel
if($idade == $num_anos){
    echo "<br> A idade é igual $num_anos";
}elseif($nome === $apelido){
    echo "<br> O nome diferente do apelido e ambos são string";
}else{
    echo "<br> O nome é diferente do apelido apesar de ser do mesmo tipo";
}


//Condicoes multiplas a serem testadas
switch($nome){
    case "Joao":
        echo "<br> O nome é João";
        break;
    case "Silva":
        echo "<br> O nome é Silva";
        break;
    default:
        echo "<br> O nome é outro = " .$nome;
}

//ciclo for
for($i=0; $i<=10; $i++){
    echo "<br> O valor do i = " .$i;
}

//ciclo while
$j=15;

while($j>6){
    echo "<br> O valor do j é: ".$j;
    $j--;
}

do{
    echo "<br> O valor do J é " .$j;
    $j--;
}while($j>6);

?>