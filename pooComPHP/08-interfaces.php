<?php
/*
  Definem os métodos cujos as classes devem obrigatoriamente 
  implementar numa espécie de contrato, fazendo com que as classes que implementem
  essas interfaces tenham obrigatoriamente essa implementações
*/
//- a interface não implementa o método, ela apenas define a assinatura dos métodos
//- eles devem ser obrigatoriamente os metodos como public
//--------------------------------------
interface EquipamentoEletronicoInterface{
  public function ligar();
  public function desligar();

}

class Geladeira implements EquipamentoEletronicoInterface{

  public function ligar(){
    echo 'ligar';
  }

  public function desligar(){
    echo 'desligar';
  }

  public function abrirPorta(){
    echo 'Abrir porta';
  }

}

class Tv implements EquipamentoEletronicoInterface{
  public function trocarCanal(){
    echo 'Trocar canal';
  }

  public function ligar()
  {
    echo 'ligar';
  }

  public function desligar()
  {
    echo 'desligar';
  }

}

//-----------------------------------------------
//implementado mais de uma interface nas classes

interface MamiferoInterface{
  public function respirar();
}

interface TerrestreInterface{
  public function andar();
}

interface AquaticoInterface{
  public function nadar();
}

class Humanos implements MamiferoInterface, TerrestreInterface{
  public function andar()
  {
    
  }

  public function respirar()
  {
    
  }
}

class Baleia implements MamiferoInterface, AquaticoInterface{
  public function respirar()
  {
    
  }

  public function nadar()
  {
    
  }
}

//------------------------------------------
//interfaces com heranças

interface AnimalInterface{
  public function comer();
}

interface AveInterface extends AnimalInterface{
  public function voar();
}

class Papagaio implements AveInterface{
  public function comer(){

  }

  public function voar(){

  }
  
}

?>