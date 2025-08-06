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

//  $palavra = "arara";
//  $palavraInvertida = []; // // A R A R A
//         //                     4 3 2 1 0
//         //                     0 1 2 3 4
 
//  $tamanho = strlen($palavra) - 1; // 5 - 1 == 4
//  $j = 0;

//  for ($i = $tamanho; $i >= 0; $i--) {
//     $letra_1 = $palavra[$i];
//     $letra_2 = $palavra[$j];
//     $palavrasIguais = $letra_1 == $letra_2;
//     $ehPalindromo = true;
//     if (!$ehPalindromo) {
//         $ehPalindromo = false;
//         break;
//     } $j++;
//     } if ($ehPalindromo) {
//         echo "A $palavra é PALÍNDROMO" . "<br/>";
//     } else {
//         echo "A $palavra não é PALÍNDROMO" . "<br/>";
//     }

//     // Procurar uma palavra no meio da frase e informar se encontrou a mesma:

// $palavraProcurada = "curso";
// $frase = "Escola infoserv curso de PHP."; // curso

// $tamanho = strlen($frase) - 1; // 28
// $tamanhoPalavra = strlen($palavraProcurada) - 1; // 28

// $tamanhoReal = $tamanho - $tamanhoPalavra;

// $palavraEncontrada = false;

// // percorre a frase toda, letra a letra
// for ($i = 0; $i <= $tamanhoReal; $i++) {

//     $letrasIguais = true;
    
//     // percorre toda a palavra, letra a letra
//     for ($j = 0; $j <= $tamanhoPalavra; $j++) {
        
//         $indiceAtualDaFrase = $i + $j;
//         // $k = $i + $j;

//         $letraAtualDaFrase = $frase[$indiceAtualDaFrase];
//         $letraAtualDaPalavra = $palavraProcurada[$j];

//         if ($letraAtualDaFrase != $letraAtualDaPalavra) {
//              $letrasIguais = false;
//             break;
//         } 

//     }

//     if ($letrasIguais) {
//         $palavraEncontrada = true;
//         break;
//     } 
// }

// if ($palavraEncontrada) {
//     echo "Encontrou a palavra procurada.";
// } else {
//     echo "Não Encontrou.";
// } echo "<br/>";

// // // Algumas funções em PHP: - php.net
// // count(); // obtem o tamanho de um array/objeto
// // strlen(); // obtem o tamanho de uma string
// // substr(); // obtem uma parte de uma string 

// //FUNÇÃO:
// $numero = 5;
// tabuada($numero); echo "<br/>";
// tabuada(3);

// function tabuada($multiplicador) {
//      for ($i = 0; $i <= 10; $i++) {
//          $resultado = $multiplicador * $i;
//          echo "$multiplicador * $i = $resultado" . "<br/>";
// }
// }

// CALCULADORA:

$valor1 = 10;
$valor2 = 5;
$operador = "+";

echo calculadora($valor1, $operador, $valor2);

function calculadora($valor1, $operador, $valor2) {
    switch ($operador) {
    case "+";
        $resultado = somar($valor1, $valor2);
        break;
    case "-";
        $resultado = subtrair($valor1, $valor2);
        break;
    case "*";
        $resultado = multiplicar($valor1, $valor2);
        break;
    case "/";
        $resultado = dividir($valor1, $valor2);
        break;
    default;
        echo "Operador Inválido.";
        $resultado = 0;
        break;
}
}

$resultado = 0;
function somar($valor1, $valor2) {
     $resultado = $valor1 + $valor2;
     return $resultado;
}
function subtrair($valor1, $valor2) {
     $resultado = $valor1 - $valor2;
     return $resultado;
}
function multiplicar($valor1, $valor2) {
     $resultado = $valor1 * $valor2;
     return $resultado;
}
function dividir($valor1, $valor2) {
     $resultado = $valor1 / $valor2;
     return $resultado;
}

echo calculadora($valor1, $operador, $valor2);

/** Calendário: usuario vai infomar uma data, validar essa data, caso for uma data inválida,
 * retornar a próxima data correta.
 * Ex.; 29/02/2025 => 01/03/2025
 * Ex.; 31/04/2025 => 01/05/2025
 * 
 * Função PHP: explode;
 */  // date ("d/m/Y")

// $data = "29/02/2025";
// $dataArray = explode("/", $data);

// $dia = $dataArray[0];
// $mes = $dataArray[1];
// $ano = $dataArray[2];

//  $diasPorMes = 
//  [  1 => 31, 2 => 28, 3 =>31, 4 => 30, 5 => 31, 6 => 30,
//     7 => 31, 8 => 31, 9 => 30, 10 => 31, 11 => 30, 12 => 31 ];

//     if (($ano % 4 == 0 && $ano % 100 != 0) || ($ano % 400 == 0) ) {
//     $diasPorMes[2] = 29;
// }

//     if ($mes < 1 || $mes > 12 || $dia < 1 || $dia > $diasPorMes[$mes]){

//         $dia++;

//     if ($dia > $diasPorMes[$mes]) {

//         $dia = 1;
//         $mes++;

//     if ($mes > 12) {

//         $mes = 1;
//         $ano++;

//             }
//         }

//     }
//     echo "Data válida: $dia/$mes/$ano";

//         echo "<br>";

// $alfa = ["A", "B", "C", "D", "E"];
// $numeros = [10, 20, 30, 40, 50];

// for ($i = 0; $i < count($alfa); $i++) {
//     for ($j = $i + 1; $j < count($alfa); $j++) {
        
//     if ($alfa[$i] < $alfa[$j]) {
//             $temp = $alfa[$i];
//             $alfa[$i] = $alfa[$j];
//             $alfa[$j] = $temp;
//         }
//     }
// }

// for ($i = 0; $i < count($numeros); $i++) {
//     for ($j = $i + 1; $j < count($numeros); $j++) {

//     if ($numeros[$i] < $numeros[$j]) {
//             $temp = $numeros[$i];
//             $numeros[$i] = $numeros[$j];
//             $numeros[$j] = $temp;
//         }
//     }
// }

// echo "Alfabeto: ";
// for ($i = 0; $i < count($alfa); $i++) {
//     echo $alfa[$i];
//     if ($i < count($alfa) - 1) echo ", ";
// }
//     echo "<br>";

// echo "Números: ";
// for ($i = 0; $i < count($numeros); $i++) {
//     echo $numeros[$i];
//     if ($i < count($numeros) - 1) echo ", ";
// }

//  /**
//   * Ordenar os arrays abaixo em ordem decrescente (maior para menor):
//   * $alfa = ["A", "B", "C", "D", "E"];
//   * $numeros = [10, 20, 30, 40, 50];
//   * Saida esperada: E, D, C, B, A
//   * 50, 40, 30, 20, 10

//   * Utilizar somente laço FOR. Não utilizar funcoes prontas do PHP para ordenacao.
//   */

// $dados= []; // 0
// count($dados); // 0
// ordenarArray($dados); // asc
// ordenarArray($dados, "asc");
// ordenarArray($dados, "desc");
// ordenarArray($dados, "xyz"); // troca para asc

// function ordenarArray(array $dados, string $ordem = "asc") {

//     if ($ordem != "asc" && $ordem != "desc") {
//         $ordem = "asc";
//     }

//     $tam = count($dados); // 0

//     if ($tam == 0) {
//         echo "o array informado esta vazio.";
//         return;
//     }

//     for($i = 0; $i < $tam - 1; $i++) {

//         for($j = 0; $j < $tam - 1; $j++) {

//             $proximoIndice = $j + 1;
//             $numeroAtual = $dados[$j];
//             $proxNumero = $dados[$proximoIndice];

//             if ($ordem == "desc") {
//                 if ($numeroAtual < $proxNumero) {
//                     $aux = $numeroAtual;
//                     $numeroAtual = $proxNumero;
//                     $proxNumero = $aux;

//                     $dados[$j] = $numeroAtual;
//                     $dados[$proximoIndice] = $proxNumero;
//                 }
//             } else {
//                 if ($numeroAtual > $proxNumero) {
//                     $aux = $numeroAtual;
//                     $numeroAtual = $proxNumero;
//                     $proxNumero = $aux;

//                     $dados[$j] = $numeroAtual;
//                     $dados[$proximoIndice] = $proxNumero;
//                 }
//             }


//         } // fim FOR $j
//     } // fim FOR $i

//     return $dados;
// } // fim funcao

// function exibirDados(array $dados) {
//     $tam = count($dados);

//     for ($i = 0; $i < $tam; $i++) {
//         echo "Array ordenado: $dados[$i]" . "<br>";
//     }

//     echo "<br>";
// }

// $alfa = ["A", "B", "C", "D", "E"];

// // $numeros = [2,10, 20, 30, 60, 5,40, 50, 1, 500];

// /**
//  * Adicionar novo parametro na funcao de ordenarArray
//  * sendo ele $ordem. ASC ou DESC
//  * Se chamar a funcao com ASC => retornar os dados em crescente(asc)
//  * menor => maior
//  * Se chamar a funcao com DESC => retornar os dados em decrescente(desc)
//  * maior => menor
//  */

// $numerosOrdenados = ordenarArray($numeros);
// exibirDados($numerosOrdenados);
// $numerosOrdenados = ordenarArray($numeros, "desc");
// exibirDados($numerosOrdenados);
// $numerosOrdenados = ordenarArray($numeros);
// exibirDados($numerosOrdenados);


 /**
  * Somar os arrays/vetores abaixo:
  * $numerosA = [10, 20, 30, 40, 50];
  * $numerosB = [5, 45, 37, 2, 25];
  *
  * Saida esperada: $soma[15, 65, 67, 42, 75]

  * Utilizar somente laço FOR. Não utilizar funcoes prontas do PHP.
  */

// $soma = [];
// $numerosA = [10, 20, 30, 40, 50];
// $numerosB = [5, 45, 37, 2, 25];

// for($i=0; $i < count($numerosA); $i++) {

//     $somaElementos =  $numerosA[$i] + $numerosB[$i];

//     $soma[] = $somaElementos;
// }

// // $soma[15, 65, 67, 42, 75]
// for($i=0; $i < count($soma); $i++) {

//     echo $soma[$i] . "<br>";
// }

// echo "<br>";
  

//   /**
//   * Multiplicar os arrays/vetores abaixo:
//   * $numerosA = [10, 20, 30, 40, 50];
//   * $numerosB = [5, 45, 37, 2, 25];
//   *
//   * Saida esperada: $produto[50, 900, 1110, 80, 1250]

//   * Utilizar somente laço FOR. Não utilizar funcoes prontas do PHP.
//   */
// $produto = []; // 0;
// $numerosA = [10, 20, 30, 40, 50];
// $numerosB = [5, 45, 37, 2, 25];

// for($i=0; $i < count($numerosA); $i++) {

//     $multiplicaElementos =  $numerosA[$i] * $numerosB[$i];

//     $produto[] = $multiplicaElementos;         
// }

// // $produto[50, 900, 1110, 80, 1250]
// for($i=0; $i < count($produto); $i++) {

//     echo $produto[$i] . "<br>";
// }

// echo "<br>";

// /**
//   * Decompor um valor informado pelo usuario em reais
//   * informando quantas notas de cada representam esse valor. 
//   * $notas = [2, 5, 10, 20, 50, 100, 200];
//   * $valor = 170;
//   *
//   * Saida esperada: 1 nota de 100, 1 nota de 50 e 1 nota de 20. 
//   *
//   * $totalNotas["100"] += 1;
//   * Não utilizar funcoes prontas do PHP.
//   */

  // => - associação de um array
$totalNotas = [
    "200" => 0,
    "100" => 0,
    "50" => 0,
    "20" => 0,
    "10" => 0,
    "5" => 0,
    "2" => 0,
];
/*
$totalNotas["200"] += 1;
$totalNotas["100"] += 1;
*/
$valor = 170;
$notas = [200, 100, 50, 20, 10, 5, 2];

$tamanhoArray = count($notas); // 7

for($i = 0; $i < $tamanhoArray; $i++) {
    $nota = $notas[$i];

    if ($valor >= $nota) {
        $quantidade = (int) ($valor / $nota); // 1.2 => 1
        $valor -= $nota * $quantidade;
        $totalNotas[$nota] += $quantidade;
    }

    if ($valor == 0) {
        break;
    }
}

foreach ($totalNotas as $notas => $quantidade) { // (array - indice - conteúdo do indice) - foreach usar em array associativo
    // 1 nota de 100;
    echo "$quantidade nota(s) de $notas. <br>";
}

// php.net