<?php

namespace classes;

class Matricula {
    public $id_aluno;
    public $id_turma;
    public $data_matricula;

    public function __construct($id_aluno, $id_turma, $data_matricula) {
        $this->id_aluno = $id_aluno;
        $this->id_turma = $id_turma;
        $this->data_matricula = $data_matricula;
    }
}