<?php
  $sql = "SELECT * from categorias where categoria_pai is null ";
  $categoria = $conn->prepare($sql);
  $categoria->execute();
  $i = 0;


?>


<div class="accordion accordion-flush" id="accordionFlushExample">
  <?php 
    foreach($categoria as $linha) {
      if($i!=0) {
        $i++;
      }
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
              <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body"><?php echo $linha_f['descricao'] ?></div>
              </div>
            <?php 
          }
        ?>
      <?php
    }
  ?>

    
  
  
  
  
  
  
  
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
        Móveis
      </button>
    </h2>
    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body"></div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
        Roupas
      </button>
    </h2>
    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body"></div>
    </div>
  </div>
</div>



<!--<nav class="nav flex-column">
  <a class="nav-link active" aria-current="page" href="#">Eletrônicos</a>
  <a class="nav-link" href="#">Link</a>
  <a class="nav-link" href="#">Link</a>
  <a class="nav-link disabled">Disabled</a>
</nav>!-->