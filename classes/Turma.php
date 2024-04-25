<?php

namespace classes;

class Turma {
    private $id;
    private $descricao;
    private $ano;
    private $vagas;
    private $alunos_matriculados = [];

    public function __construct($id, $descricao, $ano, $vagas) {
        $this->id = $id;
        $this->descricao = $descricao;
        $this->ano = $ano;
        $this->vagas = $vagas;
    }

    public function getId() {
        return $this->id;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function getAno() {
        return $this->ano;
    }

    public function getVagas() {
        return $this->vagas;
    }

    public function getAlunosMatriculados() {
        return $this->alunos_matriculados;
    }

    public function setMatricularAluno(Aluno $aluno) {
        if (count($this->alunos_matriculados) < $this->vagas) {
            $this->alunos_matriculados[] = $aluno;
            return true;
        } else {
            return false;
        }
    }
}

