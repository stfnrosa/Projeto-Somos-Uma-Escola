<?php

namespace classes;

class Turma {
    public $id;
    public $descricao;
    public $ano;
    public $vagas;
    public $alunos_matriculados = [];

    public function __construct($id, $descricao, $ano, $vagas) {
        $this->id = $id;
        $this->descricao = $descricao;
        $this->ano = $ano;
        $this->vagas = $vagas;
    }

    public function matricularAluno($aluno) {
        if (count($this->alunos_matriculados) < $this->vagas) {
            $this->alunos_matriculados[] = $aluno;
            return true;
        } else {
            return false;
        }
    }
}