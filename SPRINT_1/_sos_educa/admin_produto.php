<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Product Page - Admin HTML Template</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
    <!-- https://fonts.google.com/specimen/Roboto -->
    <link rel="stylesheet" href="css/admin/css/fontawesome.min.css">
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="css/admin/css/bootstrap.min.css">
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="css/admin/css/templatemo-style.css">
    <!--
	Product Admin CSS Template
	https://templatemo.com/tm-524-product-admin
    -->
    <script src="css/admin/js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="css/admin/js/moment.min.js"></script>
    <!-- https://momentjs.com/ -->
    <script src="css/admin/js/Chart.min.js"></script>
    <!-- http://www.chartjs.org/docs/latest/ -->
    <script src="css/admin/js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
    <script src="css/admin/js/tooplate-scripts.js"></script>

    <?php include('conexao.php');?>

    
  <?php 
    session_start(); 
    
    
  ?>

  </head>

  <body id="reportsPage">
    <nav class="navbar navbar-expand-xl">
      <div class="container h-100">
        <a class="navbar-brand" href="admin_index.php">
          <h1 class="tm-site-title mb-0">Painel do Administrador</h1>
        </a>
        <button
          class="navbar-toggler ml-auto mr-0"
          type="button"
          data-toggle="collapse"
          data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <i class="fas fa-bars tm-nav-icon"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mx-auto h-100">
            <li class="nav-item">
              <a class="nav-link" href="admin_index.php">
                <i class="fas fa-tachometer-alt"></i> Dashboard
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                id="navbarDropdown"
                role="button"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false">
                <i class="far fa-file-alt"></i>
                <span> Relatórios <i class="fas fa-angle-down"></i> </span>
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="admin_relvendas.php">Relatório de Vendas</a>
                    <a class="dropdown-item" href="admin_relclientes.php">Relatório de Clientes</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="admin_produto.php">
                <i class="fas fa-shopping-cart"></i> Produtos
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="admin_contas.php">
                <i class="far fa-user"></i> Contas
              </a>
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                id="navbarDropdown"
                role="button"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false">
                <i class="fas fa-cog"></i>
                <span> Settings <i class="fas fa-angle-down"></i> </span>
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Perfil</a>
                <a class="dropdown-item" href="#">Pagamentos</a>
                <a class="dropdown-item" href="#">Customização</a>
              </div>
            </li>
          </ul>
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link d-block" href="login.php">
                Admin, <b>Logout</b>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container mt-5">
      <div class="row tm-content-row">
        <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8 tm-block-col">
          <div class="tm-bg-primary-dark tm-block tm-block-products">
            <div class="tm-product-table-container">
              <table class="table table-hover tm-table-small tm-product-table">
                <thead>
                  <tr>
                    <th scope="col">NOME DO PRODUTO</th>
                    <th scope="col">PREÇO</th>
                    <th scope="col">UNIDADES VENDIDAS</th>
                    <th scope="col">&nbsp;</th>
                    <th scope="col">&nbsp;</th>
                  </tr>
                </thead>
               
                <?php
                $resultado=mysqli_query($conexao,  "SELECT * FROM produtos");
                  if($resultado){
                    while($row = mysqli_fetch_assoc($resultado)){
              ?>
                      <tbody>
                          <tr>
                            <td>
                              <?php echo "<p></p>".($row['nome_prod']);?>
                            </td>
                            <td>
                              <?php echo "<p></p>".($row['preco']);?>
                            </td>
                            <td>
                              <?php echo "<p></p>".(1000 - $row['estoque']);?>
                            </td>
                            <td>
                            <a href="alterar.php?id=<?php echo $row['id_produto'];?>" class="tm-product-delete-link">
                                <i class="far fa-edit tm-product-delete-icon"></i>
                            </a>
                            </td>
                            <td>
                            <a href="excluir.php?id=<?php echo $row['id_produto'];?>" class="tm-product-delete-link">
                                <i class="far fa-trash-alt tm-product-delete-icon"></i>
                            </a>
                            </td>
                          </tr>
                      </tbody>
            <?php
                  }//fim do while
                }//fim do if
              ?>
                
              </table>
            </div>
            <!-- table container -->
            <a
              href="admin_addproduto.php"
              class="btn btn-primary btn-block text-uppercase mb-3">Incluir Novo Produto</a>
          </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 tm-block-col">
          <div class="tm-bg-primary-dark tm-block tm-block-product-categories">
            <h2 class="tm-block-title">Matérias</h2>
            <div class="tm-product-table-container">
              <table class="table tm-table-small tm-product-table">
                <tbody>
                <?php
                      $resultado=mysqli_query($conexao,"SELECT * FROM categorias");
                        while($linha=mysqli_fetch_assoc($resultado)){
                    ?>
                        <option value="<?php echo $linha['id_cat']; ?>">
                        <tr>
                            
                        <td class="tm-product-name"><?php echo ($linha['nome_cat']);?></td>
                        <td class="text-center">
                        <a href="#" class="tm-product-delete-link">
                        <i class="far fa-trash-alt tm-product-delete-icon"></i></a>


                        </option>
                        </tr>
                      <?php 
                      }?>
                </tbody>
              </table>
            </div>
            <!-- table container -->
            <button class="btn btn-primary btn-block text-uppercase mb-3">
              Incluir Nova Matéria
            </button>
          </div>
        </div>
      </div>
    </div>
    <footer class="tm-footer row tm-mt-small">
      <div class="col-12 font-weight-light">
        <p class="text-center text-white mb-0 px-4 small">
          Copyright &copy; <b>2018</b> All rights reserved. 
          
          Design: <a rel="nofollow noopener" href="https://templatemo.com" class="tm-footer-link">Template Mo</a>
        </p>
      </div>
    </footer>


    <script>
      $(function() {
        $(".tm-product-name").on("click", function() {
          window.location.href = "admin_editproduto.php";
        });
      });
    </script>
  </body>
</html>