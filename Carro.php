<?php

class Carro {
// propriedade
    public $modelo = "";
    public $marca = "";
    public $ano = "";
    public $cor = "";
    public $carcaca = "";
    public $motor = "";
    public $cambio = "";
    public $kmRodado = 0;

    public $ligado = false; 
    public $nivelTanque = false; 

// método - TIPO do CARRO
    public function identificarCarro($modelo, $marca, $ano) {
        $this->modelo = $modelo;
        $this->marca = $marca;
        $this->ano = $ano;
    }
    public function verCarro($cor, $carcaca) {
        $this->cor = $cor;
        $this->carcaca = $carcaca;
    }
    public function avaliarCarro($motor, $cambio, $kmRodado) {
        $this->motor = $motor;
        $this->cambio = $cambio;
        $this->kmRodado = $kmRodado;
    }

    // FUNCIONAMENTO do CARRO
    public function verificarGasolina() {
        $this->nivelTanque = true; // com gasolina
        $this->nivelTanque = false; // sem gasolina    
     }
    public function ligarDesligar() {
        $this->ligado = true; // ligado
        $this->ligado= false; // desligado
     }

     public function rodar() {
        $podeRodar = $this->nivelTanque = true && $this->ligado = true; 
        
        if($podeRodar) {
        echo "O carro pode rodar...";
        } else {
            echo "Verigue se o está desligado e ou se tem combustível.";
        }
     }
}
     
$objCarro = new Carro();
$objCarro->ligarDesligar();
