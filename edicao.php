<?php

session_start();

include_once("conexao.php");

//Recuperar o id do registro        filtro por numero inteiro
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
//var_dump($id);
//query do cliente do id recuperado
$query_cliente = "SELECT * FROM cliente WHERE id = $id";
//preparacao de query
$result_cliente = $conn->prepare($query_cliente);
//execucao de query
$result_cliente->execute();
//recuperar a linha do select
$row_cliente = $result_cliente->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link href="css/styles.css" rel="stylesheet" crossorigin="anonymous">
    <script src="js/bootstrap.bundle.min.js"  crossorigin="anonymous"></script>

</head>
<body style="background-color: #F0F0F0;">
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
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
            <div>
                <h3 class="display-2 fw-bold text-sm-center">Editar Cadastro</h3>
                <p class="text-center">Nesta interface, é possível editar as informações dos clientes e utilizar o botão "Ativo" para alternar o status de ativação do cliente.</p>
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
                  <form method="post" action="proc_edicao.php">
                      <div class="row mb-3">
                          <div class="col-md-6">
                              <div class="form-floating mb-3 mb-md-0">
                                  <input class="form-control" id="inputNome" name="inputNome"  type="text" placeholder="Nome" value="<?php echo $row_cliente['nome'];?>"/>
                                  <label for="inputNome">Nome</label>
                                  <!--ocultei esta linha para não poder editar o ID-->
                                  <input class="form-control" id="inputId" name="inputId"  type="hidden" placeholder="ID" value="<?php echo $row_cliente['id'];?>"/>
                                  <label for="input"></label>
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
                      </div>
                      <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="inputStatus" name="inputStatus"
                                <?php 
                                    if($row_cliente['status'] == 1){
                                    echo "checked";}
                                    ?>/>
                                <a style="font-size: 1.3rem;">Ativo</a>
                              </div>
                      <div class="mt-4 mb-0 form-floating">
                        <div class="btn-grid">
                            <div class="col-md-6">
                                <div class="mt-4 mb-0 form-floating b">
                                    <a class="btn btn-primary btn-standard btn-styles" href="editar.php">Voltar</a>
                                    <input class="btn btn-primary btn-standard btn-styles" type="submit" name="enviar" id="enviar" value="Salvar" style="margin-left: 1rem;">
                                </div>
                            </div>
                        </div>
                    </div> 
                  </form>
            </div>

        </div>
    </main>
    <!-- fixar o footer -->
    <footer class="py-4 bg-dark mt-auto fixed-bottom ">
        <div class="container-fluid px-4">
            <div class="d-flex align-items-center justify-content-between small">
            <div class="text-muted"><b>&copy; FelipexPereira 2023</b></div>
            </div>
        </div>
    </footer>

</body>
</html>