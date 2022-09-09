<nav class="navbar navbar-expand-lg" style="background-color: #2a6f97;">
  <div class="container-fluid">
    <a class="navbar-brand" href="/git/aulas/paginaprincipal/indexrefatorado.php" style="color: white;">Página Principal</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <?php
            $sql = "SELECT * from paginas where categoria = 'menu'";
            $menu = $conn->prepare($sql);
            $menu->execute();
            while ($linha = $menu->fetch()) {
              echo "<li class='nav-item'>";
                  echo "<a class='nav-link active' aria-current='page' href='?pagina={$linha['url']}' style='color: white;'>{$linha['label']}</a>";
              echo "</li>";
            }
        
        ?>S
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-light" type="submit">Search</button>
      </form>&nbsp;&nbsp;&nbsp;&nbsp;
      
      <a href="?pagina=login" id="user">
        <img src="img/usuario.png" width="25">
      </a> &nbsp;&nbsp;&nbsp;&nbsp;
      <a href="?pagina=carrinho" class="position-relative carrinho">
        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-light">
          <strong style="color:#2a6f97">
            <?php
            if(isset($_SESSION['carrinho'])){
              echo count($_SESSION['carrinho']);
            } else {
              echo "0";
            } ?>
          </strong>
          </span>
        <img src="img/carrinho.png" width="25">
      </a>&nbsp;&nbsp;
    </div>
  </div>
</nav>