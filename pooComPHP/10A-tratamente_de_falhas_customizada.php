<?php
  class MinhaClassDeExceptionsCustomizada extends Exception{
    private $erro = '';
    private $codigo;
    public function __construct($erro,$codigo)
    {
      $this->erro = $erro;
      $this->codigo = $codigo;
    }

    public function exibirMensagemErros(){
      $mensagemCompleErro ='Mensagem: ' . $this->erro .
      ' Código de error: ' . $this->codigo;
      return $mensagemCompleErro;
    }
    
  }
  
  try {
    //code...
    throw new MinhaClassDeExceptionsCustomizada("Esse é um erro de teste", 1);
    
  } catch (MinhaClassDeExceptionsCustomizada $e) {
    echo $e->exibirMensagemErros();
  }
  /*
  OBSERVAÇÕES 
  ->Error = dificilmente o programador usa, haja vista que o proprio PHP, lança
  ->Exception = Muito utilizada pelo programador, pois é o mesmo que lança
  ->ClassCustomizadasDeErro = Biblioteca de erros ou feita pelo proprio, muito
  usado
  */
?>