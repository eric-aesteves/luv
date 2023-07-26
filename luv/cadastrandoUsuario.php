<?php 
    include_once "conexao.php";

    $email = $_POST['email'];
    $nome = $_POST['nome'];
    $data_nascimento = $_POST['data_nascimento'];
    $genero = $_POST['genero'];
    $hobbies = $_POST['hobbies'];
    $sexo = $_POST['sexo'];
    $orientacao = $_POST['orientacao'];
    $senha = $_POST['senha'];

    $inserindo = mysqli_query($conexao,"INSERT INTO user ('nome','email','data_nascimento','sexo','orientacao','senha') VALUES ('$nome','$email','$data_nascimento','$sexo','$orientacao','$senha')");
?>