<?php

// // Tipos Primitivos de Dados:
// // int || integer // número inteiro
// // double || float || decimal || real // número quebrado
// // bool || boolean // valores lógicos - true or false ( 1 || 0)
// // string || char // texto
// // "+ caracteres - string" || '1 caracter - char'
// //****************************************************************************************************** 

// echo "Ola Mundo! <br>";
// // \n = quebra de linha - terminal
// // <br> = quebra de linha - navegador

// //echo 2 + 2; 
// //  comentário de linha = // ; comentário de bloco = /* ... */

// //$x = 2 + 2; 

// //echo $x ; 

// //echo "<br>";

// //$x = 20 + 20 ;

// //echo $x; 

// // Tabuada do 5:

//  $numeroMultiplicador = 5; //camelCase
// $numero_multiplicador = 5; //snake_case

// echo 1 * $numero_multiplicador . "<br/>";
// echo 2 * $numero_multiplicador . "<br/>";
// echo 3 * $numero_multiplicador . "<br/>";
// echo 4 * $numero_multiplicador . "<br/>";
// echo 5 * $numero_multiplicador . "<br/>";
// echo 6 * $numero_multiplicador . "<br/>";
// echo 7 * $numero_multiplicador . "<br/>";
// echo 8 * $numero_multiplicador . "<br/>";
// echo 9 * $numero_multiplicador . "<br/>";
// echo 10 * $numero_multiplicador . "<br/>";

// echo "1 x 5 =  ". 10 * $numero_multiplicador . "<br/>";

// $resultado = 10 * $numero_multiplicador;
// echo "10 x $numero_multiplicador = $resultado<br/>";

// echo "<br/><br/>";

// $hoje = date ("d/m/Y H:i:s");
// echo $hoje;

// echo "<br/><br/>";

// $hoje = date ("Y-m-d H:i:s"); //formato para banco de dados

// // const = constante - ex: const DATA_NASCIMENTO = "01/01/1950";

// // != (diferente) 1 != 2 // false
// //== (igualdade/comparação) 1 == 2 // false
// // = (atribuição)

// //mock/chumbado - teste
// $valorA = 2;
// $valorB = 4;

// if ($valorA == $valorB) {
//     echo "Os números são iguais.";
// } else if ($valorA != $valorB) {
//     echo "Os números são diferentes.";
// } else {"número inválido.";} 

// echo "<br/><br/>";

// // ATIVIDADE 1 - Verificar a partir de um ano (número), a idade do usuário,e se este é ou não maior de idade -
// $maioridade = 18;
// $anoMaioridade = 2007;
// $anoAtual = date ("Y");
// $idade = $anoAtual - $anoMaioridade; 

// if ($idade >= 18) {
//       echo "Sua idade é $idade. Você é Maior de idade.";
// } else if ($idade < 18) {
//     echo "Sua idade é $idade. Você é Menor de idade.";
// }

// echo "<br/><br/>";

// if ($maioridade >= 18) {
//     echo "Maior de Idade.";
// } else if ($maioridade < 18) {
//     echo "Menor de Idade.";
// }

// // ATIVIDADE 2 - Dada as notas de 4 provas e, a média para ser aprovado de ano sendo 7.
// //  Calcule a média do aluno e informe se o mesmo foi aprovado:
// // Calcular a média ponderada e harmonica.

// $nota_1 = 5;
// $nota_2 = 8;
// $nota_3 = 6;
// $nota_4 = 7;
// $mediaAluno = ($nota_1 + $nota_2 + $nota_3 + $nota_4)/4;

// echo "<br/><br/>";

// if ($mediaAluno >= 7){
//     echo "Média aluno =  $mediaAluno. Aprovado.";
// } else if ($mediaAluno < 7){
//     echo "Média aluno =  $mediaAluno. Reprovado.";
// } 

// // Média Ponderada - 

// $peso_1 = 1;
// $peso_1 = 2;
// $peso_1 = 3;
// $peso_1 = 4;
// $somaPesos = ($nota_1 * 1 + $nota_2 * 2 + $nota_3 * 3 + $nota_4 * 4);
// $mediaPonderada = $somaPesos / (1 + 2 + 3 + 4);


// echo "<br/><br/>";

// if ($mediaPonderada >= 7){
//     echo "Média aluno =  $mediaPonderada. Aprovado.";
// } else if ($mediaPonderada < 7){
//     echo "Média aluno =  $mediaPonderada. Reprovado.";
// }

// // Média Harmonica - 

// $numeroElementos = 4;
// $somaNotas = (1/$nota_1 + 1/$nota_2 + 1/$nota_3 + 1/$nota_4);
// $mediaHarmonica = $numeroElementos / $somaNotas;

// echo "<br/><br/>";

// if ($mediaHarmonica >= 7){
//     echo "Média aluno =  $mediaHarmonica. Aprovado.";
// } else if ($mediaHarmonica < 7){
//     echo "Média aluno =  $mediaHarmonica. Reprovado.";
// }

// // Criar uma calculadora - 

// $valor1 = 31;
// $valor2 = 2;
// $operador = "*";
// $resultado = 0;

// echo "<br/><br/>";

// if ($operador == "+"){
//     $resultado = $valor1 + $valor2 ;
//     echo "$valor1 + $valor2 = $resultado";
// } else if ($operador == "-") {
//     $resultado = $valor1 - $valor2 ;
//     echo "$valor1 - $valor2 = $resultado";
// } else if ($operador == "/")  {
//     $resultado = $valor1 / $valor2 ;
//     echo "$valor1 / $valor2 = $resultado";
// } else if ($operador == "*") {
//     $resultado = $valor1 * $valor2 ;
//     echo "$valor1 * $valor2 = $resultado";
// } else {
//     echo "Operador inválido.";
// }

// switch ($operador) {
//     case "+";
//         $resultado = $valor1 + $valor2;
//         break;
//     case "-";
//         $resultado = $valor1 - $valor2;
//         break;
//     case "*";
//         $resultado = $valor1 * $valor2;
//         break;
//     case "/";
//         $resultado = $valor1 / $valor2;
//         break;
//     default;
//         echo "Operador Inválido.";
//         $resultado = 0;
//         break;
// }

// echo "<br/> O resultado da operação ($valor1 $operador $valor2) é: $resultado";
// echo "<br/><br/>";

// // Ler 3 valores (A, B e C) e informar se eles são iguais.
// $valorA = 10;
// $valorB = 10;
// $valorC = 10;

// if ($valorA == $valorB && $valorB == $valorC) {
//     echo "Os valores são iguais.";
// } else {
//     echo "Os valores são diferentes.";
// }

// /* Ler 3 valores (A, B e C) e informar ao usuário qual tipo de triângulo ele forma,
// ou se não forma nenhum triângulo.
// Triângulos a considerar: equilátero, isósceles e escaleno.
// */
// $valorA = 10;
// $valorB = 10;
// $valorC = 10;

// echo "<br/><br/>";

// if ($valorA == $valorB && $valorB == $valorC) {
//     echo "O triângulo é Equilátero.";
// } else if (
//     ($valorA != $valorB && $valorB == $valorC)||
//     ($valorA == $valorB && $valorB != $valorC)|| 
//     ($valorA == $valorB && $valorA != $valorC)
//     ) {
//     echo "O triângulo é Isósceles.";
// } else if (
//  ($valorA != $valorB && $valorB != $valorC) && 
//  ($valorA + $valorB > $valorC && $valorA + $valorC > $valorB && $valorB + $valorC > $valorA ) 
// ){
//     echo "O triângulo é Escaleno.";
// }
//   else {
//     echo "Não forma nenhum triângulo.";
// }

// echo "<br/><br/>";

// // FOR - (Laço de Repetição) - 

// for ($i = 0; $i < 10; $i++) {
//     echo $i . "<br/>";
// }

// $i = 30;
// while($i < 10){
//     echo $i . "<br/>"; 
//     $i++;
// }

// $i = 50;
// do {
//    echo $i . "<br/>"; // 50  // do while - vai fazer uma vz mesmo que as condições não sejam atingidas - "faça enquanto"
//    $i++; 
// } while($i < 10);

// echo "<br/><br/>";

// // Tabuada do 5 - 
// $multiplicador = 5;

//    for ($i = 0; $i <= 10; $i++) {
//         $resultado = $multiplicador * $i;

//         echo "$multiplicador * $i = $resultado" . "<br/>";
//     }   echo "<br/><br/>";

// $i = 0;
// while($i <= 10) {
//     $resultado = $multiplicador * $i;
//     echo "$multiplicador * $i = $resultado" . "<br/>";
//     $i++;
// }

// $resultado = 10 / 2; // 5 quociente
// $resultado = 10 % 2; // 0 resto da divisão

// // Fórmula para ver se é par - 
// $numero = 10;
// $resto = $numero % 2;  // 0
// $par = $resto == 0; // true

// Encontrar os 20 primeiros números pares e exibi-los:

// $cont = 0;
// for ($i = 0; $cont <= 20; $i++) {
//     $resto = $i % 2;
//         if ($i % 2 == 0) {
//             echo "<br> $i = PAR" ;
//             $cont++;
//         }    
// }
// echo "<br/><br/>";

// $cont = 0;
// $i = 0;
// while ($cont <= 20) {
//     $resto = $i % 2;
//     if ($i % 2 == 0) {
//         echo "$i <br/>";
//         $cont++;
//     } $i++; 
//  } echo "<br/><br/>";

//  // Criar uma contagem regressiva de 10 - 0:

// for ($i = 10; $i >= 0; $i--) {
//     echo "$i <br/>";
// }

 // Encontrar os 5 primeiros números primos:

//  $contPrimos = 0;
//  $primos = []; // inicializando array
//  for ($numeroAvaliado = 2; $contPrimos < 5; $numeroAvaliado++) {
//     $penultimoNumero = $numeroAvaliado - 1; 
//     $ehPrimo = true;
//     for ($divisor = 2; $divisor <= $penultimoNumero; $divisor++) {
//         $resto = $numeroAvaliado % $divisor;
//         $divisaoExata = $resto == 0;

//         if ($divisaoExata && $divisor < $penultimoNumero) { 
//             $ehPrimo = false;
//             break; 
//         } 
//     }
//         if ($ehPrimo) {
//             $contPrimos++;
//             $primos[] = $numeroAvaliado; // salvando "$numeroAvaliado" (primo) no array;
//            // $primos = []; // VAZIO - atribuindo vazio no array
//           //  echo "$numeroAvaliado <br/>";
// }
//         }


//  $primos = []; // array || vetor == vazio - Dado Estruturado

//  $primos = [2, 3, 5, 7, 11]; //5 primeiros primos
//  //         0, 1, 2, 3, 4     - indice 

//  for ($i = 0; $i < count($primos); $i++) {
//     $primo = $primos[$i];
//     echo "Primo: $primo" . "<br/>";
//  }

//  for ($i = 0; $i < 5; $i++) {
//     $primo = $primos[$i];
//     echo "Primo: $primo" . "<br/>";
//  }

// Veja se é Palindromo:

 $palavra = "arara";
 $palavraInvertida = []; // // A R A R A
        //                     4 3 2 1 0
        //                     0 1 2 3 4
 
 $tamanho = strlen($palavra) - 1; // 5 - 1 == 4
 $j = 0;

 for ($i = $tamanho; $i >= 0; $i--) {
    $letra_1 = $palavra[$i];
    $letra_2 = $palavra[$j];
    $palavrasIguais = $letra_1 == $letra_2;
    $ehPalindromo = true;
    if (!$ehPalindromo) {
        $ehPalindromo = false;
        break;
    } $j++;
    } if ($ehPalindromo) {
        echo "A $palavra é PALÍNDROMO";
    } else {
        echo "A $palavra não é PALÍNDROMO";
    }

    // Procurar uma palavra no meio da frase e informar se encontrou a mesma:

$palavraProcurada = "curso";                             // c u r s o
                                                //          0 1 2 3 4
$frase = "Escola infoserv curso de PHP.";                // E s c o l a   i n f o  s  e  r  v     c  u  r  s  o     d  e     P  H  P 
                                                //          0 1 2 3 4 5 6 7 8 9 10 11 12 13 14 15 16 17 18 19 20 21 22 23 24 25 26 27
$tamanho = strlen($frase) - 1;
$palavraAchada = [];
$j = 0;

 for ($i = 0; $i <= $tamanho; $i++) {
    $palavrasIguais = 
 }