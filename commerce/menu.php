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
        
        ?>
        <!--<li class="nav-item">
          <a class="nav-link" href="#" style="color: white;">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: white;">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" style="color: white;">Disabled</a>
        </li>!-->
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-light" type="submit">Search</button>
      </form>&nbsp;&nbsp;&nbsp;&nbsp;
      
      <a href="?pagina=login" id="user">
        <img src="img/usuario.png" width="25">
      </a> &nbsp;&nbsp;&nbsp;&nbsp;
      <a href="?pagina=carrinho" id="carrinho">
        <div id="contador">
          <strong>
            <?php
            if(isset($_SESSION['carrinho'])){
              echo count($_SESSION['carrinho']);
            } ?>
          </strong>
        </div>
        <img src="img/carrinho.png" width="25">
      </a>&nbsp;&nbsp;
    </div>
  </div>
</nav>