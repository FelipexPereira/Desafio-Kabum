<?php

//enviar com pontuação para o banco
ini_set('default_charset', 'utf8');

//acesso do banco de dados
include_once("conexao.php");

//coletar as informações do formulario como array
$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

//var_dump($dados);

//validação de dados e QUERY
//verifica se o formulario foi enviado e não está vazio
if(!empty($dados['enviar'])){

//Query para inserir um novo cadastro
    $query_cad_cliente = "INSERT INTO cliente
    (nome, cpf, rg, email, telefone, celular, data_nascimento, status) VALUES
    (:inputNome, :inputCpf, :inputRg, :inputEmail, :inputTelefone, :inputCelular, :inputDataNascimento, 1)";
    
//prepara a query
    $cad_cliente = $conn->prepare($query_cad_cliente);

//vincular os valores que vieram do post aos que vão ser inseridos na query
    $cad_cliente->bindParam(':inputNome', $dados['inputNome']);
    $cad_cliente->bindParam(':inputCpf', $dados['inputCpf']);
    $cad_cliente->bindParam(':inputRg', $dados['inputRg']);
    $cad_cliente->bindParam(':inputEmail', $dados['inputEmail']);
    $cad_cliente->bindParam(':inputTelefone', $dados['inputTelefone']);
    $cad_cliente->bindParam(':inputCelular', $dados['inputCelular']);
    $cad_cliente->bindParam(':inputDataNascimento', $dados['inputDataNascimento']);

//excuta a query
    $cad_cliente->execute();

//redireciona a pagina inicial
    header("Location: cadastrar.html");
    echo"<script language='javascript' type='text/javascript'>alert('Cadastrou!');</script>";

//se o codigo não executar a aparece esta mensagem de erro
}else{
    echo "Erro";
}


?>