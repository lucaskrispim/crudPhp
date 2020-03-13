<?php

if(isset($_POST['Id']) ){
  $Id = filter_input(INPUT_POST,'Id',FILTER_SANITIZE_SPECIAL_CHARS);
}else if(isset($_GET['Id'])){
  $Id = filter_input(INPUT_GET,'Id',FILTER_SANITIZE_SPECIAL_CHARS);
}else{
  $Id =0;
}

if(isset($_POST['nome']) ){
  $nome = filter_input(INPUT_POST,'nome',FILTER_SANITIZE_SPECIAL_CHARS);
}else if(isset($_GET['nome'])){
  $nome = filter_input(INPUT_GET,'nome',FILTER_SANITIZE_SPECIAL_CHARS);
}else{
  $nome =" ";
}

if(isset($_POST['telefone']) ){
  $telefone = filter_input(INPUT_POST,'telefone',FILTER_SANITIZE_SPECIAL_CHARS);
}else if(isset($_GET['telefone'])){
  $telefone = filter_input(INPUT_GET,'telefone',FILTER_SANITIZE_SPECIAL_CHARS);
}else{
  $telefone =" ";
}


?>