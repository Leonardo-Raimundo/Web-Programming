<?php
 $sql = "CREATE TABLE IF NOT EXISTS $nomeDaTabela1 (
            crm VARCHAR (30) PRIMARY KEY,
            nome_medico VARCHAR(500)) ENGINE=innoDB";
            
$conexao->query($sql) or exit($conexao->error);

