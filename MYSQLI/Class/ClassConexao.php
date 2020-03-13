<?php

abstract class ClassConexao{
  protected function conectaDB(){
    try{
      $con = new mysqli("localhost:3308","root","","crud");
      return $con;
    }catch (Exception $erro){
      return $erro -> getMessage();
    }
  }

  

}


?>