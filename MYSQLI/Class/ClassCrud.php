<?php

class ClassCrud extends ClassConexao{
  #atributos
  private $crud;
  private $contador;
  private $resultado;

  #preparação da declarativas
  private function preparedStatements($query,$tipos,$parametros){
    $this->countParametros($parametros);
    $con = $this->conectaDB();
    $this->crud=$con->prepare($query);

    if($this->contador>0){
      $callParametros=array();
      foreach($parametros as $key => $parametros){
        $callParametros[$key] = &$parametros[$key]
      }
      array_unshift($callParametros,$tipos);
      call_user_func_array(array($this->crud,'blind_param'),$callParametros);

    }
    $this->crud->execute();
    $this->resultado=$this->crud->get_result();
  }
}

?>