<?php

// Tipos Primitivos de Dados:
// int || integer // número inteiro
// double || float || decimal || real // número quebrado
// bool || boolean // valores lógicos - true or false ( 1 || 0)
// string || char // texto
// "+ caracteres - string" || '1 caracter - char'
//****************************************************************************************************** 

echo "Ola Mundo! <br>";
// \n = quebra de linha - terminal
// <br> = quebra de linha - navegador

//echo 2 + 2; 
//  comentário de linha = // ; comentário de bloco = /* ... */

//$x = 2 + 2; 

//echo $x ; 

//echo "<br>";

//$x = 20 + 20 ;

//echo $x; 

// Tabuada do 5:

 $numeroMultiplicador = 5; //camelCase
$numero_multiplicador = 5; //snake_case

echo 1 * $numero_multiplicador . "<br/>";
echo 2 * $numero_multiplicador . "<br/>";
echo 3 * $numero_multiplicador . "<br/>";
echo 4 * $numero_multiplicador . "<br/>";
echo 5 * $numero_multiplicador . "<br/>";
echo 6 * $numero_multiplicador . "<br/>";
echo 7 * $numero_multiplicador . "<br/>";
echo 8 * $numero_multiplicador . "<br/>";
echo 9 * $numero_multiplicador . "<br/>";
echo 10 * $numero_multiplicador . "<br/>";

echo "1 x 5 =  ". 10 * $numero_multiplicador . "<br/>";

$resultado = 10 * $numero_multiplicador;
echo "10 x $numero_multiplicador = $resultado<br/>";

echo "<br/><br/>";

$hoje = date ("d/m/Y H:i:s");
echo $hoje;

echo "<br/><br/>";

$hoje = date ("Y-m-d H:i:s"); //formato para banco de dados

// const = constante - ex: const DATA_NASCIMENTO = "01/01/1950";

// != (diferente) 1 != 2 // false
//== (igualdade/comparação) 1 == 2 // false
// = (atribuição)

//mock/chumbado - teste
$valorA = 2;
$valorB = 4;

if ($valorA == $valorB) {
    echo "Os números são iguais.";
} else if ($valorA != $valorB) {
    echo "Os números são diferentes.";
} else {"número inválido.";} 

echo "<br/><br/>";

// ATIVIDADE 1 - Verificar a partir de um ano (número), a idade do usuário,e se este é ou não maior de idade -
$maioridade = 18;
$anoMaioridade = 2007;
$anoAtual = date ("Y");
$idade = $anoAtual - $anoMaioridade; 

if ($idade >= 18) {
      echo "Sua idade é $idade. Você é Maior de idade.";
} else if ($idade < 18) {
    echo "Sua idade é $idade. Você é Menor de idade.";
}

echo "<br/><br/>";

if ($maioridade >= 18) {
    echo "Maior de Idade.";
} else if ($maioridade < 18) {
    echo "Menor de Idade.";
}

// ATIVIDADE 2 - Dada as notas de 4 provas e, a média para ser aprovado de ano sendo 7.
//  Calcule a média do aluno e informe se o mesmo foi aprovado:
// Calcular a média ponderada e harmonica.

$nota_1 = 5;
$nota_2 = 8;
$nota_3 = 6;
$nota_4 = 7;
$mediaAluno = ($nota_1 + $nota_2 + $nota_3 + $nota_4)/4;

echo "<br/><br/>";

if ($mediaAluno >= 7){
    echo "Média aluno = $mediaAluno. Aprovado.";
} else if ($mediaAluno < 7){
    echo "Média aluno = $mediaAluno. Reprovado.";
}

// Média Ponderada - 
$mediaPonderada = ($nota_1 * 1 + $nota_2 * 2 + $nota_3 * 3 + $nota_4 * 4) / (1 + 2 + 3 + 4);

if ($mediaPonderada >= 7){
    echo "Média aluno = $mediaPonderada. Aprovado.";
} 
