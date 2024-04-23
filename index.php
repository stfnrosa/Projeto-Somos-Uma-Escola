<?php

use classes\Aluno;
use classes\Turma;
use classes\Matricula;

// Cadastrar alunos
$aluno1 = new Aluno(1, "Pedro", "2000-01-01", "12345678901");
$aluno2 = new Aluno(2, "Renato", "1999-12-02", "98765432109");
$aluno3 = new Aluno(3, "Silvio", "1999-11-03", "45678901234");

// Cadastrar turmas
$turma1 = new Turma(1, "1 Ano", 2020, 30);

// Cadastrar matrículas
$matricula1 = new Matricula(1, 1, "2020-01-15");
$matricula2 = new Matricula(2, 1, "2020-01-16");
$matricula3 = new Matricula(3, 1, "2020-01-17");

// Função para gerar o relatório de chamadas
function relatorioChamadas($turma) {
    echo "Nome\t\tData Nascimento\t\tChamada\n";
    foreach ($turma->alunos_matriculados as $aluno) {
        echo "$aluno->nome\t\t$aluno->data_nascimento\t\t\n";
    }
}

// Testando o sistema
$turma1->matricularAluno($aluno1);
$turma1->matricularAluno($aluno2);
$turma1->matricularAluno($aluno3);

relatorioChamadas($turma1);
