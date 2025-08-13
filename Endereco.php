<?php

class Endereco {
    public $bairro = "";
    public $logradouro = "";
    public $complemento = "";
    public $numero = "";
    public $cidade = "";
    public $estado = "";
    public $pais = "";
    public $cep = "";
    public $tipoEndereco = "";

    public function obterBairro () {
        return $this->bairro;
    }
    public function editarBairro ($bairro) {
        return $this->bairro = $bairro;
    }
    public function obterLogradouro () {
        return $this->logradouro;
    }
    public function editarLogradouro ($logradouro) {
        return $this->logradouro = $logradouro;
    }
    public function obterComplemento () {
        return $this->complemento;
    }
    public function editarComplemento ($complemento) {
        return $this->complemento = $complemento;
    }
    public function obterNumero () {
        return $this->numero;
    }
    public function editarNumero ($numero) {
        return $this->numero = $numero;
    }
    public function obterCidade () {
        return $this->cidade;
    }
    public function editarCidade ($cidade) {
        return $this->cidade = $cidade;
    }
    public function obterEstado () {
        return $this->estado;
    }
    public function editarEstado ($estado) {
        return $this->estado = $estado;
    }
    public function obterPais () {
        return $this->pais;
    }
    public function editarPais ($pais) {
        return $this->pais = $pais;
    }
    public function obterCep () {
        return $this->cep;
    }
    public function editarCep ($cep) {
        return $this->cep = $cep;
    }
    public function obterTipoEndereco () {
        return $this->tipoEndereco;
    }
    public function editarTipoEndereco($tipoEndereco) {
        return $this->tipoEndereco = $tipoEndereco;
    }
}