<?php
    $nomePaciente   = $conexao->escape_string(trim($_POST['nome-paciente']));
    $dataInternacao = $conexao->escape_string(trim($_POST['data-internacao']));
    $crmMedico      = $conexao->escape_string(trim($_POST['crm-atendimento']));

    $sql = "INSERT $nomeDaTabela2 VALUES(

            null,
            '$nomePaciente',
            '$dataInternacao',
            '$crmMedico')";

    $conexao->query($sql) or exit($conexao->error);

    echo "<p> Dados do(a) paciente cadastrados com sucesso! </p>";

    

