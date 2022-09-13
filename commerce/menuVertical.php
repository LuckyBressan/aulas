<?php
  $sql = "SELECT * from categorias where categoria_pai is null ";
  $categoria = $conn->prepare($sql);
  $categoria->execute();
  $i = 0;
  $x = 1;


?>


<div class="accordion accordion-flush" id="accordionFlushExample">
  <?php 
    foreach($categoria as $linha) {
      ?>
        <div class="accordion-item">
          <h2 class="accordion-header" id="flush-heading<?php echo $cont[$i]; ?>">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse<?php echo $cont[$i]; ?>" aria-expanded="false" aria-controls="flush-collapse<?php echo $cont[$i]; ?>">
              <?php echo $linha['descricao']; ?>
            </button>
          </h2>
        </div>
        <?php 
          $slv = "SELECT * from categorias where categoria_pai = :cat";
          $categoria_f = $conn->prepare($slv);
          $categoria_f->execute(array('cat'=>$linha['id']));
          foreach($categoria_f as $linha_f) {
            ?>
              <div id="flush-collapse<?php echo $cont[$i]; ?>" class="accordion-collapse collapse" aria-labelledby="flush-heading<?php echo $cont[$i]; ?>" data-bs-parent="#accordionFlushExample">
                <a class="link link-dark" href="?pagina=listagem&id=<?php echo $linha_f['id'] ?>"><div class="accordion-body"><?php echo $linha_f['descricao'] ?></div></a>
              </div>
            <?php
            $x=$x+1;
          }
        ?>
      <?php
      $i= $i+1;
    }
  ?>
</div>
<br>
<a href="?pagina=logout" class="btn btn-danger" id="logar">Logout</a>



<!--<form method="POST">
  <input type="submit" value="Logout" class="btn btn-danger" id="logout">
</form>



nav class="nav flex-column">
  <a class="nav-link active" aria-current="page" href="#">Eletrônicos</a>
  <a class="nav-link" href="#">Link</a>
  <a class="nav-link" href="#">Link</a>
  <a class="nav-link disabled">Disabled</a>
</nav>!-->