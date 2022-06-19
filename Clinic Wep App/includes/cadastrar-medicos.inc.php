<?php
 $crm        = $conexao->escape_string(trim($_POST['crm']));
 $nomeMedico = $conexao->escape_string(trim($_POST['nome-medico']));
 

 $sql = "INSERT $nomeDaTabela1 VALUES(
          '$crm',
          '$nomeMedico')";

 $conexao->query($sql) or exit($conexao->error);

 echo "<p> Dados do(a) médico(a) cadastrados com sucesso! </p>";

    

