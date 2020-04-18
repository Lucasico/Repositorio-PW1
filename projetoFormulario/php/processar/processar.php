<?php
function __e($input) {
  $input = trim($input);
  $input = stripslashes($input);
  $input = htmlspecialchars($input);
  return $input;
}

function limparVetor($varPost) {
  $arrayLimpo = [];
  foreach ($varPost as $indice => $valor) {
      $arrayLimpo[$indice] = $valor;
  }
  return $arrayLimpo;
}

function verificarPostEnviado($dadosForm){
  if($_SERVER['REQUEST_METHOD'] == 'POST'){
     $dados = limparVetor($dadosForm);
     $verificaDados = verificaError($dados); 
     return $verificaDados;
  }else{
    header('Location: ../../index.php');
  }
}

function verificaError($dadosForm){
  
  $requerente = $dadosForm['requerente'];
  $matricula = $dadosForm['numMatricula'];
  $naturalidade = $dadosForm['naturalidade'];
  $filiacao = $dadosForm['filiacao'];
  $dtNascimento = $dadosForm['dtNascimento'];
  $curso = $dadosForm['curso'];
  $periodo = $dadosForm['periodo'];
  $fone01 = $dadosForm['fone01'];
  $email = $dadosForm['email'];
  $turno = $dadosForm['turno'] = ( isset($_POST['turno']) ) ? $_POST['turno'] : null;
  $requerer = $dadosForm['requerer']= ( isset($_POST['requerer']) ) ? $_POST['requerer'] : null;
  $especificar = $dadosForm['espeficar'];
  $justificar = $dadosForm['justificar'];
  $declaro = $dadosForm['declaroConhecer']= ( isset($_POST['declaroConhecer']) ) ? $_POST['declaroConhecer'] : null;
  $assEstudantil = $dadosForm['assEstudantil'] = ( isset($_POST['assEstudantil']) ) ? $_POST['assEstudantil'] : null;
  $biblioteca = $dadosForm['biblioteca'] = ( isset($_POST['biblioteca']) ) ? $_POST['biblioteca'] : null;
  
  $retornoRequerente = verificaRequerente($requerente);
  $retornoMatricula = verificaMatricula($matricula);
  $retornoNaturalidade = verificaNaturalidade($naturalidade);
  $retornoFiliacao = verificaFiliacao($filiacao);
  $retornoDtNascimento = verificaNascimento($dtNascimento);
  $retornoCurso = verificaCurso($curso);
  $retornoPeriodo = verificaPeriodo($periodo);
  $retornoTurno = verificaTurno($turno);
  $retornoFone = verificaFone($fone01);
  $retornoEmail = verificaEmail($email);
  $retornoRequerer = verificaRequerer($requerer);
  $retornoEspecificar = verificarEspecificar($requerer, $especificar);
  $retornoJustificar = verificarJustificar($requerer, $justificar);
  $retornoDeclara = verificaDeclara($declaro);
  $retornoAssEstudantil = verificaAssEstudantil($assEstudantil);
  $retornoBiblioteca = verificaBiblioteca($biblioteca);


  $arrayErros['ERROS'] = array(
   "ERRO00" => $retornoRequerente,
   "ERRO01" => $retornoMatricula,
   "ERRO02" => $retornoNaturalidade,
   "ERRO03" => $retornoFiliacao,
   "ERRO04" => $retornoDtNascimento,
   "ERRO05" => $retornoCurso,
   "ERRO06" => $retornoPeriodo,
   "ERRO07" => $retornoTurno,
   "ERRO08" => $retornoFone,
   "ERRO09" => $retornoEmail,
   "ERRO10" => $retornoRequerer,
   "ERRO11" => $retornoEspecificar,
   "ERRO12" => $retornoJustificar,
   "ERRO13" => $retornoDeclara,
   "ERRO14" => $retornoAssEstudantil,
   "ERRO15" => $retornoBiblioteca,
  );

  return $arrayErros;
  die();
}

function verificaRequerente($requerente){
  if(empty($requerente)){
    return 'CAMPO REQUERENTE É OBRIGATÓRIO!';
  }
  return NULL;
}

function verificaMatricula($matricula){
  if(empty($matricula)){
    return 'CAMPO MATRÍCULA É OBRIGATÓRIO!';
  }

  $tipo = is_numeric($matricula);

  if(!$tipo){
    return 'CAMPO MATRÍCULA DEVE SER APENAS NUMÉRICO';
  }
  return NULL;
}

function verificaNaturalidade($naturalidade){
  if(empty($naturalidade)){
    return 'CAMPO NATURALIDADE É OBRIGATÓRIO!';
  }
  return NULL;
}

function verificaFiliacao($filiacao){
  if(empty($filiacao)){
    return 'CAMPO FILIACÃO É OBRIGATÓRIO!';
  }
  return NULL;
}

function verificaNascimento($nascimento){
  if(empty($nascimento)){
    return 'CAMPO DATA DE NASCIMENTO É OBRIGATÓRIO!';
  }
  return NULL;
}

function verificaCurso($curso){
  if(empty($curso)){
    return 'CAMPO CURSO É OBRIGATÓRIO!';
  }
  return NULL;
}

function verificaPeriodo($periodo){
  if(empty($periodo)){
    return 'CAMPO PERÍODO É OBRIGATÓRIO!';
  }

  $tipo = is_numeric($periodo);

  if(!$tipo){
    return 'CAMPO PERÍODO DEVE SER APENAS NUMÉRICO';
  }
  return NULL;
}

function verificaTurno($turno) {
  if(empty($turno)){
    return 'CAMPO TURNO É OBRIGATÓRIO!';
  }
  return NULL;
}

function verificaFone($fone){
  if(empty($fone)){
    return 'CAMPO TELEFONE-01 É OBRIGATÓRIO!';
  }

  $tipo = is_numeric($fone);

  if(!$tipo){
    return 'CAMPO TELEFONE-01 DEVE SER APENAS NUMÉRICO';
  }
  return NULL;
}

function verificaEmail($email){
  if(empty($email)){
    return 'CAMPO EMAIL É OBRIGATÓRIO!';
  }
  return NULL;
}

function verificaRequerer($requerer){
  if(empty($requerer)){
    return 'CAMPO REQUERER É OBRIGATÓRIO!';
  }
  return NULL;
}

function verificarEspecificar($requerer, $especificar){
  if(
      ($requerer == 'segundaVia' || $requerer == 'Declaração' || $requerer == 'Diploma'
      || $requerer == 'Segunda chamada' || $requerer == 'Trancamento de disciplina'
      || $requerer == 'Validação de conhecimento' || $requerer == 'outro') && empty($especificar)
  ){
    return 'CAMPO ESPECIFICAR É OBRIGATÓRIO!';
  }
  return NULL;
}

function verificarJustificar($requerer, $justificar){
  if(
      ($requerer == 'Matricula fora do prazo' || $requerer == 'Colação de grau'
      || $requerer == '') && empty($justificar)
  ){
    return 'CAMPO JUSTIFICAR É OBRIGATÓRIO!';
  }
  return NULL;
}

function verificaDeclara($declaro){
  
  if( empty($declaro) ){
    return 'CAMPO DECLARO É OBRIGATÓRIO!';
  }
  return NULL;
}

function verificaAssEstudantil($assistencia){
  if( empty($assistencia) ){
    return 'CAMPO DE VISTO DE ASSISTÊNCIA É OBRIGATÓRIO!';
  }
  return NULL;
}

function verificaBiblioteca($biblioteca){
  if( empty($biblioteca) ){
    return 'CAMPO DE VISTO DA BIBLIOTECA É OBRIGATÓRIO!';
  }
  return NULL;
}
?>