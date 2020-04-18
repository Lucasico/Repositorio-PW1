<?php
  class Exemplo{
    public static $atributo1 = 'static';
    public $atributo2 = 'normal';

    public static function metodo1(){
      $rand = rand(1,100);
      echo $rand;
    }

    public function metodo2(){
      echo 'metodo não estatico';
    }
  }
  //atributos e metodos estaticos não precisa de instância de objeto
  //usa-se o operador     ::     para se chamar
  Exemplo::metodo1(); 
  //não podemos utilizar para os estaticos: -> ou $this
 
/*
Para sabermos o momento exato de quando usarmos static ou não, dependerá da 
necessidade de negócio que o seu sistema estará operando naquele momento.
Por exemplo, suponha que temos uma quantidade enorme de dados
em nosso Banco de Dados, e queremos saber a quantidade de produtos que foram 
cadastrados nele. Porém, somente nessa parte do nosso projeto, trabalharemos
com os produtos e suas quantidades, no decorrer da página iremos trabalhar 
com outras classes. Ficaria então dispendioso ter que instanciar toda a classe
produto só para realizar a execução do método que busca a quantidade
de produtos no nosso banco de dados, pois eu utilizaria mais recursos
de memória, usaria mais poder de processamento. Logo, seria mais simples 
eu construir uma função static dentro da minha classe que somente faria essa 
busca do no meu Banco de Dados.
E assim, no momento do projeto que preciso realizar a busca da quantidade de 
produtos cadastrados, eu não precisaria instanciar a classe inteira, e sim,
 usaria somente: Produto::qtdProduto(); 

*/
?>