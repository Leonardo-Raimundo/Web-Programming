<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Fundamentos de MySQL com PHP </title> 
  <link rel="stylesheet" href="../css/formata-banco.css">
</head> 

<body> 
 <h1> Fundamentos de Banco de Dados com PHP - Exercício 4 </h1>
 <form action="exercicio4.php" method="post">
  <fieldset>
   <legend> Módulo de cadastro de médicos </legend>
   
   <label class="alinha"> Nome: </label>
   <input type="text" name="nome-medico" placeholder="Forneça o nome do médico a ser cadastrado" autofocus> <br>

   <label class="alinha"> CRM: </label>
   <input type="text" name="crm"> <br>

   <button name="cadastrar-medico"> Cadastrar médico </button>
  </fieldset>

  <fieldset>
   <legend> Módulo de cadastro de pacientes </legend>

   <label class="alinha"> Nome do paciente: </label>
   <input type="text" name="nome-paciente" placeholder="Forneça o nome do paciente para cadastro"> <br>

   <label class="alinha"> Data da internação: </label>
   <input type="date" name="data-internacao"> <br>

   <label class="alinha"> CRM do médico responsável: </label>
   <input type="text" name="crm-atendimento"> <br>

   <button name="cadastrar-paciente"> Cadastrar paciente </button>
  </fieldset>

  <fieldset>
   <legend> Módulo de consulta 1 </legend>
   <label class="alinha"> Forneça o NOME do médico a ser pesquisado: </label>
   <input type="text" name="consulta-nome-medico1"> <br>

   <button name="consultar-medico1"> Mostrar número de pacientes atendidos </button>
  </fieldset>

  <fieldset>
   <legend> Módulo de consulta 2 </legend>
   <label class="alinha"> Forneça o NOME do médico a ser pesquisado: </label>
   <input type="text" name="consulta-nome-medico2"> <br>

   <label class="alinha"> Forneça uma DATA a ser pesquisada: </label>
   <input type="date" name="pesquisa-data"> <br>

   <button name="consultar-medico2"> Mostrar relação de pacientes atendidos </button>
  </fieldset>
 </form> 

 <?php
  require_once "../includes/dados-conexao.inc.php";
  require_once "../includes/conectar.inc.php";
  require_once "../includes/criar-banco.inc.php";
  require_once "../includes/abrir-banco.inc.php";
  require_once "../includes/definir-utf8.inc.php";
  require_once "../includes/criar-tabela1.inc.php";
  require_once "../includes/criar-tabela2.inc.php";

  if(isset($_POST['cadastrar-medico']))
   {
   require_once "../includes/cadastrar-medicos.inc.php";
   }

  if(isset($_POST['cadastrar-paciente']))
   {
   require_once "../includes/cadastrar-pacientes.inc.php";
   }

  if(isset($_POST['consultar-medico1']))
   {
   require_once "../includes/consultar-pacientes.inc.php";
   } 
   
   if(isset($_POST['consultar-medico2']))
   {
   require_once "../includes/excluir-produtos.inc.php";
   }  

  require_once "../includes/desconectar.inc.php";
 ?>
</body> 
</html> 