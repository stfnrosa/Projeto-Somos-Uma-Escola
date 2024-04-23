<?php

require_once 'classes/Aluno.php';
require_once 'classes/Turma.php';
require_once 'classes/Matricula.php';

use classes\Aluno;
use classes\Turma;
use classes\Matricula;

// Cadastrando alunos
$aluno1 = new Aluno(1, "Pedro", "2000-01-01", "12345678901");
$aluno2 = new Aluno(2, "Renato", "1999-12-02", "98765432109");
$aluno3 = new Aluno(3, "Silvio", "1999-11-03", "45678901234");

// Cadastrando turmas
$turma1 = new Turma(1, "1 Ano", 2020, 30);

// Cadastrando matrículas
$matricula1 = new Matricula(1, 1, "2024-01-15");
$matricula2 = new Matricula(2, 1, "2024-01-16");
$matricula3 = new Matricula(3, 1, "2024-01-17");

// Função para gerar chamadas
function relatorioChamadas($turma) {
    echo "<h3>Relatório de Chamadas - Turma: {$turma->descricao}</h3>";
    echo "<table border='1'>";
    echo "<tr><th>Nome</th><th>Data de Nascimento</th><th>Chamada</th></tr>";
    foreach ($turma->alunos_matriculados as $aluno) {
        echo "<tr>";
        echo "<td>$aluno->nome</td>";
        echo "<td>$aluno->data_nascimento</td>";
        echo "<td></td>"; 
        echo "</tr>";
    }
    echo "</table>";
}


// Matriculando Aluno
$turma1->matricularAluno($aluno1);
$turma1->matricularAluno($aluno2);
$turma1->matricularAluno($aluno3);

relatorioChamadas($turma1);
