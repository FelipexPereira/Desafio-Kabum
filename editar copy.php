<?php
  include_once("conexao.php");
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista</title>

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link href="css/styles.css" rel="stylesheet" crossorigin="anonymous">
    <script src="js/bootstrap.bundle.min.js"  crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="index.html">HOME</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" href="cadastrar.html">Cadastrar</a>
                    <a class="nav-link" href="consultar.php">Consultar</a>
                    <a class="nav-link active" href="editar.php">Editar</a>
                </div>
              </div>
            </div>
          </nav>
    </header>
    <main>
        <div>
            <div style="margin-bottom: 5vh;">
                <h3 class="display-2 fw-bold text-sm-center">Lista de Clientes</h3>
            </div>
            <div class="container">
              <div class="row">
                <?php
                  $query_lista = "SELECT id, nome, email FROM cliente
                  ORDER BY id ASC";
                  $result_clientes = $conn->prepare($query_lista);
                  $result_clientes->execute();

                  while($row_cliente = $result_clientes->fetch(PDO::FETCH_ASSOC)){
                    //var_dump($row_cliente);
                    extract($row_cliente);
                    echo "<style>";
                    echo ".div1 {
                        width: 50%;
                        display: inline-block;
                    }";

                    echo "@media screen and (max-width: 620px) {
                        .div1 {
                            width: 100%;
                        }
                    }";

                    echo "@media screen and (min-width: 621px) and (max-width: 1000px) {
                        .div1 {
                            width: 50%;

                        }
                    }";

                    echo "@media screen and (min-width: 1001px) and (max-width: 1600px) {
                        .div1 {
                            width: 30%;
                        }
                    }";
                    echo "</style>";
                    echo "<div class='div1' style='border: 3px solid rgb(0,0,0);'>";
                    echo "<hr>";
                    echo "<b>ID:  </b> $id <br>";
                    echo "<b>NOME:  </b> $nome <br>";
                    echo "<b>EMAIL: </b>$email <br>";
                    echo "<a href='edicao.php?id=$id'><b>Editar</b></a>";
                    echo "<hr>";
                    echo "</div>";
                  }
                ?>
              </div>
            </div>
            
        </div>
    </main>
    <footer class="py-4 bg-light mt-auto" style="position: fixed; bottom: 0; width: 100%;">
            <div class="container-fluid px-4">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-muted">&copy; FelipexPereira 2023</div>
                </div>
            </div>
      </footer>
</body>
</html>