<?php

//enviar com pontuação para o banco
ini_set('default_charset', 'utf8');

//acesso do banco de dados
include_once("conexao.php");

//coletar as informações do formulario como array
$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

var_dump($dados);

//validação de dados e QUERY
if(!empty($dados['enviar'])){
    $query_cad_cliente = "UPDATE cliente SET id=:inputId, nome=:inputNome, cpf=:inputCpf, rg=:inputRg, email=:inputEmail, telefone=:inputTelefone, celular=:inputCelular, data_nascimento=:inputDataNascimento, status=1 WHERE id = :inputId";

    $cad_cliente = $conn->prepare($query_cad_cliente);
    $cad_cliente->bindParam(':inputId', $dados['inputId']);
    $cad_cliente->bindParam(':inputNome', $dados['inputNome']);
    $cad_cliente->bindParam(':inputCpf', $dados['inputCpf']);
    $cad_cliente->bindParam(':inputRg', $dados['inputRg']);
    $cad_cliente->bindParam(':inputEmail', $dados['inputEmail']);
    $cad_cliente->bindParam(':inputTelefone', $dados['inputTelefone']);
    $cad_cliente->bindParam(':inputCelular', $dados['inputCelular']);
    $cad_cliente->bindParam(':inputDataNascimento', $dados['inputDataNascimento']);
    $cad_cliente->execute();
    header("Location: index.html");

}else{
    echo "Erro";
}


?>