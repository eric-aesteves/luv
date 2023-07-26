<?php 
    include_once "conexao.php";
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $selecionando = mysqli_query($conexao,"SELECT * FROM user WHERE 'email' = $email and 'senha' = $senha");
    $num = mysqli_num_rows($selecionando);
    if($num == 1){
        while($row = mysqli_fetch_array($selecionando)){
            $id = $row['id'];
            $nome = $row['nome'];
            $email = $row['email'];
            $data_nascimento = $row['data_nascimento'];
            $sexo = $row['sexo'];
            $orientacao = $row['orientacao'];

            session_start();
            $_SESSION['nome'] = $nome;
            $_SESSION['email'] = $email;
            $_SESSION['sexo'] = $sexo;
            $_SESSION['orientacao'] = $orientacao;
            $_SESSION['data_nascimento'] = $data_nascimento;

            header("Location: menu.php");
        }   
    }
    else{
        header("Location: index.php");
    }
?>