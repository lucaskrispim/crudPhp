<?php

class ClassCrud extends ClassConexao{
  #atributos
  private $crud;
  private $contador;

  #preparação das declarativas
  private function preparedStatements($query,$parametros){
    $this-> countParametros($parametros);
    $this -> crud = $this-> conectaDB() -> prepare($query);
    for($i=1;$i<=$this->contador;$i++){
      $this->crud->bindValue($i,$parametros[$i-1]);
    }
    $this->crud->execute();
  }
  #contador de parâmetros
  private function countParametros($parametros){
    $this -> contador=count($parametros);
  }
}



?>