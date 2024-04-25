<?php

namespace classes;

class Aluno {
    public $id;
    public $nome;
    public $data_nascimento;
    public $cpf;

    public function __construct($id, $nome, $data_nascimento, $cpf) {
        $this->id = $id;
        $this->nome = $nome;
        $this->data_nascimento = $data_nascimento;
        $this->cpf = $cpf;
    }

    public function getId() {
        return $this->id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getDataNascimento() {
        return $this->data_nascimento;
    }

    public function getCpf() {
        return $this->cpf;
    }
}