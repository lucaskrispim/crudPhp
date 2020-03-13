<?php

class ClassConexao{
  public function conectaDB(){
    try{
      $con = new PDO("mysql:host=localhost:3308;dbname=crud","root","");
      return $con;
    }catch (PDOException $erro){
      return $erro -> getMessage();
    }
  }

  

}


?>