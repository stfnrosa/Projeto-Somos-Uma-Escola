<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatório de Chamadas</title>
</head>
<body>
    
    <!-- Formulário para selecionar a turma -->
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="turma">Selecione a turma:</label>
        <select name="turma" id="turma">
            <option value="">Selecione...</option>
            <option value="1">1 Ano</option>
            <option value="2">2 Ano</option>
        </select>
        <input type="submit" value="Gerar Relatório">
    </form>
</body>
</html>

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
$aluno1 = cadastrarAluno(1, "Pedro", "2009-01-01", "12345678901");
$aluno2 = cadastrarAluno(2, "Renato", "2010-12-02", "98765432109");
$aluno3 = cadastrarAluno(3, "Silvio", "2011-11-03", "45678901234");
$aluno4 = cadastrarAluno(4, "Maria", "2009-02-15", "78901234567"); 
$aluno5 = cadastrarAluno(5, "João", "2010-03-20", "89012345678"); 
$aluno6 = cadastrarAluno(6, "Ana", "2011-04-25", "90123456789");

// Cadastrando turmas
$turma1 = cadastrarTurma(1, "1 Ano", 2020, 30);
$turma2 = cadastrarTurma(2, "2 Ano", 2020, 30);


// Cadastrando matrículas turma 1
$matricula1 = cadastrarMatriculas(1, 1, "2024-01-15");
$matricula2 = cadastrarMatriculas(2, 1, "2024-01-16");
$matricula3 = cadastrarMatriculas(3, 1, "2024-01-17");

// Cadastrando matrículas turma 2
$matricula4 = cadastrarMatriculas(4, 2, "2024-01-20"); 
$matricula5 = cadastrarMatriculas(5, 2, "2024-01-21"); 
$matricula6 = cadastrarMatriculas(6, 2, "2024-01-22");

// Matriculando Alunos na turma 1
$turma1->matricularAluno($aluno1);
$turma1->matricularAluno($aluno2);
$turma1->matricularAluno($aluno3);

// Matriculando Alunos na turma 2
$turma2->matricularAluno($aluno4);
$turma2->matricularAluno($aluno5);
$turma2->matricularAluno($aluno6);

// Verifica a turma Selecionada
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $idTurmaSelecionada = $_POST["turma"];

    if ($idTurmaSelecionada != null) {
        $turmaSelecionada = ($idTurmaSelecionada == 1) ? $turma1 : $turma2;

        // Função para gerar o relatório de chamadas
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

        // Gerar relatório de chamadas para a turma selecionada
        relatorioChamadas($turmaSelecionada);
        echo "<br><button onclick='window.print()'>Imprimir Relatório</button>";
    }
}







