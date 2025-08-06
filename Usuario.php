<?php

class Usuario {
    public $id = 0;
    public $login = "";
    public $senha = "";
    public $nomeUsuario = "";
    public $emailRecuperacao = "";
    public $status = true;
    public $tipoPerfil = "";
    public $permissoes = "";
    public $logado = false;

    public function logar($login, $senha) {
        $seed = "Ab4cax1#456B3nt0"; // phising

        $this->login = $login;
        $this->senha = $senha . $seed;

        $senhaCrypto = hash('sha256', $this->senha);

        // obter a senha do banco pelo $login
        $senhaBanco = "a0ec0460fc75a1eea654e7a06b4b6addb3a2f8a4dfc8cd3ea9f2356d644ab44f";
        $senhasIguais = $senhaCrypto === $senhaBanco;

        if ($senhasIguais) {
            $this->logado = true;
            //REDIRECT HOME / PÁGINA INICIAL
        } else {
            echo "redirect login";
        }

    }

    public function deslogar() {
        $this->logado = false;
    }

    public function ativarUsuario($id, $status) {
        $this->id = $id;
        $this->status = true;
    }

    public function desativarUsuario($id, $status) {
        $this->id = $id;
        $this->status = false;
    }

    public function recuperarSenha ($emailRecuperacao) {
        $this->emailRecuperacao = $emailRecuperacao;
    }

    public function alterarTipoPerfil ($id, $tipoPerfil) {
        $this->id = $id;
        $this->tipoPerfil = $tipoPerfil;
    }

    public function alterarPermissoes ($id, $permissoes) {
        $this->id = $id;
        $this->permissoes = $permissoes;
    }
}
