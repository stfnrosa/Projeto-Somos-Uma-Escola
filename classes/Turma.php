<?php

namespace classes;

class Turma {
    // encapsulamento
    private $id;
    private $descricao;
    private $ano;
    private $vagas;
    private $alunos_matriculados = [];

    // construtor inicializa os atributos
    public function __construct($id, $descricao, $ano, $vagas) {
        $this->id = $id;
        $this->descricao = $descricao;
        $this->ano = $ano;
        $this->vagas = $vagas;
    }

    // acessa o valor privado do atruibuto Id 
    public function getId() {
        return $this->id;
    }

    // acessa o valor privado do atruibuto Descricao
    public function getDescricao() {
        return $this->descricao;
    }

    // acessa o valor privado do atruibuto Ano
    public function getAno() {
        return $this->ano;
    }

    // acessa e verifica o valor privado do atruibuto Vagas 
    public function setVagas($vagas) {
        if ($vagas <= 0) {
            throw new \Exception("A turma deve ter pelo menos uma vaga");
        }
        $this->vagas = $vagas;
    }
    
    // acessa o valor privado do atruibuto AlunosMatriculados
    public function getAlunosMatriculados() {
        return $this->alunos_matriculados;
    }
    
    // método verifica a disponibilidade de vagas e então permite matricular um objeto da classe Aluno na turma
    public function matricularAluno(Aluno $aluno) {
        if (count($this->alunos_matriculados) < $this->vagas) {
            $this->alunos_matriculados[] = $aluno;
            return true;
        } else {
            return false;
        }
    }    
}

