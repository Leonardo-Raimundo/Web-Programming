<?php
    $nomePesquisado = trim($conexao->escape_string($_POST['consulta-nome-medico1']));
// vamos inicialmente criar uma consulta SQL para recuperar o CRM do médico(a) pesquisado(a). Também, testar se o nome do médico(a) foi encontrado na tabela.
    
    $sql = "SELECT crm FROM $nomeDaTabela1 WHERE nome_medico = '$nomePesquisado'";

    $resultado = $conexao->query($sql) or die($conexao->error);

    if($conexao->affected_rows == 0)
    {
        exit ("<p> O nome do(a) médico(a) pesquisado(a) <span> $nomePesquisado </span> não foi encontrado no banco de dados. </p>");
    }
    else
    {
        //Médico(a) foi encontrado(a) na tabela - vamos recuperar seu crm.
        $registro = $resultado->fetch_array();
        $crm = htmlentities($registro[0], ENT_QUOTES, "UTF-8");

        //finalmente, com o CRM do médico pesquisado em mãos, vamos até a tabela pacientes e contamos o número de pacientes sendo atendidos pelo médico que tem este CRM.
        $sql = "SELECT COUNT(*) FROM $nomeDaTabela2 WHERE crm_medico = '$crm'";
      
        $resultado = $conexao->query($sql) or die($conexao->error);

        $registro = $resultado->fetch_array();
        $quantos = htmlentities($registro[0], ENT_QUOTES, "UTF-8");

        echo "<p><span>$nomePesquisado</span> antede a <span>$quantos</span> pacientes. </p>";
    
    }