
<?php
  include("includes/Header.php");
?>

<div class="content">
  <?php
    include("Class/ClassConexao.php");
    include("Class/ClassCrud.php");
    $crud = new ClassCrud();
  ?>
  <div class="Resultado">

  </div>
  <div class="Formulario">
    <h1 class="Center">Cadastro</h1>
    <form name="FormCadastro" id="FormCadastro" action="Controllers/ControllerCadastro.php" method="post">
      <div class="FormularioInput">
        Nome: <br>
        <input type="text" id="nome" name="nome">
      </div>
      <div class="FormularioInput">
        Telefone: <br>
        <input type="text" id="telefone" name="telefone">
      </div>  
      <div class="FormularioInput FormularioInput100 Center">
        <input type="submit" value="Cadastrar">
      </div> 
    </form>    
  </div>
  
</div>

<?php 
  include("includes/Footer.php");
?>