<?php

namespace classes;

class Aluno {
    // encapsulamento
    private $id;
    private $nome;
    private $data_nascimento;
    private $cpf;

    // construtor inicializa os atributos
    public function __construct($id, $nome, $data_nascimento, $cpf) {
        $this->id = $id;
        $this->nome = $nome;
        $this->data_nascimento = $data_nascimento;
        $this->cpf = $cpf;
    }

    // acessa o valor privado do atruibuto Id 
    public function getId() {
        return $this->id;
    }

    // acessa o valor privado do atruibuto Nome
    public function getNome() {
        return $this->nome;
    }

    // acessa o valor privado do atruibuto DataNascimento
    public function getDataNascimento() {
        return $this->data_nascimento;
    }

    // acessa o valor privado do atruibuto Cpf
    public function getCpf() {
        return $this->cpf;
    }
}