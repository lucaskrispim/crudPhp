
<?php
  include("includes/Header.php");
?>

<div class="content">
  <?php
    include("Class/ClassConexao.php");
    include("Class/ClassCrud.php");
    $crud = new ClassCrud();
    echo "<h1> Cadastro</h1>";
  ?>
</div>

<?php 
  include("includes/Footer.php");
?>