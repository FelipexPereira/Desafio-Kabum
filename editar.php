<?php

session_start();

include_once("conexao.php");

//Recuperar o id do registro        filtro por numero inteiro
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
var_dump($id);
$query_cliente = "SELECT * FROM cliente WHERE id = $id";
$result_cliente = $conn->prepare($query_cliente);
$result_cliente->execute();

$row_cliente = $result_cliente->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>

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
        <div class="main">
            <div style="margin-bottom: 5vh;">
                <h3 class="display-2 fw-bold text-sm-center">Editar Cadastro</h3>
            </div>
            <div>
                <?php
                if(isset($_SESSION['msg'])){
                  echo $_SESSION['msg'];
                  unset($_SESSION['msg']);
                }else{
                    
                }
                ?>
                <div class="formulario">
                  <form method="post" action="proc_editar.php">
                      <div class="row mb-3">
                          <div class="col-md-6">
                              <div class="form-floating mb-3 mb-md-0">
                                  <input class="form-control" id="inputNome" name="inputNome"  type="text" placeholder="Nome Fornecedor" value="<?php echo $row_cliente['nome'];?>"/>
                                  <label for="inputNome">Nome</label>
                                  <input class="form-control" id="inputId" name="inputId"  type="hidden" placeholder="ID" value="<?php echo $row_cliente['id'];?>"/>
                                  <label for="inputNome">id</label>
                              </div>
                          </div>   
                          <div class="col-md-6">
                              <div class="form-floating">
                                  <input class="form-control" id="inputEmail" type="email" placeholder="name@example.com" name="inputEmail" value="<?php echo $row_cliente['email'];?>"/>
                                  <label for="inputEmail">Email</label>
                              </div>
                          </div>                
                      </div>
                      <div class="row mb-3">
                          <div class="col-md-6">
                              <div class="form-floating mb-3 mb-md-0">
                                  <input class="form-control" id="inputCpf" type="text" placeholder="CPF" name="inputCpf" value="<?php echo $row_cliente['cpf'];?>"/>
                                  <label for="inputCpf">CPF</label>
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="form-floating">
                                  <input class="form-control" id="inputRg" type="text" placeholder="RG" name="inputRg" value="<?php echo $row_cliente['rg'];?>"/>
                                  <label for="inputRg">RG</label>
                              </div>
                          </div>
                      </div>
                      <div class="row mb-3">
                          <div class="col-md-6">
                              <div class="form-floating mb-3 mb-md-0">
                                  <input class="form-control" id="inputTelefone" type="tel" placeholder="(xx) xxxxx-xxxx" name="inputTelefone" value="<?php echo $row_cliente['telefone'];?>"/>
                                  <label for="inputTelefone">Telefone</label>
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="form-floating">
                                  <input class="form-control" id="inputCelular" type="tel" placeholder="(xx) xxxxx-xxxx" name="inputCelular" value="<?php echo $row_cliente['celular'];?>"/>
                                  <label for="inputCelular">Celular</label>
                              </div>
                          </div>
                      </div>
                      <div class="row mb-3">
                          <div class="col-md-6">
                              <div class="form-floating mb-3 mb-md-0">
                                  <input class="form-control" id="inputDataNascimento" type="date" placeholder="Data de Aniversário" name="inputDataNascimento" value="<?php echo $row_cliente['data_nascimento'];?>"/>
                                  <label for="inputDataNascimento">Data de Nascimento</label>
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="form-floating">
                              <label for="inputStatus">
                                  <input type="checkbox" id="inputStatus" name="InputStatus" value="InputStatus"> Ativo
                              </label>
                              </div>
                          </div>
                      </div>
                      <div class="row mb-3">
                          <div class="btn-grid">
                              <div class="mt-4 mb-0">
                                  <div class="d-grid">
                                      <input class="btn btn-primary btn-standard " type="submit" name="enviar" id="enviar" value="Salvar">
                                  </div>
                              </div>
                              <div class="mt-4 mb-0">
                                  <div class="d-grid"><a class="btn btn-primary btn-standard " href="index.html">Voltar</a></div>
                              </div>
                          </div>
                      </div> 
                  </form>
            </div>

        </div>
    </main>
    <footer class="py-4 bg-light mt-auto" style="position: absolute; bottom: 0; width: 100%;">
            <div class="container-fluid px-4">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-muted">&copy; Kabum 2023</div>
                </div>
            </div>
    </footer>

</body>
</html>