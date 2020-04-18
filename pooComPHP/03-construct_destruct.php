<?php
	
	class Person{

		private $name = null;
		/*
			Disparado automaticamente ao instanciar
			o objeto em questão, os paramentros na instancia

			do objeto são automaticamente passados para o 
			construtor da class
		*/
		function __construct( $attribute, $value ){
			$this->__set($attribute, $value);
		}
		/*
			Disparado automaticamente ao deixar de
			existir o objeto em questão
		
		*/
		function __destruct(){
			echo 'objeto removido com sucesso';
		}

		function __set( $attribute, $value ){
			$this->$attribute = $value;
		}

		function __get( $attribute ){
			return $this->$attribute;
		}
		
	}

	$person = new Person('name','Joaquim');
	echo "Nome: " . $person->__get('name') . '<br />';
	//removendo o objeto da instancia do objeto
	unset($person);

?>