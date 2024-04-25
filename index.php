<?php

require_once 'classes/Aluno.php';
require_once 'classes/Turma.php';
require_once 'classes/Matricula.php';

use classes\Aluno;
use classes\Turma;
use classes\Matricula;

// Função para cadastrar um aluno
function cadastrarAluno($id, $nome, $data_nascimento, $cpf) {
    return new Aluno($id, $nome, $data_nascimento, $cpf);
}

// Função para cadastrar uma turma
function cadastrarTurma($id, $descricao, $ano, $vagas) {
    return new Turma($id, $descricao, $ano, $vagas);
}

// Função para cadastrar uma matrícula
function cadastrarMatriculas($id_aluno, $id_turma, $data_matricula) {
    return new Matricula($id_aluno, $id_turma, $data_matricula);
}

// Cadastrando alunos
$aluno1 = cadastrarAluno(1, "Pedro", "2000-01-01", "12345678901");
$aluno2 = cadastrarAluno(2, "Renato", "1999-12-02", "98765432109");
$aluno3 = cadastrarAluno(3, "Silvio", "1999-11-03", "45678901234");

// Cadastrando turmas
$turma1 = cadastrarTurma(1, "1 Ano", 2020, 30);

// Cadastrando matrículas
$matricula1 = cadastrarMatriculas(1, 1, "2024-01-15");
$matricula2 = cadastrarMatriculas(2, 1, "2024-01-16");
$matricula3 = cadastrarMatriculas(3, 1, "2024-01-17");

// Matriculando Alunos
$turma1->matricularAluno($aluno1);
$turma1->matricularAluno($aluno2);
$turma1->matricularAluno($aluno3);

// Função para gerar chamadas
function relatorioChamadas($turma) {
    echo "<h3>Relatório de Chamadas - Turma: {$turma->getDescricao()}</h3>";
    echo "<table border='1'>";
    echo "<tr><th>Nome</th><th>Data de Nascimento</th><th>Chamada</th></tr>";
    foreach ($turma->getAlunosMatriculados() as $aluno) {
        echo "<tr>";
        echo "<td>{$aluno->getNome()}</td>";
        echo "<td>{$aluno->getDataNascimento()}</td>";
        echo "<td></td>"; 
        echo "</tr>";
    }
    echo "</table>";
}

relatorioChamadas($turma1);

