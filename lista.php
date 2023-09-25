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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="index.html">KABUM</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                  <a class="nav-link active" aria-current="page" href="index.html">Home</a>
                  <a class="nav-link" href="cadastro.html">Cadastrar</a>
                  <a class="nav-link" href="lista.php">Clientes</a>
                </div>
              </div>
            </div>
          </nav>
    </header>
    <main>
        <div style="margin: 1rem 25% 5rem 25%;">
            <div style="margin-bottom: 5vh;">
                <h3 class="display-2 fw-bold text-sm-center">Lista de Clientes</h3>
            </div>
            <div style="align-items: center;">
              <?php
                $query_lista = "SELECT id, nome, email FROM cliente 
                WHERE status = 1 
                ORDER BY nome ASC";
                $result_clientes = $conn->prepare($query_lista);
                $result_clientes->execute();

                while($row_cliente = $result_clientes->fetch(PDO::FETCH_ASSOC)){
                  //var_dump($row_cliente);
                  extract($row_cliente);
                  echo "ID: $id <br>";
                  echo "NOME: $nome <br>";
                  echo "EMAIL: $email <br>";
                  echo "<a href='editar.php?id=$id'>Editar</a>";
                  echo "<hr>";
                }
              ?>
            </div>
        </div>
    </main>
    <footer class="py-4 bg-light mt-auto" style="position: fixed; bottom: 0; width: 100%;">
            <div class="container-fluid px-4">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-muted">&copy; Kabum 2023</div>
                </div>
            </div>
      </footer>
</body>
</html>