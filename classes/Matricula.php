<?php

namespace classes;

class Matricula {
    // encapsulamento
    private $id_aluno;
    private $id_turma;
    private $data_matricula;

    // construtor inicializa os atributos
    public function __construct($id_aluno, $id_turma, $data_matricula) {
        $this->id_aluno = $id_aluno;
        $this->id_turma = $id_turma;
        $this->data_matricula = $data_matricula;
    }

    // acessa o valor privado do atruibuto IdAluno
    public function getIdAluno() {
        return $this->id_aluno;
    }

    // acessa o valor privado do atruibuto IdTurma
    public function getIdTurma() {
        return $this->id_turma;
    }

    // acessa o valor privado do atruibuto DataMatricula
    public function getDataMatricula() {
        return $this->data_matricula;
    }

}
