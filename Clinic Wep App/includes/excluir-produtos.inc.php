<?php
 $quantidadeDeReferencia = trim($conexao->escape_string($_POST['exclui-produto']));
 
 $sql = "DELETE FROM $nomeDaTabela WHERE estoque < $quantidadeDeReferencia";

 $conexao->query($sql) or die($conexao->error);

 if($conexao->affected_rows == 0)
  {
  echo "<p> Nenhum registro foi excluído porque todos os produtos cadastrados possuem quantidade em estoque acima ou igual ao valor de referência fornecido. </p>";
  }
 else
  {
   echo "<p> Produtos excluídos com sucesso. Quantidade excluída igual a <span> $conexao->affected_rows </span> registros. </p>";
  }